<!DOCTYPE html>
<!DOCTYPE html>
<html>
  <head>
    <title>Refugee help</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">

    <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template -->
    <link href="main.css" rel="stylesheet">
  </head>
  <body>
    <?php

    include_once("db.php");

    $user = $_POST['user_reg'];
    $mail = $_POST['mail_reg'];
    $pass = $_POST['pass_reg'];


    $sql = "INSERT INTO users (username, password, email)
    VALUES ('$user','$pass','$mail');";

    $qury = mysqli_query($conn,$sql);

    if (!$qury) {
      die("<h2>OOPS! Irgendwas ist falsch gelaufen: </h2>" . $sql . "<br>" . mysqli_error($conn))  ;
    } else {
      echo "<h2>Sie wurden erfolgreich registriert!</h2>" . "<br>";
    }

    header( "refresh:1;url=index.php" );
      echo '<h5>Sie werden gleich weitergeleitet. Wenn nicht, clicken Sie <a href="index.php">hier</a>.</h5>';
    ?>

  </body>
</html>
