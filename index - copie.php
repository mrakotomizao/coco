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
?>





<div class="contenu">
    	<header id="index">
        	<h1 id="titre_intdex">L'application du<br/><span class="titre">casino</span><br/><span class="sous_titre">d'Houlgate</span></h1>
    	</header>
    	<section class="bouton">
        	<a href="pages/optin.php" title="jouez"><span class="bouton_play">
            Jouez
            </span>
            </a>
            <br/>
            <?php
				session_start();
			use App\Facebook\FacebookConnect;
			require 'facebook-connect/app/Facebook/constants.php';
			require 'facebook-connect/vendor/autoload.php';
			
			$connect = new FacebookConnect(APP_ID, APP_SECRET);
			
			$user = $connect->connect(REDIRECT_URL);
			
			if(is_string($user)){
			
				echo '<a id="submit-index" href="'.$user.'"><span class="bouton_fb">Connexion</span></a>';
			
			}else{
				var_dump($user);
			
			}
	//echo '<a id="submit-index" href="'.$loginUrl.'"><span class="bouton_fb">Connexion</span></a>' ;
?>
   		 <div
          class="fb-like"
          data-share="true"
          data-width="450"
          data-show-faces="true">
		</div>
   		</section>
        </div>
        </div> 
</body>
</html>
