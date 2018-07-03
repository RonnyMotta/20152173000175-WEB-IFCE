

<?php
session_start();
if(!$_SESSION['usuario']) {
	header('Location: home.html');
	exit();
}
?>