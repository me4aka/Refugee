  <?php
    if (isset($_POST['BtnSend'])) {
      $myEmailAdress = "boev.pavel@gmail.com";
      $subject = "Question from the contact form";

      $name = $_POST['name'];
      $email = $_POST['email'];
      $message = $_POST['comments'];

      $header = "from: $name <$email>";

      mail($myEmailAdress, $subject, $message, $header);

      header("Location:contact.html");
    }
  ?>
