<?php

include('../model/AuteurPrincipal.php');

// include required files form Facebook SDK
// added in v4.0.5
require_once( 'Facebook/FacebookHttpable.php' );
require_once( 'Facebook/FacebookCurl.php' );
require_once( 'Facebook/FacebookCurlHttpClient.php' );

// added in v4.0.0
require_once( 'Facebook/FacebookSession.php' );
require_once( 'Facebook/FacebookRedirectLoginHelper.php' );
require_once( 'Facebook/FacebookRequest.php' );
require_once( 'Facebook/FacebookResponse.php' );
require_once( 'Facebook/FacebookSDKException.php' );
require_once( 'Facebook/FacebookRequestException.php' );
require_once( 'Facebook/FacebookOtherException.php' );
require_once( 'Facebook/FacebookAuthorizationException.php' );
require_once( 'Facebook/GraphObject.php' );
require_once( 'Facebook/GraphSessionInfo.php' );

// added in v4.0.5

// added in v4.0.0
use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookRequest;
use Facebook\FacebookRequestException;

// start session
session_start();
echo 'start';
// init app with app id and secret
FacebookSession::setDefaultApplication('278950242123214', 'e4a8473d437027819e4139e285dc6777');

// login helper with redirect_uri
$helper = new FacebookRedirectLoginHelper('http://localhost/CPRMS/site/fr/inscriptionFB.php');

// see if a existing session exists
if (isset($_SESSION) && isset($_SESSION['fb_token'])) {
    // create new session from saved access_token
    $session = new FacebookSession($_SESSION['fb_token']);
	
    // validate the access_token to make sure it's still valid
    try {
        if (!$session->validate()) {
            $session = null;
        }
    } catch (Exception $e) {
        // catch any exceptions
        $session = null;
    }
} else {
    // no session exists
	
    try {
        $session = $helper->getSessionFromRedirect();
    } catch (FacebookRequestException $ex) {
        // When Facebook returns an error
        // handle this better in production code
        print_r($ex);
    } catch (Exception $ex) {
        // When validation fails or other local issues
        // handle this better in production code
        print_r($ex);
    }
}

// see if we have a session
if (isset($session)) {
    // save the session
    $_SESSION['fb_token'] = $session->getToken();
	
    // create a session using saved token or the new one we generated at login
    $session = new FacebookSession($session->getToken());

    // graph api request for user data
    $request = new FacebookRequest($session, 'GET', '/me');
    $response = $request->execute();
    // get response
    $graphObject = $response->getGraphObject()->asArray();

    // print profile data
    echo '<pre>' . print_r($graphObject, 1) . '</pre>';
    $nom = $graphObject["first_name"];
    $prenom = $graphObject["last_name"];
    $email = $graphObject["email"];
    $adresse = $graphObject["locale"];
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=cfp", "root", "");
		$sql = "INSERT INTO `auteurprincipale`( `nom`, `prenom`, `email`, `adresse`,  `pays`) VALUES ( '" . $nom . "', '" . $prenom . "', '" . $email . "','" . $adresse . "', '" . $pays . "' );";
        $req = $pdo->prepare($sql);
		echo $sql;
        $req->execute();
        $user = new AuteurPrincipal();
        $user->setNom($nom);
        $user->setPrenom($prenom);
        $user->setEmail($email);
        $user->setAdresse($adresse);
        $_SESSION['USER'] = $user;
        header('location:soumission.php');
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    // print logout url using session and redirect_uri (logout.php page should destroy the session)
} else {
    // show login url
	echo 'taken1';
    header('location:' . $helper->getLoginUrl(array('email', 'user_friends', 'user_birthday',)));
}