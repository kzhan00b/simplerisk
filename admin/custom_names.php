<?php
        /* This Source Code Form is subject to the terms of the Mozilla Public
         * License, v. 2.0. If a copy of the MPL was not distributed with this
         * file, You can obtain one at http://mozilla.org/MPL/2.0/. */

        // Include required functions file
        require_once(realpath(__DIR__ . '/../includes/functions.php'));
        require_once(realpath(__DIR__ . '/../includes/authenticate.php'));
	require_once(realpath(__DIR__ . '/../includes/display.php'));
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
        }

        // Check if access is authorized
        if (!isset($_SESSION["admin"]) || $_SESSION["admin"] != "1")
        {
                header("Location: ../index.php");
                exit(0);
        }

        // Check if the impact update was submitted
        if (isset($_POST['update_impact']))
        {
                $new_name = $_POST['new_name'];
                $value = (int)$_POST['impact'];

                // Verify value is an integer
                if (is_int($value))
                {
                        update_table("impact", $new_name, $value);

			// Display an alert
			set_alert(true, "good", "The impact naming convention was updated successfully.");
                }
        }

        // Check if the likelihood update was submitted
        if (isset($_POST['update_likelihood']))
        {
                $new_name = $_POST['new_name'];
                $value = (int)$_POST['likelihood'];

                // Verify value is an integer
                if (is_int($value))
                {
                        update_table("likelihood", $new_name, $value);

			// Display an alert
			set_alert(true, "good", "The likelihood naming convention was updated successfully.");
                }
        }

        // Check if the mitigation effort update was submitted
        if (isset($_POST['update_mitigation_effort']))
        {
                $new_name = $_POST['new_name'];
                $value = (int)$_POST['mitigation_effort'];

                // Verify value is an integer
                if (is_int($value))
                {
                        update_table("mitigation_effort", $new_name, $value);

			// Display an alert
			set_alert(true, "good", "The mitigation effort naming convention was updated successfully.");
                }
        }
?>

<!doctype html>
<html>

  <head>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <title>SimpleRisk: Enterprise Risk Management Simplified</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap-responsive.css">

    <link rel="stylesheet" href="../css/divshot-util.css">
    <link rel="stylesheet" href="../css/divshot-canvas.css">
    <link rel="stylesheet" href="../css/display.css">

    <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/theme.css">
  </head>

  <body>

<?php
	view_top_menu("Configure");

	// Get any alert messages
	get_alert();
?>
    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span3">
          <?php view_configure_menu("RedefineNamingConventions"); ?>
        </div>
        <div class="span9">
          <div class="row-fluid">
            <div class="span12">
              <div class="hero-unit">
                <form name="impact" method="post" action="">
                <p>
                <h4><?php echo $escaper->escapeHtml($lang['Impact']); ?>:</h4>
                <?php echo $escaper->escapeHtml($lang['Change']); ?> <?php create_dropdown("impact") ?> <?php echo $escaper->escapeHtml($lang['to']); ?> <input name="new_name" type="text" size="20" />&nbsp;&nbsp;<input type="submit" value="<?php echo $escaper->escapeHtml($lang['Update']); ?>" name="update_impact" /></p>
                </form>
              </div>
              <div class="hero-unit">
                <form name="likelihood" method="post" action="">
                <p>
                <h4><?php echo $escaper->escapeHtml($lang['Likelihood']); ?>:</h4>
                <?php echo $escaper->escapeHtml($lang['Change']); ?> <?php create_dropdown("likelihood") ?> <?php echo $escaper->escapeHtml($lang['to']); ?> <input name="new_name" type="text" size="20" />&nbsp;&nbsp;<input type="submit" value="<?php echo $escaper->escapeHtml($lang['Update']); ?>" name="update_likelihood" /></p>
                </form>
              </div>
              <div class="hero-unit">
                <form name="mitigation_effort" method="post" action="">
                <p>
                <h4><?php echo $escaper->escapeHtml($lang['MitigationEffort']); ?>:</h4>
                <?php echo $escaper->escapeHtml($lang['Change']); ?> <?php create_dropdown("mitigation_effort") ?> <?php echo $escaper->escapeHtml($lang['to']); ?> <input name="new_name" type="text" size="20" />&nbsp;&nbsp;<input type="submit" value="<?php echo $escaper->escapeHtml($lang['Update']); ?>" name="update_mitigation_effort" /></p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>

</html>
