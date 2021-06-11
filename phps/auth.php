<?php
include('link.php');
if (!$_COOKIE['isLoggedIn']) {
	header('location:index.php');
	echo "string";
}
?>