<?php
    /**
     *  SP Single Logout Service Endpoint
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
    $auth->processSLO();
    $errors = $auth->getErrors();
    if (empty($errors)) {
        echo 'Sucessfully logged out';
    } else {
        echo implode(', ', $errors);
    }

?>