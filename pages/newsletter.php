<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="../style.css" type="text/css">
<script src="../JS/roulette.js"></script>
<title>Optin</title>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&appId=1574460986104343&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</head>

<body>
	<div class="contenu-newsletter">
    	<div class="formulaire-newsletter">
		<form method="post" action="page_roulette.php">
       		<p><label>Nom</label><br />
				<input type="text" name="nom" placeholder="Firstname" required /></p>
            <p><label>Prénom</label><br />
				<input type="text" name="prenom" placeholder="prenom" required /></p>
            <p><label>Pseudo*</label><br />
				<input type="text" name="pseudo" placeholder="Pseudo" required /></p>
       		<p><label>E-mail*</label><br /> 
				<input type="text" name="email" placeholder="exemple@gmail.com" required /></p>
               	<p><input type="checkbox" name="newsletter" value="oui"/> Cochez cette case si vous souhaitez recevoir notre newsletter</p>
				<input id="submit" type="submit" value="Envoyer"/>
      </form>

      </div>
	</div>
</body>
</html>