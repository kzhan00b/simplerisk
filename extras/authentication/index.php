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
    require_once(realpath(__DIR__ . '/../../includes/functions.php'));
    require_once(realpath(__DIR__ . '/../../includes/authenticate.php'));

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

    if (!isset($_SESSION['samlUserdata'])) {
        $settings = new OneLogin_Saml2_Settings();
        $authRequest = new OneLogin_Saml2_AuthnRequest($settings);
        $samlRequest = $authRequest->getRequest();
        $parameters = array('SAMLRequest' => $samlRequest);
        $parameters['RelayState'] = OneLogin_Saml2_Utils::getSelfURLNoQuery();
        $idpData = $settings->getIdPData();
        $ssoUrl = $idpData['singleSignOnService']['url'];
        $url = OneLogin_Saml2_Utils::redirect($ssoUrl, $parameters, true);
        header("Location: $url");
    }
    else {
        $user = $_SESSION['user'];
        $email = $_SESSION['user'];

        $salt = generate_token(20);
        $salt_hash = '$2a$15$' . md5($salt);

        $db = db_open();

        $stmt = $db->prepare("SELECT value, username, type, name, lang, assessments, asset, admin, custom_display_settings, review_veryhigh, review_high, review_medium, review_low, review_insignificant, submit_risks, modify_risks, plan_mitigations, close_risks FROM user WHERE LOWER(convert(`username` using utf8)) = LOWER(:user)");

        $stmt->bindParam(":user", $user, PDO::PARAM_STR, 200);

        $stmt->execute();

        $array = $stmt->fetchAll();

        if(!$array){
            $type = 'saml';
            $name = $_SESSION['name'];
            $team = "none";
            $pass = $_SESSION['user'];
            $hash = generateHash($salt_hash, $pass);

            add_user($type, $user, $email, $name, $salt, $hash, $team, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1, 0);
        }
        else {
            $_SESSION["admin"] = $array[0]["admin"];
        }

        $hash = generateHash($salt_hash, $user);

        if(is_valid_user($user, $hash, false)) {
            if (!isset($_SESSION["access"]) || $_SESSION["access"] != "granted"){
                login($user, $hash);
            }
        }
        else{
            header("Location: ../../index.php");
            exit(0);
        }
    }

    function enabled_auth($user){
        $db = db_open();

        $stmt = $db->prepare("SELECT multi_factor FROM user WHERE LOWER(convert(`username` using utf8)) = LOWER(:user)");

        $stmt->bindParam(":user", $user, PDO::PARAM_STR, 200);

        $stmt->execute();

        $array = $stmt->fetchAll();

        if($array){
            return $array[0]['multi_factor'];
        }
        return 1;
    }

    function is_valid_saml_user($user){
        $db = db_open();

        $stmt = $db->prepare("SELECT value, username, type, name, lang, assessments, asset, admin, custom_display_settings, review_veryhigh, review_high, review_medium, review_low, review_insignificant, submit_risks, modify_risks, plan_mitigations, close_risks FROM user WHERE LOWER(convert(`username` using utf8)) = LOWER(:user)");

        $stmt->bindParam(":user", $user, PDO::PARAM_STR, 200);

        $stmt->execute();

        $array = $stmt->fetchAll();

        if($array){
            return true;
        }
        return false;
    }

?>