<?php
/* This Source Code Form is subject to the terms of the Mozilla Public
* License, v. 2.0. If a copy of the MPL was not distributed with this
* file, You can obtain one at http://mozilla.org/MPL/2.0/. */

// Include required functions file
require_once(realpath(__DIR__ . '/../includes/functions.php'));
require_once(realpath(__DIR__ . '/../includes/authenticate.php'));
require_once(realpath(__DIR__ . '/../includes/display.php'));
require_once(realpath(__DIR__ . '/../includes/assets.php'));
require_once(realpath(__DIR__ . '/../includes/alerts.php'));

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

// Load CSRF Magic
require_once(realpath(__DIR__ . '/../includes/csrf-magic/csrf-magic.php'));

// Include the language file
require_once(language_file());

// Check for session timeout or renegotiation
session_check();

// Check if access is authorized
if (!isset($_SESSION["access"]) || $_SESSION["access"] != "granted")
{
  header("Location: ../index.php");
  exit(0);
}

// Check if the user has access to submit risks
if (!isset($_SESSION["submit_risks"]) || $_SESSION["submit_risks"] != 1)
{
  $submit_risks = false;

  // Display an alert
  set_alert(true, "bad", "You do not have permission to submit new risks.  Any risks that you attempt to submit will not be recorded.  Please contact an Administrator if you feel that you have reached this message in error.");
}
else $submit_risks = true;

// Check if the subject is null
if (isset($_POST['subject']) && $_POST['subject'] == "")
{
  $submit_risks = false;

  // Display an alert
  set_alert(true, "bad", "The subject of a risk cannot be empty.");
  // header('HTTP/1.1 500 Internal Server Booboo');
  // header('Content-Type: application/json; charset=UTF-8');  
  // die(json_encode(array('message' => 'ERROR', 'code' => 1337)));
}

// Check if a new risk was submitted and the user has permissions to submit new risks
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest' && $submit_risks)
{
  $status = "New";
  $subject = $_POST['subject'];
  $reference_id = $_POST['reference_id'];
  $regulation = (int)$_POST['regulation'];
  $control_number = $_POST['control_number'];
  $location = (int)$_POST['location'];
  $source = (int)$_POST['source'];
  $category = (int)$_POST['category'];
  $team = (int)$_POST['team'];
  $technology = (int)$_POST['technology'];
  $owner = (int)$_POST['owner'];
  $manager = (int)$_POST['manager'];
  $assessment = $_POST['assessment'];
  $notes = $_POST['notes'];
  $assets = $_POST['assets'];
  $additional_stakeholders = empty($_POST['additional_stakeholders']) ? "" : implode(",", $_POST['additional_stakeholders']);

  // Risk scoring method
  // 1 = Classic
  // 2 = CVSS
  // 3 = DREAD
  // 4 = OWASP
  // 5 = Custom
  $scoring_method = (int)$_POST['scoring_method'];

  // Classic Risk Scoring Inputs
  $CLASSIClikelihood = (int)$_POST['likelihood'];
  $CLASSICimpact =(int) $_POST['impact'];

  // CVSS Risk Scoring Inputs
  $CVSSAccessVector = $_POST['AccessVector'];
  $CVSSAccessComplexity = $_POST['AccessComplexity'];
  $CVSSAuthentication = $_POST['Authentication'];
  $CVSSConfImpact = $_POST['ConfImpact'];
  $CVSSIntegImpact = $_POST['IntegImpact'];
  $CVSSAvailImpact = $_POST['AvailImpact'];
  $CVSSExploitability = $_POST['Exploitability'];
  $CVSSRemediationLevel = $_POST['RemediationLevel'];
  $CVSSReportConfidence = $_POST['ReportConfidence'];
  $CVSSCollateralDamagePotential = $_POST['CollateralDamagePotential'];
  $CVSSTargetDistribution = $_POST['TargetDistribution'];
  $CVSSConfidentialityRequirement = $_POST['ConfidentialityRequirement'];
  $CVSSIntegrityRequirement = $_POST['IntegrityRequirement'];
  $CVSSAvailabilityRequirement = $_POST['AvailabilityRequirement'];

  // DREAD Risk Scoring Inputs
  $DREADDamage = (int)$_POST['DREADDamage'];
  $DREADReproducibility = (int)$_POST['DREADReproducibility'];
  $DREADExploitability = (int)$_POST['DREADExploitability'];
  $DREADAffectedUsers = (int)$_POST['DREADAffectedUsers'];
  $DREADDiscoverability = (int)$_POST['DREADDiscoverability'];

  // OWASP Risk Scoring Inputs
  $OWASPSkillLevel = (int)$_POST['OWASPSkillLevel'];
  $OWASPMotive = (int)$_POST['OWASPMotive'];
  $OWASPOpportunity = (int)$_POST['OWASPOpportunity'];
  $OWASPSize = (int)$_POST['OWASPSize'];
  $OWASPEaseOfDiscovery = (int)$_POST['OWASPEaseOfDiscovery'];
  $OWASPEaseOfExploit = (int)$_POST['OWASPEaseOfExploit'];
  $OWASPAwareness = (int)$_POST['OWASPAwareness'];
  $OWASPIntrusionDetection = (int)$_POST['OWASPIntrusionDetection'];
  $OWASPLossOfConfidentiality = (int)$_POST['OWASPLossOfConfidentiality'];
  $OWASPLossOfIntegrity = (int)$_POST['OWASPLossOfIntegrity'];
  $OWASPLossOfAvailability = (int)$_POST['OWASPLossOfAvailability'];
  $OWASPLossOfAccountability = (int)$_POST['OWASPLossOfAccountability'];
  $OWASPFinancialDamage = (int)$_POST['OWASPFinancialDamage'];
  $OWASPReputationDamage = (int)$_POST['OWASPReputationDamage'];
  $OWASPNonCompliance = (int)$_POST['OWASPNonCompliance'];
  $OWASPPrivacyViolation = (int)$_POST['OWASPPrivacyViolation'];

  // Custom Risk Scoring
  $custom = (float)$_POST['Custom'];

  // Submit risk and get back the id
  $last_insert_id = submit_risk($status, $subject, $reference_id, $regulation, $control_number, $location, $source, $category, $team, $technology, $owner, $manager, $assessment, $notes, 0, 0, false, $additional_stakeholders);

  // Submit risk scoring
  submit_risk_scoring($last_insert_id, $scoring_method, $CLASSIClikelihood, $CLASSICimpact, $CVSSAccessVector, $CVSSAccessComplexity, $CVSSAuthentication, $CVSSConfImpact, $CVSSIntegImpact, $CVSSAvailImpact, $CVSSExploitability, $CVSSRemediationLevel, $CVSSReportConfidence, $CVSSCollateralDamagePotential, $CVSSTargetDistribution, $CVSSConfidentialityRequirement, $CVSSIntegrityRequirement, $CVSSAvailabilityRequirement, $DREADDamage, $DREADReproducibility, $DREADExploitability, $DREADAffectedUsers, $DREADDiscoverability, $OWASPSkillLevel, $OWASPMotive, $OWASPOpportunity, $OWASPSize, $OWASPEaseOfDiscovery, $OWASPEaseOfExploit, $OWASPAwareness, $OWASPIntrusionDetection, $OWASPLossOfConfidentiality, $OWASPLossOfIntegrity, $OWASPLossOfAvailability, $OWASPLossOfAccountability, $OWASPFinancialDamage, $OWASPReputationDamage, $OWASPNonCompliance, $OWASPPrivacyViolation, $custom);

  // Tag assets to risk
  tag_assets_to_risk($last_insert_id, $assets);

  // If a file was submitted
  if (!empty($_FILES))
  {
    for($i=0; $i<count($_FILES['file']['name']); $i++){
        if($_FILES['file']['error'][$i] || $i==0){
           continue; 
        } 
        $file = array(
            'name'      => $_FILES['file']['name'][$i],
            'type'      => $_FILES['file']['type'][$i],
            'tmp_name'  => $_FILES['file']['tmp_name'][$i],
            'size'      => $_FILES['file']['size'][$i],
            'error'     => $_FILES['file']['error'][$i],
        );
        // Upload any file that is submitted
        upload_file($last_insert_id, $file, 1);
    }
  }

  // There is an alert message
  $risk_id = $last_insert_id + 1000;

  // Display an alert
  set_alert(true, "good", "Risk ID " . $risk_id . " submitted successfully!");
}


