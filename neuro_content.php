<?php include("dbconnect.php")?>

<div style="padding-left:4em; padding-right:4em">
<div style="background:#e8d2d0;">
<p>
<center>
<h1>You're Dominant Big 5 Trait Is: Neuroticism</h1>
<h6>a person who is high in neuroticism has a tendency to easily experience negative emotions.
  Neuroticism is similar but not identical to being neurotic in the Freudian sense. Some psychologists prefer to call neuroticism by the term emotional stability to differentiate it from the term neurotic</h6>

</center>
</div>

<div style="background:#FFDFD3;">

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
</div>
