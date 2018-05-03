<?php
/* This Source Code Form is subject to the terms of the Mozilla Public
* License, v. 2.0. If a copy of the MPL was not distributed with this
* file, You can obtain one at http://mozilla.org/MPL/2.0/. */

// Include required functions file
require_once(realpath(__DIR__ . '/../includes/functions.php'));
require_once(realpath(__DIR__ . '/../includes/authenticate.php'));
require_once(realpath(__DIR__ . '/../includes/display.php'));
require_once(realpath(__DIR__ . '/../includes/reporting.php'));

// Include Zend Escaper for HTML Output Encoding
require_once(realpath(__DIR__ . '/../includes/Component_ZendEscaper/Escaper.php'));
$escaper = new Zend\Escaper\Escaper('utf-8');

// Add various security headers
header("X-Frame-Options: DENY");
header("X-XSS-Protection: 1; mode=block");

// If we want to enable the Content Security Policy (CSP) - This may break Chrome
if (CSP_ENABLED == "true")
{
  // Add the Content-Security-Policy header
  header("Content-Security-Policy: default-src 'self' 'unsafe-inline';");
}

// Session handler is database
if (USE_DATABASE_FOR_SESSIONS == "true")
{
  session_set_save_handler('sess_open', 'sess_close', 'sess_read', 'sess_write', 'sess_destroy', 'sess_gc');
}

// Start the session
session_set_cookie_params(0, '/', '', isset($_SERVER["HTTPS"]), true);

if (!isset($_SESSION))
{
    session_name('SimpleRisk');
    session_start();
}

// Include the language file
require_once(language_file());

require_once(realpath(__DIR__ . '/../includes/csrf-magic/csrf-magic.php'));

// Check for session timeout or renegotiation
session_check();

// Check if access is authorized
if (!isset($_SESSION["access"]) || $_SESSION["access"] != "granted")
{
  header("Location: ../index.php");
  exit(0);
}// Check if access is authorized
if (isset($_SESSION["general"]) && $_SESSION["general"] == 1)
{
  header("Location: ../index.php");
  exit(0);
}


// Get page info
$currentpage = isset($_GET['currentpage']) ? $_GET['currentpage'] : "1";
// Get teams submitted by user
$teams = isset($_GET['teams']) ? $_GET['teams'] : "";
// Get owners submitted by user
$owners = isset($_GET['owners']) ? $_GET['owners'] : "";
// Get owner's managers submitted by user
$ownersmanagers = isset($_GET['ownersmanagers']) ? $_GET['ownersmanagers'] : "";

$teamOptions = get_teams_by_login_user();
array_unshift($teamOptions, array(
    'value' => "0",
    'name' => $lang['Unassigned'],
));

$ownerOptions = $ownersManagerOptions = get_table_ordered_by_name("user");
array_unshift($ownerOptions, array(
    'value' => "0",
    'name' => $lang['NoOwner'],
));
array_unshift($ownersManagerOptions, array(
    'value' => "0",
    'name' => $lang['NoOwnersManager'],
));

