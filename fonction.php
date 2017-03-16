<?php
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
