<!DOCTYPE html>
<html lang="de">
  <head>
    <title>Refugee help</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php
    session_start();
    if (!$_SESSION['loggedin']) {
      header("Location:index.php?problem=NotLoggedIn");
      exit;
    }
    $name = $_SESSION['name'];
    ?>

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">

    <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template -->
    <link href="main.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Logo</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-left">
            <li><a href="#"><span class="glyphicon glyphicon-info-sign"></span> ÜBER UNS</a></li>
            <li><a href="contact.html"> <span class="glyphicon glyphicon-envelope"></span> KONTAKT</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown"> <?php print($name) ?>
              <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="logout.php">Logout</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

<!-- Modal loggedin -->
    <div id="modal-reg" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" color="grey">Kostenloses Konto erstellen</h4>
          </div>
          <div class="modal-body">
            <form class="form" action="signup.php" method="post">
              <div class="form-group">
                <label for="mail-reg">Username:</label>
                <input type="text" class="form-control" id="user-reg" name="user_reg">
              </div>
              <div class="form-group">
                <label for="mail-reg">E-Mail:</label>
                <input type="text" class="form-control" id="mail-reg" name="mail_reg">
              </div>
              <div class="form-group">
                <label for="pass-reg">Passwort:</label>
                <input type="password" placeholder="Mindestens 6 Zeichen" class="form-control" id="pass-reg" name="pass_reg">
              </div>
              <button type="submit" class="btn btn-primary">Registrieren</button>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
        </div>

      </div>
    </div>

    <!--Jumbotron-->
    <div class="jumbotron">
      <div class="container-fluid">
        <h2>Rent a refugee</h2>
        <h4>Flüchtlingen helfen indem Flüchtlinge helfen</h4>
        <p><a class="btn btn-primary btn-lg pull-bottom" href="#" role="button">Erfahren Sie mehr &raquo;</a></p>
      </div>
    </div>
  </body>

  </html>