// Set the columns
(isset($_GET['id']) ? $id = true : $id = false);
(isset($_GET['risk_status']) ? $risk_status = true : $risk_status = false);
(isset($_GET['subject']) ? $subject = true : $subject = false);
(isset($_GET['reference_id']) ? $reference_id = true : $reference_id = false);
(isset($_GET['regulation']) ? $regulation = true : $regulation = false);
(isset($_GET['control_number']) ? $control_number = true : $control_number = false);
(isset($_GET['location']) ? $location = true : $location = false);
(isset($_GET['source']) ? $source = true : $source = false);
(isset($_GET['category']) ? $category = true : $category = false);
(isset($_GET['team']) ? $team = true : $team = false);
(isset($_GET['technology']) ? $technology = true : $technology = false);
(isset($_GET['owner']) ? $owner = true : $owner = false);
(isset($_GET['manager']) ? $manager = true : $manager = false);
(isset($_GET['submitted_by']) ? $submitted_by = true : $submitted_by = false);
(isset($_GET['scoring_method']) ? $scoring_method = true : $scoring_method = false);
(isset($_GET['calculated_risk']) ? $calculated_risk = true : $calculated_risk = false);
(isset($_GET['submission_date']) ? $submission_date = true : $submission_date = false);
(isset($_GET['review_date']) ? $review_date = true : $review_date = false);
(isset($_GET['project']) ? $project = true : $project = false);
(isset($_GET['mitigation_planned']) ? $mitigation_planned = true : $mitigation_planned = false);
(isset($_GET['management_review']) ? $management_review = true : $management_review = false);
(isset($_GET['days_open']) ? $days_open = true : $days_open = false);
(isset($_GET['next_review_date']) ? $next_review_date = true : $next_review_date = false);
(isset($_GET['next_step']) ? $next_step = true : $next_step = false);
(isset($_GET['affected_assets']) ? $affected_assets = true : $affected_assets = false);
(isset($_GET['planning_strategy']) ? $planning_strategy = true : $planning_strategy = false);
(isset($_GET['mitigation_effort']) ? $mitigation_effort = true : $mitigation_effort = false);
(isset($_GET['mitigation_cost']) ? $mitigation_cost = true : $mitigation_cost = false);
(isset($_GET['mitigation_owner']) ? $mitigation_owner = true : $mitigation_owner = false);
(isset($_GET['mitigation_team']) ? $mitigation_team = true : $mitigation_team = false);
(isset($_GET['risk_assessment']) ? $risk_assessment = true : $risk_assessment = false);
(isset($_GET['additional_notes']) ? $additional_notes = true : $additional_notes = false);
(isset($_GET['current_solution']) ? $current_solution = true : $current_solution = false);
(isset($_GET['security_recommendations']) ? $security_recommendations = true : $security_recommendations = false);
(isset($_GET['security_requirements']) ? $security_requirements = true : $security_requirements = false);

    // Set the default fields to show
//    $id = true;
//    $subject = true;
//    $calculated_risk = true;
//    $submission_date = true;
//    $mitigation_planned = true;
//    $management_review = true;
?>

<!doctype html>
<html>

<head>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/jquery-ui.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootstrap-multiselect.js"></script>
    <script src="../js/sorttable.js"></script>
    <script src="../js/obsolete.js"></script>
    <title>SimpleRisk: Enterprise Risk Management Simplified</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap-responsive.css">
    <link rel="stylesheet" href="../css/bootstrap-multiselect.css">

    <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/theme.css">
    <script type="text/javascript">
        $(function(){
            // Team dropdown
            $("#teams").multiselect({
                allSelectedText: '<?php echo $escaper->escapeHtml($lang['AllTeams']); ?>',
                includeSelectAllOption: true,
                onChange: function(element, checked){
                    var brands = $('#teams option:selected');
                    var selected = [];
                    $(brands).each(function(index, brand){
                        selected.push($(this).val());
                    });
                    
                    $("#team_options").val(selected.join(","));
                    $("#risks_by_teams_form").submit();
                }
            });
            
            // Owner dropdown
            $("#owners").multiselect({
                allSelectedText: '<?php echo $escaper->escapeHtml($lang['AllOwners']); ?>',
                includeSelectAllOption: true,
                onChange: function(element, checked){
                    var brands = $('#owners option:selected');
                    var selected = [];
                    $(brands).each(function(index, brand){
                        selected.push($(this).val());
                    });
                    
                    $("#owner_options").val(selected.join(","));
                    $("#risks_by_teams_form").submit();
                }
            });
            
            // Owner's dropdown
            $("#ownersmanagers").multiselect({
                allSelectedText: "<?php echo $lang['AllOwnersManagers']; ?>",
                includeSelectAllOption: true,
                onChange: function(element, checked){
                    var brands = $('#ownersmanagers option:selected');
                    var selected = [];
                    $(brands).each(function(index, brand){
                        selected.push($(this).val());
                    });
                    
                    $("#ownersmanager_options").val(selected.join(","));
                    $("#risks_by_teams_form").submit();
                }
            });
            
            $(".pagination ul > li > a").click(function(e){
                e.preventDefault();
                $("#currentpage").val($(this).text().trim().toLowerCase());
                $("#risks_by_teams_form").submit();
            })
            
            $(".colums-select-container input[type=checkbox]").click(function(){
                $("#risks_by_teams_form").submit();
            })
        });
    </script>

