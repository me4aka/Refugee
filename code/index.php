<!DOCTYPE html>
<html lang="de">
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
            <li><a href="contact.php"> <span class="glyphicon glyphicon-envelope"></span> KONTAKT</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#modal-reg" data-toggle="modal" data-target="#modal-reg"><span class="glyphicon glyphicon-user"></span> REGISTRIEREN</a></li>
            <li><a href="#modal-anmelden" data-toggle="modal" data-target="#modal-anmelden"> <span class="glyphicon glyphicon-log-in"></span> ANMELDEN</a></li>
          </ul>
        </div>
      </div>
    </nav>

<!-- Modal log in -->
    <div id="modal-anmelden" class="modal fade" role="dialog">
      <div class="modal-dialog pull-right">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Anmelden</h4>
          </div>
          <div class="modal-body">
            <form class="form" action="signin.php" method="post">
              <div class="form-group">
                <label for="name-login">Username oder E-Mail:</label>
                <input type="text" class="form-control" id="name-login" name="name_login">
              </div>
              <div class="form-group">
                <label for="pass-login">Passwort:</label>
                <input type="password" class="form-control" id="pass-login" name="pass_login">
              </div>
              <button type="submit" class="btn btn-primary" name="BtnLogin">Anmelden</button>
            </form>
          </div>
          <div class="modal-footer">
            <a href="#" class="pull-left" id="pass-no">Passwort vergessen?</a>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
        </div>

      </div>
    </div>

<!-- Modal registrieren -->
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
