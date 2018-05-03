<?php
    /**
     * SAMPLE Code to demonstrate how to initiate a SAML Authorization request
     *
     * When the user visits this URL, the browser will be redirected to the SSO
     * IdP with an authorization request. If successful, it will then be
     * redirected to the consume URL (specified in settings) with the auth
     * details.
     */
    require_once(realpath(__DIR__ . '/../../includes/saml/_toolkit_loader.php'));

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

    $auth = new OneLogin_Saml2_Auth();
    if (!isset($_SESSION['samlUserdata'])) {
        $auth->login();
    } else {
        $indexUrl = str_replace('/sso.php', '/index.php', OneLogin_Saml2_Utils::getSelfURLNoQuery());
        OneLogin_Saml2_Utils::redirect($indexUrl);
    }

?>