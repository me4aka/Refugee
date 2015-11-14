<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Logout</title>

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
    session_start();
    $name = $_SESSION['name'];
    session_destroy();
    header("refresh:1; url = index.php");

    echo '<h4 style="padding:5px">Sie wurden erflogreich abgemeldet.</h4>';
     ?>
  </body>
</html>
