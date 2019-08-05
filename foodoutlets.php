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
  <img src="img\foodoutletshead.png" alt="food outlets location" width="1509" height="330">

  <p>
  <center>
  <h1>Food Outlets</h1>
  <h4> Browse through our food outlets with varying impeccable options!</h4>
  <br>

  </center>
</div>



  <div class="container" style="padding-top:3em; padding-bottom:3em; padding-left:8em;">

  <div class="row">

  <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
  <a class="nav-link-here active" id="v-pills-aroma-tab" data-toggle="pill" href="#v-pills-aroma" role="tab" aria-controls="v-pills-aroma" aria-selected="true">Aroma's Cafe</a>
  <a class="nav-link-here" id="v-pills-medi-tab" data-toggle="pill" href="#v-pills-medi" role="tab" aria-controls="v-pills-medi" aria-selected="false">MediBowl</a>
  <a class="nav-link-here" id="v-pills-library-tab" data-toggle="pill" href="#v-pills-library" role="tab" aria-controls="v-pills-library" aria-selected="false">Block B Cafeteria</a>
  <a class="nav-link-here" id="v-pills-tony-tab" data-toggle="pill" href="#v-pills-tony" role="tab" aria-controls="v-pills-tony" aria-selected="false">Uncle Tony's Corner</a>

  <a class="nav-link-here" id="v-pills-sinar-tab" data-toggle="pill" href="#v-pills-sinar" role="tab" aria-controls="v-pills-sinar" aria-selected="true">Block D Cafeteria(Sinaran)</a>
  <a class="nav-link-here" id="v-pills-easy-tab" data-toggle="pill" href="#v-pills-easy" role="tab" aria-controls="v-pills-easy" aria-selected="false">EasyThai</a>
  <a class="nav-link-here" id="v-pills-espresso-tab" data-toggle="pill" href="#v-pills-espresso" role="tab" aria-controls="v-pills-espresso" aria-selected="false">Everyday</a>
  <a class="nav-link-here" id="v-pills-wanyeah-tab" data-toggle="pill" href="#v-pills-wanyeah" role="tab" aria-controls="v-pills-wanyeah" aria-selected="false">Wan Yeah Cafe</a>

  </div>
  <div class="tab-content" id="v-pills-tabContent" style="margin-left:12em;">


  <div class="tab-pane fade show active" id="v-pills-aroma" role="tabpanel" aria-labelledby="v-pills-aroma-tab"><?php include("location_contents_1.php");?></div>
  <div class="tab-pane fade" id="v-pills-medi" role="tabpanel" aria-labelledby="v-pills-medi-tab"><?php include("location_contents_2.php");?></div>
  <div class="tab-pane fade" id="v-pills-library" role="tabpanel" aria-labelledby="v-pills-library-tab"><?php include("location_contents_3.php");?></div>
  <div class="tab-pane fade" id="v-pills-tony" role="tabpanel" aria-labelledby="v-pills-tony-tab"><?php include("location_contents_4.php");?></div>
  <div class="tab-pane fade" id="v-pills-sinar" role="tabpanel" aria-labelledby="v-pills-sinar-tab"><?php include("location_contents_5.php");?></div>
  <div class="tab-pane fade" id="v-pills-easy" role="tabpanel" aria-labelledby="v-pills-easy-tab"><?php include("location_contents_6.php");?></div>
  <div class="tab-pane fade" id="v-pills-espresso" role="tabpanel" aria-labelledby="v-pills-espresso-tab"><?php include("location_contents_7.php");?></div>
  <div class="tab-pane fade" id="v-pills-wanyeah" role="tabpanel" aria-labelledby="v-pills-wanyeah-tab"><?php include("location_contents_8.php");?></div>

  </div>
  </div>
  </div>
  <center>
  <?php include("lilmenu.php"); ?>
</center>
  </div>

  <?php include("footer.php"); ?>

  </body>
  </html>
