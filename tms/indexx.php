<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="author" content="Sahil Kumar">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Product Page</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/
bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></
script> <!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script >
</head>
<body class="bg-info">
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
<!-- Brand -->
<a style="color: white; font-size: 1.5rem; font-weight:600"  class="navbar-brand" href="#"><span style="color: orangered;">Y</span>ATRA</a>
<!-- Toggler/collapsibe Button -->
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="
#collapsibleNavbar">
<span class="navbar-toggler-icon"></span>
</button>
<!-- Navbar links -->
<div class="collapse navbar-collapse" id="collapsibleNavbar">
<ul class="navbar-nav ml-auto">
<li class="nav-item">
<a style="color: orangered; font-size: 1.5rem; font-weight:600" class="nav-link" href="index.php"> <i class="fas fa-home"></i> </a>
</li>

</ul>
</div>
</nav>
<?php
require 'configg.php';
$sql="SELECT * FROM packag";
$result=mysqli_query($conn, $sql);
?>
<div class="container">
<div class="row">
<?php
while($row=mysqli_fetch_array($result)){
?>
<div class="col-lg-4 mt-3 mb-3 ">
<div class="card-deck">
<div class="card border-info p-2">
<img src="<?= $row['Package_img']; ?>" class="card-img-top" height="320">
<h5 class="card-title">Packages : <?= $row['Package_Name']; ?></h5> <h3>Price : <?= number_format($row['Package_Price']); ?>/-</h3>
<a href="bookinginfo.php?id=<?= $row['id']; ?>" class="btn btn-danger btn-block btn-lg
">Pay Now</a>
</div>
</div>
</div>
<?php } ?>
</div>
</div>
</body>
</html>