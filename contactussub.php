<!DOCTYPE html>
<?php include("dbconnect.php")?>
<html lang="en" dir="ltr">
  <head>

    <meta charset="utf-8">
      <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="makeup.css">
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="custom.css"><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>Makan@UCSI University</title>
  </head>
  <body>

  <?php include("header.php"); ?>
<img src="img\foodoutletshead.png" alt="food outlets location" width="1507" height="330">

    <!-- Page Content -->

<center><h1>Contact Us</h1>
  <?php
      if($_POST["name"]==null || $_POST["mail"]==null || $_POST["subject"]==null || $_POST["message"]==null){
        echo "Please fill in all the boxes in order to reach us. Thank You!";
      }
      else{
        $name = $_POST["name"];
        $mail = $_POST["mail"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];

              $query = "INSERT INTO feedback (full_name, email, subject, message) VALUES ('$name', '$mail', '$subject', '$message')";

        if(mysqli_query($db, $query)){
          echo "Thank you for your inquiries! We will get back to you soon.";
        }
        else{
          echo "Something went wrong :( we cound not recieve your feedback. Please try again.";
        }
      }
   ?>
   <br>
   <a class="btn btn-outline-primary" href="contactus.php" role="button" style="margin-top:20px">Go Back</a>
</center>

<br><br><br>


    <?php include("footer.php"); ?>
  </body>
</html>
