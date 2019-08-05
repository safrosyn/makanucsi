<?php include("dbconnect.php")?>

<?php
      $query = "SELECT * FROM food_items WHERE (big_5_id='4')";
      $res = mysqli_query($db, $query);
?>

<div class="menu-wrapper" style="margin-left:200px">
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
