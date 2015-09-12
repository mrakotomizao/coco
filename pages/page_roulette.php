<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="../style.css" type="text/css">
<script src="../JS/roulette.js"></script>
<script src="../JS/funcs.js"></script>
<title>casino</title>
</head>

<body>
<div class="contenu">

		<header>
			<nav>
            	<ul>
                	<li class="menu_carte_li" id="li_gain"><a href="gains_houlgate.php" title="vos gains" class="a_menu_principal">Vos gains</a></li>
                	<li class="menu_carte_li" id="li_evenement"><a href="#" title="Evenements" class="a_menu_principal">Nos évènements</a></li>
                    <li class="menu_carte_li" id="li_machine"><a href="sample/demo.html" title="machine a sous" class="a_menu_principal">Machine à sous</a></li>
                	<li class="menu_carte_li" id="li_localisation"><a href="localisation.php" title="nous trouver" class="a_menu_principal">Nous trouver</a></li>
                </ul>
		</header>
                <!-- Jauge -->
        <div id="colonne_jauge">
			<?php 
                $var = 5660;
                $var_max = 24000;
                $perc_var = ($var * 100) / $var_max;
            ?>
            <table border="0">
                <tr>
                    <td>
                        <div class="bar">
                            <div class="barcontent" width="<?php $perc_var?>%" height="20px">
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <?php
        require_once "../facebook-connect/app/Facebook/constants.php";
		
				try
				{
					$bdd = new PDO('mysql:host='.SERVERBD.';dbname='.DBNAME.';charset=utf8', ''.USERNAME.'', ''.PWD.'');
                    echo 'mysql:host='.SERVERBD.';dbname='.DBNAME.';charset=utf8', ''.USERNAME.'', ''.PWD.'';
				}

			catch (Exception $e)
				{
					 die('Erreur : ' . $e->getMessage());
				}
        ?>
        		<div class="roulette">
				<!--[if IE]><script type="text/javascript" src="JS/roulette.js"></script><![endif]-->
			
				<canvas id="wheelcanvas" width="500" height="500"></canvas>
               <script type="text/javascript">
    				draw();
  				 </script> 
              <input  id="submit" class="btn" type="button" value="JOUER" onClick="spin();" />
			</div>
	
	</div>
</body>
</html>