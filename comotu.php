<!DOCTYPE html>
<?php include("dbconnect.php")?>



<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="makeup.css">
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="custom.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>Makan@UCSI University</title>
  </head>

  <body>
  <?php include("header.php"); ?>
  <!-- my slider la -->

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>

  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner" style="max-width:90em; max-height:20em">
    <div class="carousel-item active">
    <a href="likert.php">  <img src="img\quiz_car.png" alt="quiz" width="1400" height="330"></a>
    </div>
    <div class="carousel-item">
      <a href="https://www.ucsiuniversity.edu.my/ucsi-emerges-malaysia%E2%80%99s-top-private-varsity-again"><img src="img\carou2.jpg" alt="ranking"></a>
    </div>

  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>


<p>
<center>
<h1>Welcome</h1>
<h4> What comes in mind for your food journey?</h4>

</center>
  <hr>
  <!-- this is where my cards begin -->

<div class="container" style="padding-top:3em; padding-bottom:3em; padding-left:8em;">
<div class="card-deck">


	        	<div class="card" style="max-width:200px;">
	        		<img src="img\locacard.png" class="card-img-top" alt="Card image" />


	        			<h4 class="card-title">Location</h4>
	        			<p class="card-text">Browse through our food options based on location.Currently there are 4 blocks that have food outlets!</p>
	        			<a href="location.php" class="btn btn-success">More</a>

	        	</div>

            <div class="card" style="max-width:200px;">
	        		<img src="img/tastecard.png" class="card-img-top" alt="Card image" />


	        			<h4 class="card-title">Food Taste</h4>
	        			<p class="card-text">Browse through the food options based on the 6 basic taste: Sweet, Sour, Spicy,Bitter and Savoury(Umami)</p>
	        			<a href="foodtype.php" class="btn btn-success">More</a>

	        	</div>

            <div class="card" style="max-width:200px;">
	        		<img src="img/outletcard.png" class="card-img-top" alt="Card image" />


	        			<h4 class="card-title">Food Outlets</h4>
	        			<p class="card-text">Big 5 is a personality identifier also known as OCEAN. Browse through our available food based on your Big 5!</p>
	        			<a href="foodoutlets.php" class="btn btn-success">More</a>


	        	</div>

            <div class="card" style="max-width:200px;">
              <img src="img\big5card.png" class="card-img-top" alt="Card image" />


                <h4 class="card-title">Big 5</h4>
                <p class="card-text">Big 5 is a personality identifier also known as OCEAN. Browse through our available food based on your Big 5!</p>
                <a href="big5.php" class="btn btn-success">More</a>


            </div>


