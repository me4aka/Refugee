<!--CONTACT information-->
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
          <a class="navbar-brand" href="index.php">Logo</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-left">
            <li><a href="#"><span class="glyphicon glyphicon-info-sign"></span> ÜBER UNS</a></li>
            <li><a href="contact.html"> <span class="glyphicon glyphicon-envelope"></span> KONTAKT</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> REGISTRIEREN</a></li>
            <li><a href="#"> <span class="glyphicon glyphicon-log-in"></span> ANMELDEN</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div id="contact" class="container-fluid bg-gray">
      <h2 class="text-center">CONTACT</h2>
      <div class="row">
        <div class="col-sm-5">
          <p>Kontaktieren Sie uns und wir erreichen Sie innerhalb 24 Stunden.</p>
          <p><span class="glyphicon glyphicon-map-marker logo"></span> Berlin, DE</p>
          <p><span class="glyphicon glyphicon-phone logo"></span> +0049 1515151515</p>
          <p><span class="glyphicon glyphicon-envelope logo"></span> contact@coalo.com</p>
        </div>
        <form class="" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
          <div class="col-sm-7">
            <div class="row">
              <div class="col-sm-6 form-group">
                <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
              </div>
              <div class="col-sm-6 form-group">
                <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
              </div>
            </div>
            <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5" ></textarea><br>
            <div class="row">
              <div class="col-sm-10 form-group">
              </div>
              <div class="col-sm-2 form-group">
                <button class="btn btn-primary pull-left" type="reset" name="BtnReset">Reset</button>
                <button class="btn btn-primary pull-right" type="submit" name="BtnSend">Senden</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>


  <!-- Modal gesendet -->
        <div id="modal-sent" class="modal fade" role="dialog">
          <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-body">
                <p>
                  Vielen Dank!
                </p>
                <p>
                  Wir erreichen Sie so schnell wie möglich.
                </p>
              </div>
            </div>
          </div>
        </div>

        <?php
          if (isset($_POST['BtnSend'])) {
            $myEmailAdress = "boev.pavel@gmail.com";
            $subject = "Question from the contact form";

            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['comments'];

            $header = "from: $name <$email>";
            mail($myEmailAdress, $subject, $message, $header);

            echo "<script type=\"text/javascript\">
              $(document).ready(function(){
                $('#modal-sent').modal('show');
                });
              </script>
              ";

          }
        ?>
  </body>
</html>
