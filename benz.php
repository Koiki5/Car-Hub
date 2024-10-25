<?php
$con = mysqli_connect ('localhost', 'root');
mysqli_select_db($con, 'mycars');
$sql = "SELECT * FROM cars WHERE features=3";
$features = $con->query($sql);
?>
<div class="col-md-4"></div>
<div class="col-md-8">
<div class="row">
<h1 class="text-center">Car Details:</h1>
<h2>Mercedes-Benz S-Class</h2>
<?php
while ($cars = mysqli_fetch_assoc($features)):
?>
<div class="col-md-5">
    <h4><?php $cars['title']; ?></h4>
    <img src="<?= $cars['image'];?>" alt="<?= $cars['title']; ?>" />
    <p class="Cprice"><p>NGN <?= $cars['price'];?></p>
    <p class="desc"> <?= $cars['description'];?></p>
    <p class="bname"> <?= $cars['brandname'];?></p>
</div>
</div>
<?php endwhile; ?>
</div>