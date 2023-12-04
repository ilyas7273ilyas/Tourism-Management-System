<?php
require 'configg.php';
$msg = "";
if (isset($_POST['submit'])) {
    $p_name = $_POST['pName'];
    $p_price = $_POST['pPrice'];

    $target_dir = "image/";
    $target_file = $target_dir . basename($_FILES['pImage']['name']);
    move_uploaded_file($_FILES['pImage']['tmp_name'], $target_file);

    $sql = "INSERT INTO packag(Package_Name, Package_Price, Package_img) VALUES('$p_name', '$p_price', '$target_file')";

    if (mysqli_query($conn, $sql)) {
        $msg = "Package added to the database successfully";
    } else {
        $msg = "Failed to add the package";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Package Information</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-info">
    <div class="container">
        <div class="row justify-content-center"> 

        <div class="col-md-6 bg-light mt-5 rounded">
            <h2 class="text-center p-2">Add Package Information</h2>

            <form action="" method="post" class="p-2" enctype="multipart/form-data" id="form-box">
                <div class="form-group">
                    <input type="text" name="pName" class="form-control" placeholder="Package Name" required>
                </div>
                <div class="form-group">
                    <input type="text" name="pPrice" class="form-control" placeholder="Package Price" required>
                </div>
                <div class="form-group">
                    <div class="custom-file"> 
                        <input type="file" name="pImage" class="custom-file-input" id="custom-file" required>
                        <label for="custom-file" class="custom-file-label">Choose Package Image</label>

                    </div>
                </div>

                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-danger btn-block" value="Add">
                </div>

                <div class="form-group">
                    <h4 class="text-center"> <?= htmlspecialchars($msg); ?> </h4>
                </div>

            </form>

        </div>


        </div>

        <div class="row justify-content-center"> 
            <div calss="col-md-6 mt-3 p-4 bg-light rounded">
                <br>

            <a href="index.php" class="btn  btn-warning btn-block btn-lg">Go to Packages Page</a>
        </div>

    </div>
    </div>
</body>
</html>
