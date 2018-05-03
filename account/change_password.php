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

// Start session
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

// Check if a new password was submitted
if (isset($_POST['change_password']))
{
	$user = $_SESSION["user"];
	$current_pass = $_POST['current_pass'];
	$new_pass = $_POST['new_pass'];
	$confirm_pass = $_POST['confirm_pass'];

	// If the user and current password are valid
	if (is_valid_user($user, $current_pass))
	{
		// Check the password
		$error_code = valid_password($new_pass, $confirm_pass, $_SESSION['uid']);

       		// If the password is valid
       		if ($error_code == 1)
       		{	
       			// Get user old data
       			$old_data = get_salt_and_password_by_user_id($_SESSION['uid']);

       			// Add the old data to the pass_history table
       			add_last_password_history($_SESSION["uid"], $old_data["salt"], $old_data["password"]);

       			if(get_setting("password_policy_min_age") != 0)
			{
				// If the current password is older than the minimum age
				if(current_password_age_valid())
				{
					echo "Password can be changed";

				}
	       			$old_salt = generateSalt($user);

		       		// Check if password can be used or user should type a new one
		       		if(check_if_password_can_be_used($_SESSION['uid'], $new_pass, $old_salt) == TRUE)
				{
	       				// Generate the salt
	            			$salt = generateSalt($user);

		            		// Generate the password hash
		            		$hash = generateHash($salt, $new_pass);

					// Update the password
					update_password($user, $hash);

		            		// If the encryption extra is enabled
		            		if (encryption_extra())
		            		{
		      	        		// Load the extra
		                		require_once(realpath(__DIR__ . '/../extras/encryption/index.php'));

		                		// Set the new encrypted password
		                		set_enc_pass($user, $new_pass, $_SESSION['encrypted_pass']);
		            		}

					// Display an alert
					set_alert(true, "good", "Your password has been updated successfully!");

					// Redirect to the reports page
					header("Location: ../reports");
	       			}
				else
				{
					// Display an alert
	       				set_alert(true, "bad", "Your password hasn't been updated due a password policy restrictions!");
	       			}
       			}
			else
			{
	       			// Generate the salt
	            		$salt = generateSalt($user);

		        	// Generate the password hash
		        	$hash = generateHash($salt, $new_pass);

				// Update the password
				update_password($user, $hash);

		        	// If the encryption extra is enabled
		        	if (encryption_extra())
		        	{
		      	   		 // Load the extra
		            		require_once(realpath(__DIR__ . '/../extras/encryption/index.php'));

		            		// Set the new encrypted password
		            		set_enc_pass($user, $new_pass, $_SESSION['encrypted_pass']);
		        	}

				// Display an alert
				set_alert(true, "good", "Your password has been updated successfully!");

				// Redirect to the reports
				header("Location: ../reports");
       			}

        	}
		else
		{
			// Display an alert
			//set_alert(true, "bad", password_error_message($error_code));
		}
    	}
	else
	{
		// Display an alert
		set_alert(true, "bad", "You have entered your current password incorrectly.  Please try again.");
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
			<div class="span4 offset4">
				<div class="well">
					<?php
						//if (isset($_SESSION['user_type']) && $_SESSION['user_type'] != "ldap")
						//{
					       	echo "<div class=\"hero-unit\">\n";
							echo "<form name=\"change_password\" method=\"post\" action=\"\">\n";
							echo "<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">\n";
							echo "<tr><td colspan=\"2\"><h4>" . $escaper->escapeHtml($lang['ChangePassword']) . "</h4></td><tr>\n";
							echo "<tr><td>" . $escaper->escapeHtml($lang['CurrentPassword']) . ":&nbsp</td><td><input maxlength=\"100\" name=\"current_pass\" id=\"current_pass\" class=\"input-medium\" type=\"password\" autocomplete=\"off\" /></td></tr>\n";
							echo "<tr><td>" . $escaper->escapeHtml($lang['NewPassword']) . ":&nbsp</td><td><input maxlength=\"100\" name=\"new_pass\" id=\"new_pass\" class=\"input-medium\" type=\"password\" autocomplete=\"off\" /></td></tr>\n";
							echo "<tr><td>" . $escaper->escapeHtml($lang['ConfirmPassword']) . ":&nbsp;</td><td><input maxlength=\"100\" name=\"confirm_pass\" id=\"confirm_pass\" class=\"input-medium\" type=\"password\" autocomplete=\"off\" /></td></tr>\n";
							echo "</table>\n";
					        	echo "<div class=\"form-actions\">\n";
					        		echo "<button type=\"submit\" name=\"change_password\" class=\"btn btn-primary\">" . $escaper->escapeHtml($lang['Submit']) . "</button>\n";
					        		echo "<input class=\"btn\" value=\"" . $escaper->escapeHtml($lang['Reset']) . "\" type=\"reset\">\n";
					        		echo "</div>\n";
					        	echo "</form>\n";
					        echo "</div>\n";
					//	}
					?>
				</div>
			</div>
		</div>
	</div>
</body>

</html>
