<?php
include('link.php');
$login = $_POST['login'];
$loginMail = $_POST['loginMail'];
$loginPassword = $_POST['loginPassword'];
// $loginMail = mysqli_real_escape_string($link, $loginMail);
// $loginPassword = mysqli_real_escape_string($link, $loginPassword);
if (isset($login)&&!empty($loginMail)&&!empty($loginPassword)) {
  $sql="select * from auth where mail='$loginMail' AND pwd='$loginPassword'";
  $queryRes = mysqli_query($link, $sql);
  $rows = mysqli_num_rows($queryRes);
  $loginStatus = md5($loginMail);
  if ($rows>0) {
    setcookie("isLoggedIn", $loginStatus, time() + (86400 * 3), "/");
    header('location:/../dashboard.php');
    } else {
    header('loaction:error.html?passwordError');
  }
} else {
  header('loaction:error.html');
}
?>