?>

<!doctype html>
<html>

    <head>
        <script src="../js/jquery.min.js"></script>
        <script src="../js/jquery-ui.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/cve_lookup.js"></script>
        <script src="../js/basescript.js"></script>
        <script src="../js/common.js"></script>
        <script src="../js/pages/risk.js"></script>
        <script src="../js/highcharts/code/highcharts.js"></script>
        <script src="../js/bootstrap-multiselect.js"></script>

        <title>SimpleRisk: Enterprise Risk Management Simplified</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/bootstrap-responsive.css">
        <link rel="stylesheet" href="../css/divshot-util.css">
        <link rel="stylesheet" href="../css/divshot-canvas.css">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/bootstrap-multiselect.css">

        <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="../css/theme.css">

        <?php display_asset_autocomplete_script(get_entered_assets()); ?>
    </head>

    <body>

        <?php
            view_top_menu("SubmitRisk");

            // Get any alert messages
            get_alert();
        ?>
        <div id="risk_hid_id" style="display: none"  > <?php if (isset($risk_id)) echo $escaper->escapeHtml($risk_id);?></div>
        <div class="container-fluid">
          <div class="row-fluid">
            <div class="span12">

              <div id="show-alert"></div>

              <div class="row-fluid" id="tab-content-container">
                <div class='tab-data' id="tab-container">

                    <?php
                        include(realpath(__DIR__ . '/partials/add.php'));
                    ?>
                  
                </div>
              </div>

            </div>
          </div>
        </div>

        <input type="hidden" id="_delete_tab_alert" value="<?php echo $escaper->escapeHtml($lang['Are you sure you want to close the risk? All changes will be lost!']); ?>">
        <input type="hidden" id="enable_popup" value="<?php echo get_setting('enable_popup'); ?>">
        <script>
            $(document).ready(function() {

                window.onbeforeunload = function() {
                    if ($('#subject:enabled').val() != ''){
                        return "Are you sure you want to procced without saving the risk?";
                    }
                }
                
                var length = $('.tab-close').length;
                if (length == 1){
                    $('.tab-show button').hide();
                }

                function sleep(ms) {
                    return new Promise(resolve => setTimeout(resolve, ms));
                }

                focus_add_css_class("#AffectedAssetsTitle", "#assets", $("#tab-container"));
                focus_add_css_class("#RiskAssessmentTitle", "#assessment", $("#tab-container"));
                focus_add_css_class("#NotesTitle", "#notes", $("#tab-container"));
                
            });

        </script>
    </body>
</html>
