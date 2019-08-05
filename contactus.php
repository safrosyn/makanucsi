<!DOCTYPE html>
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



<hr>
    <center>
    <h1>Contact Us</h1>
    <h4>Hi! Please leave any feedback, thank you!</h4>

  </center>
      <hr>
<center>
          <form class="contact-form" action="contactussub.php" method="post" style="width:50%">
            <input type="text" name="name" placeholder="Full name">
            <input type="text" name="mail" placeholder="Your e-mail">
            <input type="text" name="subject" placeholder="Subject">
            <textarea name="message" placeholder="Message"></textarea>
            <button type="submit" class="btn btn-info" name="submit" style="margin-top:20px">Send</button>

            <a class="btn btn-outline-primary" href="comotu.php" role="button" style="margin-top:20px">Home</a>
          </form>
</center>

<br><br><br>


    <?php include("footer.php"); ?>
  </body>
</html>
