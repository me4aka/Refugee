<?php
include_once("db.php");
session_start();

if (isset($_POST['BtnLogin'])) {
  $user = $_POST['name_login'];
  $pass = $_POST['pass_login'];
  $result = mysqli_query($conn, "SELECT * FROM users WHERE username ='$user' and password ='$pass';");

  if (mysqli_num_rows($result)==TRUE) {

    $_SESSION['loggedin'] = 'YES';
    $_SESSION['name'] = $user;
    $url = "Location: indexlogged.php";
    header($url);

  } else {
    echo "Account invalid!";
  }
 }

 ?>
