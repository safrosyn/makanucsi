<?php include("dbconnect.php")?>

<div style="padding-left:4em; padding-right:4em">
<div style="background:#e8d2d0;">
<p>
<center>
<h1>You're Dominant Big 5 Trait Is: Extraversion</h1>
<h6>A person who scores high in extraversion on a personality test is the life of the party. They enjoy being with people, participating in social gatherings, and are full of energy.
  A person low in extraversion is less outgoing and is more comfortable working by himself.</h6>

</center>
</div>

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
</div>
