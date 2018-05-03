<?php
// Include required functions file
require_once(realpath(__DIR__ . '/../../includes/functions.php'));
require_once(realpath(__DIR__ . '/../../includes/authenticate.php'));
require_once(realpath(__DIR__ . '/../../includes/display.php'));
require_once(realpath(__DIR__ . '/../../includes/alerts.php'));

// Include Zend Escaper for HTML Output Encoding
require_once(realpath(__DIR__ . '/../../includes/Component_ZendEscaper/Escaper.php'));
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
global $lang;

require_once(realpath(__DIR__ . '/../../includes/csrf-magic/csrf-magic.php'));

// Check for session timeout or renegotiation
session_check();

// Check if access is authorized
if (!isset($_SESSION["access"]) || $_SESSION["access"] != "granted")
{
  header("Location: ../../index.php");
  exit(0);
}

?>
        
    <div id="tabs" class="risk-details">
      <div class="row-fluid tab-wrapper">
        <ul class="tabs-nav clearfix">
          <li><a id="tab_details" href="#tabs1">Details</a></li>
          <li><a id="tab_mitigation" href="#tabs2">Mitigation</a></li>
          <li><a id="tab_review" class="tabList" href="#tabs3">Review</a></li>
        </ul>

        <div class="row-fluid">
          <div class="span12">
            <div id="tabs1" class=" tabs1 risk-tab">
              <form name="details" method="post" action="" enctype="multipart/form-data">
                <?php if(@$isAjax && (!isset($action) || $action != 'editdetail')): ?>
                    <!-- Edit th risk details-->
                    <div class="tabs--action">
                        <button type="button" name="edit_details" class="btn on-view"><?php echo $escaper->escapeHtml($lang['EditDetails']); ?></button>
                        <!--<a href="/management/view.php?id=3472&amp;type=0" class="btn cancel-edit on-edit" >Cancel</a>
                        <button type="button" name="update_details" class="btn btn-danger save-details on-edit">Save Details</button>-->
                    </div>
                <?php endif; ?>

                <?php
                // If the user has selected to edit the risk
                if (isset($_POST['edit_details']) || (isset($action) && $action == 'editdetail'))
                {
                  edit_risk_details($id, $submission_date,$submitted_by, $subject, $reference_id, $regulation, $control_number, $location, $source, $category, $team, $additional_stakeholders, $technology, $owner, $manager, $assessment, $notes,  $scoring_method, $CLASSIC_likelihood, $CLASSIC_impact, $AccessVector, $AccessComplexity, $Authentication, $ConfImpact, $IntegImpact, $AvailImpact, $Exploitability, $RemediationLevel, $ReportConfidence, $CollateralDamagePotential, $TargetDistribution, $ConfidentialityRequirement, $IntegrityRequirement, $AvailabilityRequirement, $DREADDamagePotential, $DREADReproducibility, $DREADExploitability, $DREADAffectedUsers, $DREADDiscoverability, $OWASPSkillLevel, $OWASPMotive, $OWASPOpportunity, $OWASPSize, $OWASPEaseOfDiscovery, $OWASPEaseOfExploit, $OWASPAwareness, $OWASPIntrusionDetection, $OWASPLossOfConfidentiality, $OWASPLossOfIntegrity, $OWASPLossOfAvailability, $OWASPLossOfAccountability, $OWASPFinancialDamage, $OWASPReputationDamage, $OWASPNonCompliance, $OWASPPrivacyViolation, $custom);
                }
                // Otherwise we are just viewing the risk
                else
                {
                  view_risk_details($id, $submission_date, $submitted_by, $subject, $reference_id, $regulation, $control_number, $location, $source, $category, $team, $additional_stakeholders, $technology, $owner, $manager, $assessment, $notes,  $scoring_method, $CLASSIC_likelihood, $CLASSIC_impact);
                }
                ?>
                <input type="hidden" class="risk_id" value="<?php echo $id; ?>">
              </form>
            </div>
            <div id="tabs2" class="tabs2 risk-tab">

              <form name="mitigation" method="post" action="" enctype="multipart/form-data">
                <?php if(@$isAjax && (!isset($action) || $action!="editmitigation")): ?>
                    <!-- Edit mitigation -->
                    <div class="tabs--action">
                        <button type="button" name="edit_mitigation" class="btn"><?php echo $escaper->escapeHtml($lang['EditMitigation']); ?></button>
                    </div>
                <?php endif; ?>

                <?php
                  view_mitigation_details($id, $mitigation_date, $planning_strategy, $mitigation_effort, $mitigation_cost, $mitigation_owner, $mitigation_team, $current_solution, $security_requirements, $security_recommendations, $planning_date, $mitigation_percent, true);
                ?>
              </form>
            </div>
            <div id="tabs3" class="tabs3 risk-tab">
                <?php
                  view_review_details($id, $review_date, $reviewer, $review, $next_step, $next_review, $comments, true);
                ?>
            </div>
          </div>
        </div>
      </div>
      <div class="row-fluid comments--wrapper">

        <div class="well">
          <h4 class="collapsible--toggle clearfix">
              <span><i class="fa  fa-caret-right"></i><?php echo $escaper->escapeHtml($lang['Comments']); ?></span>
              <a href="#" class="add-comments pull-right"><i class="fa fa-plus"></i></a>
          </h4>

          <div class="collapsible">
            <div class="row-fluid">
              <div class="span12">

                  <form id="comment" class="comment-form" name="add_comment" method="post" action="/dashboard/comment.php?id=<?php echo $id; ?>">
                  <textarea style="width: 100%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box;" name="comment" cols="50" rows="3" id="comment-text" class="comment-text"></textarea>
                  <div class="form-actions text-right" id="comment-div">
                      <input class="btn" id="rest-btn" value="<?php echo $escaper->escapeHtml($lang['Reset']); ?>" type="reset" />
                    <button id="comment-submit" type="submit" name="submit" class="comment-submit btn btn-primary" ><?php echo $escaper->escapeHtml($lang['Submit']); ?></button>
                  </div>
                </form>
              </div>
            </div>

            <div class="row-fluid">
              <div class="span12">
                <div class="comments--list clearfix">
                    <?php
                        get_comments($id);
                    ?>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row-fluid">
          <div class="well">
            <h4 class="collapsible--toggle"><span><i class="fa fa-caret-right"></i><?php echo $escaper->escapeHtml($lang['AuditTrail']); ?></span></h4>
            <div class="collapsible">
              <div class="row-fluid">
                <div class="span12 audit-trail">
                  <?php get_audit_trail($id,36500); ?>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

    <input type="hidden" id="_token_value" value="<?php echo csrf_get_tokens(); ?>">
    <input type="hidden" id="_lang_reopen_risk" value="<?php echo $lang['ReopenRisk']; ?>">
    <input type="hidden" id="_lang_close_risk" value="<?php echo $lang['CloseRisk']; ?>">
