<?php
//$link = mysqli_connect("sql6.freesqldatabase.com", "sql6417510","AG8ZCkVWHk","sql6417510");
$link = new mysqli("localhost", "root","","ludo");
if (mysqli_connect_errno()) {
	echo "connection error";
  exit();
}
?>