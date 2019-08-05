<?php include("dbconnect.php")?>



<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="makeup.css">
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
      <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="custom.css"><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>Makan@UCSI University</title>
  </head>

  <body>
    <div style="background:#e8d2d0">
  <?php include("header.php"); ?>

  <img src="img\tastehead.png" alt="Girl in a jacket" width="1510" height="322">

  <p>
  <center>
  <h1>Food Taste Preference</h1>
  <h4>Which food taste is your preferred taste? Select from the 6 basic tastes below!</h4>
  <h6>
    Everyone has a particular flavour that they prefer when it comesto eating, which one is yours?</h6>

  </center>
</div>

  <div class="container" style="padding-top:3em; padding-bottom:3em; padding-left:18em;">

  <div class="row">

  <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
  <a class="nav-link-here active" id="v-pills-sweet-tab" data-toggle="pill" href="#v-pills-sweet" role="tab" aria-controls="v-pills-sweet" aria-selected="true">Sweet</a>
  <a class="nav-link-here " id="v-pills-spicy-tab" data-toggle="pill" href="#v-pills-spicy" role="tab" aria-controls="v-pills-spicy" aria-selected="false">Spicy</a>
  <a class="nav-link-here" id="v-pills-bitter-tab" data-toggle="pill" href="#v-pills-bitter" role="tab" aria-controls="v-pills-bitter" aria-selected="false">Bitter</a>
  <a class="nav-link-here" id="v-pills-salty-tab" data-toggle="pill" href="#v-pills-salty" role="tab" aria-controls="v-pills-salty" aria-selected="false">Salty</a>
  <a class="nav-link-here" id="v-pills-savor-tab" data-toggle="pill" href="#v-pills-savor" role="tab" aria-controls="v-pills-savor" aria-selected="false">Savoury</a>
  <a class="nav-link-here" id="v-pills-sour-tab" data-toggle="pill" href="#v-pills-sour" role="tab" aria-controls="v-pills-sour" aria-selected="false">Sour</a>

  </div>
  <div class="tab-content" id="v-pills-tabContent" style="margin-left:9em;">


  <div class="tab-pane fade show active" id="v-pills-sweet" role="tabpanel" aria-labelledby="v-pills-sweet-tab"><?php include("contents_1.php");?></div>
  <div class="tab-pane fade" id="v-pills-spicy" role="tabpanel" aria-labelledby="v-pills-spicy-tab"><?php include("contents_2.php");?></div>
  <div class="tab-pane fade" id="v-pills-bitter" role="tabpanel" aria-labelledby="v-pills-bitter-tab"><?php include("contents_3.php");?></div>
  <div class="tab-pane fade" id="v-pills-salty" role="tabpanel" aria-labelledby="v-pills-salty-tab"><?php include("contents_4.php");?></div>
  <div class="tab-pane fade" id="v-pills-savor" role="tabpanel" aria-labelledby="v-pills-savor-tab"><?php include("contents_5.php");?></div>
  <div class="tab-pane fade" id="v-pills-sour" role="tabpanel" aria-labelledby="v-pills-sour-tab"><?php include("contents_6.php");?></div>
  </div>
  </div>

  </div>



<?php include("lilmenu.php"); ?>

<br>

<?php include("footer.php"); ?>
  </body>
  </html>
