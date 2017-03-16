<?php
	include_once('fonction.php');
	$idConn=openDB();
?>
<!DOCTYPE html>
<html>
	<head>
		<title> Où nous trouver ? </title>
		<?php linkCss(); ?>
	</head>
	<body>
	<header>
		<?php
			linkmenu(3);
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
