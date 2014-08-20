<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
<?php
// display form if user has not clicked submit
if (!isset($_POST["submit"])) {
  ?>
  <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
  Name: <input type="text" name="from"><br>
  Responce Email: <input type="text" name="remail"><br>
  Request: <textarea rows="10" cols="40" name="message"></textarea><br>
  <input type="submit" name="submit" value="Submit Request">
  </form>
  <?php 
} else {    // the user has submitted the form
  // Check if the "from" input field is filled out
  if (isset($_POST["from"])) {
    $from = $_POST["from"]; // sender
    $remail = $_POST["remail"];
    $message = $_POST["message"];
    // message lines should not exceed 70 characters (PHP rule), so wrap it
    $message = wordwrap($message, 70);
    // send mail
    mail("mbonfig52@gmail.com" , "SoftwareRequest" , "$message" , "From: $remail /n" , "Subject: MTISoftwareRequest");
    echo "Your request has been submited";
  }
}
?>
    </body>
</html>
