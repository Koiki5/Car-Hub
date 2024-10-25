<?php
$con = mysqli_connect ('localhost', 'root');
mysqli_select_db($con, 'mycars');
$sql = "SELECT * FROM cars WHERE features=1";
$features = $con->query($sql);
?>
<!doctype html>
    <head>
        <title>CarHub</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="Viewport" content="width=device-width, initial-scale=1.0">
</head>
<div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">CarHub.com</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto mb-2 mb-lg-4">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Cars
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="./details.php">Audi</a> </li>
          <li><hr class="dropdown-divider"> </li>
         <li> <a class="dropdown-item" href="./ferrari.php">Ferrari</a></li>
         <li><hr class="dropdown-divider"> </li>
         <li> <a class="dropdown-item" href="./benz.php">Benz</a></li>
    </ul>
    </li>
    </ul>
</div>
</div>
</nav>
<div class="col-md-4"></div>
<div class="col-md-8"></div>
<div class="row"></div>
<h2 class="text-center">Top Cars</h2> <br> <br>
<?php
while ($cars = mysqli_fetch_assoc($features)):
?>
<div class="col-md-5">
    <h4><?php $cars['title']; ?></h4>
    <img src="<?= $cars['image'];?>" alt="<?= $cars['title']; ?>" />
    <p class="Cprice">NGN <?= $cars['price'];?></p>
    <a href="details.php">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-1">More</button>
    </a>
</div>
<?php endwhile; ?>
</div>
</body>
</html>