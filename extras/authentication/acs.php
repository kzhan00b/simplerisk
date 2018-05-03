<?php
    /**
     *  SP Assertion Consumer Service Endpoint
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

    $auth = new OneLogin_Saml2_Auth();
    $auth->processResponse();
    $errors = $auth->getErrors();
    if (!empty($errors)) {
        echo '<p>', implode(', ', $errors), '</p>';
        exit();
    }
    if (!$auth->isAuthenticated()) {
        echo "<p>Not authenticated</p>";
        exit();
    }
    $_SESSION['samlUserdata'] = $auth->getAttributes();
    $_SESSION['IdPSessionIndex'] = $auth->getSessionIndex();
    $_SESSION['user'] = $_SESSION['samlUserdata']['http://schemas.xmlsoap.org/ws/2005/05/identity/claims/emailaddress'][0];
    $_SESSION['name'] = $_SESSION['samlUserdata']['http://schemas.xmlsoap.org/ws/2005/05/identity/claims/name'][0];
    if (isset($_POST['RelayState']) && OneLogin_Saml2_Utils::getSelfURL() != $_POST['RelayState']) {
        $auth->redirectTo($_POST['RelayState']);
    }
    $attributes = $_SESSION['samlUserdata'];
    if (!empty($attributes)) {
        echo '<h1>'._('User attributes:').'</h1>';
        echo '<table><thead><th>'._('Name').'</th><th>'._('Values').'</th></thead><tbody>';
        foreach ($attributes as $attributeName => $attributeValues) {
            echo '<tr><td>'.htmlentities($attributeName).'</td><td><ul>';
            foreach ($attributeValues as $attributeValue) {
                echo '<li>'.htmlentities($attributeValue).'</li>';
            }
            echo '</ul></td></tr>';
        }
        echo '</tbody></table>';
        if (!empty($_SESSION['IdPSessionIndex'])) {
            echo '<p>The SessionIndex of the IdP is: '.$_SESSION['IdPSessionIndex'].'</p>';
        }
    } else {
        echo _('Attributes not found');
    }

?>