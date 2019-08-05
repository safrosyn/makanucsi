<!DOCTYPE html>
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
<img src="img\bighead.png" alt="food outlets location" width="1500" height="330">

<p>
<center>
<h1>What's your Big 5 Personality Trait?</h1>
<h5>Did you know that each personality trait is associated with different food taste? <p> If you do not know your Big 5 trait,<br>
<a class="btn btn-outline-primary" href="likert.php" role="button" style="margin-top:20px">Click Here</a></a></br></h5>
<br>

</center>
</div>

<div class="container" style="padding-top:3em; padding-bottom:3em; padding-left:8em;">

<div class="row">

<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
<a class="nav-link-here active" id="v-pills-open-tab" data-toggle="pill" href="#v-pills-open" role="tab" aria-controls="v-pills-open" aria-selected="true">Openness To Experience</a>
<a class="nav-link-here " id="v-pills-consc-tab" data-toggle="pill" href="#v-pills-consc" role="tab" aria-controls="v-pills-consc" aria-selected="false">Conscientiousness</a>
<a class="nav-link-here" id="v-pills-extra-tab" data-toggle="pill" href="#v-pills-extra" role="tab" aria-controls="v-pills-extra" aria-selected="false">Extraversion</a>
<a class="nav-link-here" id="v-pills-agree-tab" data-toggle="pill" href="#v-pills-agree" role="tab" aria-controls="v-pills-agree" aria-selected="false">Agreeableness</a>
<a class="nav-link-here" id="v-pills-neuro-tab" data-toggle="pill" href="#v-pills-neuro" role="tab" aria-controls="v-pills-neuro" aria-selected="false">Neuroticism</a>

</div>
<div class="tab-content" id="v-pills-tabContent" style="margin-left:25px">
<div class="tab-pane fade show active" id="v-pills-open" role="tabpanel" aria-labelledby="v-pills-open-tab"><?php include("big_contents_1.php");?></div>
<div class="tab-pane fade" id="v-pills-consc" role="tabpanel" aria-labelledby="v-pills-consc-tab"><?php include("big_contents_2.php");?></div>
<div class="tab-pane fade" id="v-pills-extra" role="tabpanel" aria-labelledby="v-pills-extra-tab"><?php include("big_contents_3.php");?></div>
<div class="tab-pane fade" id="v-pills-agree" role="tabpanel" aria-labelledby="v-pills-agree-tab"><?php include("big_contents_4.php");?></div>
<div class="tab-pane fade" id="v-pills-neuro" role="tabpanel" aria-labelledby="v-pills-neuro-tab"><?php include("big_contents_5.php");?></div>
</div>
</div>
</div>



<?php include("lilmenu.php"); ?>

<br>


<?php include("footer.php"); ?>
