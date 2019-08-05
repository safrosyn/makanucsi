<?php include("dbconnect.php")?>

<div style="padding-left:4em; padding-right:4em">
<div style="background:#e8d2d0;">
<p>
<center>
<h1>You're Dominant Big 5 Trait Is: Agreeableness</h1>
<h6>Social harmony is an important goal for individuals that score high on agreeableness in a career test. Agreeable individuals find it important to get along with others. They are willing to put aside their interests for other people.
  These individuals are helpful, friendly, considerate, and generous. Their basic belief is that people are usually decent, honest, and trustworthy</h6>

</center>
</div>

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
</div>
