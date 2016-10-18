<?php 
session_start();
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/constants.php';
$fb = new Facebook\Facebook([
  'app_id' => APPID,
  'app_secret' => APPSEC,
  'default_graph_version' => 'v2.5',
  'persistent_data_handler'=>'session'
  ]);

// get fb helper
$helper = $fb->getRedirectLoginHelper();

// get loginurl i.e facebook login page
$permissions = ['email']; // optional
$loginUrl = $helper->getLoginUrl('http://localhost/ExperimentalProjects/facebook_login_basic/login-callback.php/', $permissions);

// give link to the login page
echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>';
?>