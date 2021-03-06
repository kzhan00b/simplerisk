<?php

    /* This Source Code Form is subject to the terms of the Mozilla Public
     * License, v. 2.0. If a copy of the MPL was not distributed with this
     * file, You can obtain one at http://mozilla.org/MPL/2.0/. */

    // Include required functions file
    require_once(realpath(__DIR__ . '/../../includes/functions.php'));
    require_once(realpath(__DIR__ . '/../../includes/authenticate.php'));
    require_once(realpath(__DIR__ . '/../../includes/display.php'));

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
    }// Check if access is authorized
    if (isset($_SESSION["general"]) && $_SESSION["general"] == 1)
    {
      header("Location: ../../index.php");
      exit(0);
    }

?>

<div class="row-fluid">
    <div class="well">
        <h4><?php echo $escaper->escapeHtml($lang['ReviewHistory']); ?></h4>
        <?php get_reviews($id); ?>
    </div>
</div>
