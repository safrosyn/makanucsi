<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="makeup.css">
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
      <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="custom.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <title>Makan@UCSI University</title>
  </head>
  <body>

<?php include("header.php"); ?>
<div style="background:#e8d2d0">
<img src="img\foodloca.png" alt="food outlets location" width="1500" height="339">

<p>
<center><h1>Find out which block has which food outlets...</h1></p>


<h6>The South Wing Campus provide food throughout the facilities by inducting at least one food outlet in each block for the convenience of the students
and staffs. The food vendors are chosen to provide UCSI University members a wide variety of food options to choose from without needing to go far. The food outlets
available served a wide range od dishes ranging from western food, chinese food, local cuisine, thai food, salad stall and others. All food outlets are certified as halal.</h6>
</p>
</center>
</div>

<!--the food blocks -->
<div class="container" style="padding-top:3em; padding-bottom:3em; padding-left:8em;">

<div class="row">

<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
<a class="nav-link-here active" id="v-pills-blocka-tab" data-toggle="pill" href="#v-pills-blocka" role="tab" aria-controls="v-pills-blocka" aria-selected="true">Block A</a>
<a class="nav-link-here " id="v-pills-blockb-tab" data-toggle="pill" href="#v-pills-blockb" role="tab" aria-controls="v-pills-blockb" aria-selected="false">Block B</a>
<a class="nav-link-here" id="v-pills-blockd-tab" data-toggle="pill" href="#v-pills-blockd" role="tab" aria-controls="v-pills-blockd" aria-selected="false">Block D</a>
<a class="nav-link-here" id="v-pills-blockg-tab" data-toggle="pill" href="#v-pills-blockg" role="tab" aria-controls="v-pills-blockg" aria-selected="false">Block G</a>

</div>
<div class="tab-content" id="v-pills-tabContent" style="margin-left:12em;">


<div class="tab-pane fade show active" id="v-pills-blocka" role="tabpanel" aria-labelledby="v-pills-blocka-tab"><?php include("a_cards.php");?></div>
<div class="tab-pane fade" id="v-pills-blockb" role="tabpanel" aria-labelledby="v-pills-blockb-tab"><?php include("b_cards.php");?></div>
<div class="tab-pane fade" id="v-pills-blockd" role="tabpanel" aria-labelledby="v-pills-blockd-tab"><?php include("d_cards.php");?></div>
<div class="tab-pane fade" id="v-pills-blockg" role="tabpanel" aria-labelledby="v-pills-blockg-tab"><?php include("g_cards.php");?></div>
</div>

</div>

</div>



<?php include("lilmenu.php"); ?>

<br>
<?php include("footer.php"); ?>






  </body>
</html>
