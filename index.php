<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Application Casino</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>

<body>

<!--JAVASCRIPT-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.4&appId=476959155844258";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

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
			
				echo '<a id="submit-index" href="'.$user.'"><span class="bouton_fb">Connexion</span></a> <input type="hidden" name="user" value="'.$user.'">';
			
			}else{
				var_dump($user);
			
			}
	//echo '<a id="submit-index" href="'.$loginUrl.'"><span class="bouton_fb">Connexion</span></a>' ;
	
?>
   		 <div
          class="fb-like"
          data-share="true"
          data-show-faces="true" style="margin-left:-40px;">
		</div>
   		</section>
        </div>
        </div> 
</body>
</html>
