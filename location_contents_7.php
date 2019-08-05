<?php include("dbconnect.php")?>

<?php
      $query = "SELECT * FROM food_items WHERE (food_location_id='11')";
      $res = mysqli_query($db, $query);
?>

<div class="menu-wrapper">
  <div class="menu-category">
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


      </div>

<?php } ?>

</div>



<?php
      $oquery = "SELECT * FROM location WHERE (location_id='11')";
      $ores = mysqli_query($db, $oquery);
?>

<div class="menu-category">
  <h2>Operating Hours</h2>

<?php
    while($cols=mysqli_fetch_assoc($ores))
    {
?>
    <div class="menu-item">

        <div class="item-name"><h4><?php echo $cols['location_time']; ?></div>



    </div>

<?php } ?>

</div>



</div>