</head>

<body>

    <?php view_top_menu("Reporting"); ?>

    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span3">
                <?php view_reporting_menu("AllOpenRisksByTeam"); ?>
            </div>
            <div class="span9">
                <div class="row-fluid">
                    <div class="span4">
                        <u><?php echo $escaper->escapeHtml($lang['Teams']); ?></u>: &nbsp;
                        <?php create_multiple_dropdown("teams", ":".implode(":", explode(",", $teams)).":" , NULL, $teamOptions); ?>
                    </div>
                    <div class="span4">
                        <u><?php echo $escaper->escapeHtml($lang['Owner']); ?></u>: &nbsp;
                        <?php create_multiple_dropdown("owners", ":".implode(":", explode(",", $owners)).":" , NULL, $ownerOptions); ?>
                    </div>
                    <div class="span4">
                        <u><?php echo $escaper->escapeHtml($lang['OwnersManager']); ?></u>: &nbsp;
                        <?php create_multiple_dropdown("ownersmanagers", ":".implode(":", explode(",", $ownersmanagers)).":" , NULL, $ownersManagerOptions); ?>
                    </div>
                </div>
                
                <div class="row-fluid" style="margin-top: 14px;">
                    <div class="well">
                        <form id="risks_by_teams_form" method="GET">
                            <input type="hidden" value="<?php echo $currentpage; ?>" name="currentpage" id="currentpage" >
                            <input type="hidden" value="<?php echo $teams; ?>" name="teams" id="team_options">
                            <input type="hidden" value="<?php echo $owners; ?>" name="owners" id="owner_options">
                            <input type="hidden" value="<?php echo $ownersmanagers; ?>" name="ownersmanagers" id="ownersmanager_options">
                            <div class="colums-select-container">
                                <?php echo display_risk_columns($id, $risk_status, $subject, $reference_id, $regulation, $control_number, $location, $source, $category, $team, $technology, $owner, $manager, $submitted_by, $scoring_method, $calculated_risk, $submission_date, $review_date, $project, $mitigation_planned, $management_review, $days_open, $next_review_date, $next_step, $affected_assets, $planning_strategy, $mitigation_effort, $mitigation_cost, $mitigation_owner, $mitigation_team, $risk_assessment, $additional_notes, $current_solution, $security_recommendations, $security_requirements) ?>
                            </div>
                        </form>

                    </div>
                </div>
                
                <!--<div class="row-fluid" id="risks-open-by-team-container">
                    <?php // get_risk_table(22); ?>
                </div>-->

                <div class="row-fluid" id="risks-open-by-team-container">
                    <?php risk_table_open_by_team($teams, $owners, $ownersmanagers, $currentpage, $id, $risk_status, $subject, $reference_id, $regulation, $control_number, $location, $source, $category, $team, $technology, $owner, $manager, $submitted_by, $scoring_method, $calculated_risk, $submission_date, $review_date, $project, $mitigation_planned, $management_review, $days_open, $next_review_date, $next_step, $affected_assets, $planning_strategy, $mitigation_effort, $mitigation_cost, $mitigation_owner, $mitigation_team, $risk_assessment, $additional_notes, $current_solution, $security_recommendations, $security_requirements); ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
