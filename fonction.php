<?php
function openDB(){
	$server='localhost';
	$user='root';
	$nomDataBase='maguipik';
	$pass='';
	//ouverture de connexion
	$idConn=mysqli_connect($server, $user, $pass);
	//selection base de données
	mysqli_select_db($idConn, $nomDataBase);
	return $idConn;
	//$bdd = new PDO('mysql:host=localhost;dbname=maguipik;charset=utf8', 'root', '');
	//return ($bdd);
}

//Deconnexion de la base de données
function CloseDB($idConn){
	mysqli_close($idConn);
}

//lien au css
function linkCss()
{
	print('<meta charset ="utf-8"/>');
	print('<link rel="stylesheet" href="styles.css"/>');
	print('<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>');
	print('<link rel="icon" type="image/png" href="images\logo.png" />');
}
function piedPage(){
	print('<nav>
	<a href="https://www.facebook.com"><img src="images\facebook.png" alt="facebook" class="logo"></a>
	<a href="https://www.twitter.com"><img src="images\twitter.png" alt="twitter" class="logo"></a>
	<a href="https://plus.google.com"><img src="images\google.png" alt="google plus" class="logo"></a>
	<a href="https://www.instagram.com"><img src="images\instagram.png" alt="instagram" class="logo"></a>
	<a href="https://fr.pinterest.com"><img src="images\pinterest.png" alt="pinterest" class="logo"></a>
	</nav>');
}
	function linkmenu($i){
	$onglet1='<div id="bandeau">
				<center>Pièces Auto</center>
			</div>
	<nav class="navbar navbar-default navbar-static-top">
		<div class="container">
			<ul class="nav navbar-nav">
				<li class="active"><a href="accueil.php">Acceuil</a></li>
				<li><a href="catalogue.php">Catalogue</a></li>
				<li><a href="contact.php">Ou nous trouver ?</a></li>
			</ul>
		</div>
	</nav>';

	$onglet2='<div id="bandeau">
				<center>Pièces Auto</center>
			</div>
	<nav class="navbar navbar-default navbar-static-top">
		<div class="container">
			<ul class="nav navbar-nav">
				<li><a href="accueil.php">Acceuil</a></li>
				<li class="active"><a href="catalogue.php">Catalogue</a></li>
				<li><a href="contact.php">Ou nous trouver ?</a></li>
			</ul>
		</div>
	</nav>';

	$onglet3='<div id="bandeau">
				<center>Pièces Auto</center>
			</div>
	<nav class="navbar navbar-default navbar-static-top">
		<div class="container">
			<ul class="nav navbar-nav">
				<li><a href="accueil.php">Acceuil</a></li>
				<li><a href="catalogue.php">Catalogue</a></li>
				<li class="active"><a href="contact.php">Ou nous trouver ?</a></li>
			</ul>
		</div>
	</nav>';

		if ($i==1){
			print($onglet1);
		}
		elseif ($i==2){
			print ($onglet2);
		}
		else{
			print ($onglet3);
		}
	}
