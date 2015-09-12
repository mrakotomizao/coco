<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Application Casino</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>

<body>

<!--JAVASCRIPT-->
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1561723867399971',
      xfbml      : true,
      version    : 'v2.3'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

<?php {
  "require" : {
    "facebook/php-sdk-v4" : "~5.0"
  }
  require_once __DIR__ . '/vendor/autoload.php';
  require_once __DIR__ . '/path/to/facebook-php-sdk-v4/src/Facebook/autoload.php';
  require_once __DIR__ . '/facebook-sdk-v5/autoload.php';
define('FACEBOOK_SDK_V4_SRC_DIR', __DIR__ . '/facebook-sdk-v5/');
require_once __DIR__ . '/facebook-sdk-v5/autoload.php';
}

$fb = new Facebook\Facebook([
  'app_id' => '{1561723867399971}',
  'app_secret' => '{49fa649f1f02c4d24fb87dc2efea529d}',
  'default_graph_version' => 'v2.2',
  ]);
  
  # login.php
$fb = new Facebook\Facebook([/* . . . */]);

$helper = $fb->getRedirectLoginHelper();
$permissions = ['email', 'user_likes']; // optional
$loginUrl = $helper->getLoginUrl('http://{your-website}/login-callback.php', $permissions);

echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>';

# login-callback.php
$fb = new Facebook\Facebook([/* . . . */]);

$helper = $fb->getRedirectLoginHelper();
try {
  $accessToken = $helper->getAccessToken();
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  // When Graph returns an error
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  // When validation fails or other local issues
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

if (isset($accessToken)) {
  // Logged in!
  $_SESSION['facebook_access_token'] = (string) $accessToken;

  // Now you can redirect to another page and use the
  // access token from $_SESSION['facebook_access_token']
}
?>
