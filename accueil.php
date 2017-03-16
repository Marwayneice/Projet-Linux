<?php
	include_once('fonction.php');
	$idConn=openDB();
?>
<!DOCTYPE html>
<html>
	<head>
		<?php linkCss(); ?>
		<title> Accueil </title>
	</head>
	<body>
	<header>
		<?php
			linkmenu(1);
		?>
	</header>
	</body>

	<footer>
		<div id="pied_page">
			<?php piedPage(); ?>
			<center>Fait par A Link To The Future</center>
		</div>
	</footer>
<?php
		CloseDB($idConn);
?>
</html>
