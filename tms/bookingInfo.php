<?php
require 'configg.php';
if(isset($_GET['id'])){
$id = $_GET['id']; 
$sql = "SELECT * FROM packag WHERE id='$id'";
 $result=mysqli_query($conn, $sql); 
 $row=mysqli_fetch_array($result);

$pname=$row['Package_Name']; 

$pprice =$row['Package_Price'];
 
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $Total_person = $_POST['no']; 
}

$total_price = $pprice * $Total_person;


$pimage=$row['Package_img'];
}
else
{
echo 'No such Package Found ';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Your Booking</title>
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
<body style="background-color: lightgoldenrodyellow;">
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
<!-- Brand -->
<a style="color: white; font-size: 1.5rem; font-weight:600;" class="navbar-brand" href="#"><span style="color:orangered;">Y</span>ATRA</a>
<!-- Toggler/collapsibe Button -->
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="
#collapsibleNavbar">
<span class="navbar-toggler-icon"></span>
</button>
<!-- Navbar links -->
<div class="collapse navbar-collapse" id="collapsibleNavbar">
<ul class="navbar-nav ml-auto">
<li class="nav-item">
<a style="color:orangered; font-size:1.5rem; font-weight:600;" class="nav-link" href="index.php"><i class="fas fa-home"></i></a>
</li>

</ul>
</div>
</nav>
</nav>
<div class="container">
<div class="row justify-content-center">
<div class="col-md-10 mb-5">
<h2 style="color:#dc3545;" class="text-center p-2">Fill the details to complete your booking</h2>
<h3>Booking details: </h3>
<table class="table table-bordered" width="500px">
<tr>
<th>Package Name :</th>
<td> <?=$pname; ?></td>

</tr>
<tr>
<th>Package Price  Per-Person:</th>
<td> Rs: <?=number_format($pprice); ?>/- </td>
</tr>
<tr>
<th>Enter No of Person</th>
<td>
<form action="" method="post">
<input type="number" name="no" placeholder="No_of_Person" required> </td>
<td> No of Person Boarding = <?=number_format($Total_person); ?> </td>
</form>

</tr>
<tr>


<th>Total Price : </th>
<td> Rs: <?=number_format($total_price); ?> <td>
<td rowspan="4"class="text-center"><img src="<?=$pimage;?>" width="200" height="200px"></td>

</tr>
</table>
 <a href="payment/payment.html">
<input type="submit" name="submit"  class="btn btn-danger btn-lg" value="Click to Pay: Rs.<?= number_format($total_price);?>">
</a>


</div>
</div>

</div>

</body>
</html>