</div>
</div>
<hr>
<?php
if(!isset($_COOKIE["user"])) {
  $result = "There is no cookie";
  echo $result;
} else {
  $result = $_COOKIE["user"]; ?>

  <h1>Recommended for you...</h1>


                      <?php
                      if($result=="Agreeableness"){
                                      ?>
                                      <div style="background:#FFDFD3;">
                                      <?php
                                            $query = "SELECT * FROM food_items WHERE (food_taste_id='1')";
                                            $res = mysqli_query($db, $query);
                                      ?>
                                      <h2>Food items</h2>
                                      <?php
                                            while($cols=mysqli_fetch_assoc($res))
                                            {
                                      ?>
                                            <div class="menu-item">
                                              <div class="price-name-wrapper">
                                                <div class="item-name"><?php echo $cols['food_name']; ?></div>
                                                <div class="item-price"><?php echo $cols['food_price']; ?></div>
                                              </div>
                                              <div>Available at: <?php
                                                $lid = $cols['food_location_id'];
                                                $lquery = "SELECT * FROM location WHERE (location_id=$lid)";
                                                $lres = mysqli_query($db, $lquery);
                                                while($lcols=mysqli_fetch_assoc($lres))
                                                {
                                                    echo $lcols['location_name'];
                                                }
                                              ?></div>
                                            </div>
                                      <?php } ?>
                                      </div>
                                      <?php
                      }
                      else if($result=="Openness to experience"){
                                      ?>
                                      <div style="background:#FFDFD3;;">
                                      <?php
                                            $query = "SELECT * FROM food_items WHERE (food_taste_id='2')";
                                            $res = mysqli_query($db, $query);
                                      ?>
                                      <h2>Food items</h2>
                                      <?php
                                            while($cols=mysqli_fetch_assoc($res))
                                            {
                                      ?>
                                            <div class="menu-item">
                                              <div class="price-name-wrapper">
                                                <div class="item-name"><?php echo $cols['food_name']; ?></div>
                                                <div class="item-price"><?php echo $cols['food_price']; ?></div>
                                              </div>
                                              <div>Available at: <?php
                                                $lid = $cols['food_location_id'];
                                                $lquery = "SELECT * FROM location WHERE (location_id=$lid)";
                                                $lres = mysqli_query($db, $lquery);
                                                while($lcols=mysqli_fetch_assoc($lres))
                                                {
                                                    echo $lcols['location_name'];
                                                }
                                              ?></div>
                                            </div>
                                      <?php } ?>
                                      </div>
                                      <?php
                      }
                      else if($result=="Neuroticism"){
                                      ?>
                                      <div style="background:#FFDFD3;;">
                                      <?php
                                            $query = "SELECT * FROM food_items WHERE (food_taste_id='3' OR food_taste_id='6')";
                                            $res = mysqli_query($db, $query);
                                      ?>
                                      <h2>Food items</h2>
                                      <?php
                                            while($cols=mysqli_fetch_assoc($res))
                                            {
                                      ?>
                                            <div class="menu-item">
                                              <div class="price-name-wrapper">
                                                <div class="item-name"><?php echo $cols['food_name']; ?></div>
                                                <div class="item-price"><?php echo $cols['food_price']; ?></div>
                                              </div>
                                              <div>Available at: <?php
                                                $lid = $cols['food_location_id'];
                                                $lquery = "SELECT * FROM location WHERE (location_id=$lid)";
                                                $lres = mysqli_query($db, $lquery);
                                                while($lcols=mysqli_fetch_assoc($lres))
                                                {
                                                    echo $lcols['location_name'];
                                                }
                                              ?></div>
                                            </div>
                                      <?php } ?>
                                      </div>
                                      <?php
                      }
                      else if($result=="Conscientiousness"){
                                      ?>
                                      <div style="background:#FFDFD3;">
                                      <?php
                                            $query = "SELECT * FROM food_items WHERE (food_taste_id='4')";
                                            $res = mysqli_query($db, $query);
                                      ?>
                                      <h2>Food items</h2>
                                      <?php
                                            while($cols=mysqli_fetch_assoc($res))
                                            {
                                      ?>
                                            <div class="menu-item">
                                              <div class="price-name-wrapper">
                                                <div class="item-name"><?php echo $cols['food_name']; ?></div>
                                                <div class="item-price"><?php echo $cols['food_price']; ?></div>
                                              </div>
                                              <div>Available at: <?php
                                                $lid = $cols['food_location_id'];
                                                $lquery = "SELECT * FROM location WHERE (location_id=$lid)";
                                                $lres = mysqli_query($db, $lquery);
                                                while($lcols=mysqli_fetch_assoc($lres))
                                                {
                                                    echo $lcols['location_name'];
                                                }
                                              ?></div>
                                            </div>
                                      <?php } ?>
                                      </div>
                                      <?php
                      }
                      else{
                                      ?>
                                      <div style="background:#FFDFD3;">
                                      <?php
                                            $query = "SELECT * FROM food_items WHERE (food_taste_id='5')";
                                            $res = mysqli_query($db, $query);
                                      ?>
                                      <h2>Food items</h2>
                                      <?php
                                            while($cols=mysqli_fetch_assoc($res))
                                            {
                                      ?>
                                            <div class="menu-item">
                                              <div class="price-name-wrapper">
                                                <div class="item-name"><?php echo $cols['food_name']; ?></div>
                                                <div class="item-price"><?php echo $cols['food_price']; ?></div>
                                              </div>
                                              <div>Available at: <?php
                                                $lid = $cols['food_location_id'];
                                                $lquery = "SELECT * FROM location WHERE (location_id=$lid)";
                                                $lres = mysqli_query($db, $lquery);
                                                while($lcols=mysqli_fetch_assoc($lres))
                                                {
                                                    echo $lcols['location_name'];
                                                }
                                              ?></div>
                                            </div>
                                      <?php } ?>
                                      </div>
                                      <?php
                      }

                      ?>




<?php

} ?>



<?php include("footer.php"); ?>

  </body>
</html>
