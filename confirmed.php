<?php
 session_start();
 if (!isset($_SESSION['email'])) {
   header("Location: login.php");
   exit();
 $con = mysqli_connect("localhost", "root", "", "yummy") or die("connection failed");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="description" content="A food site that contains the most famous international dishes">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Security section web team">
    <meta name="keywords" content=" Yummy food sandwich drink Meat chicken fish hot dog pizza ice cream chocolate cake">
    <title>Yummy</title>
    <link rel="shortcut icon" href="image/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Alkatra&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Delicious+Handrawn&display=swap" rel="stylesheet">
</head>
<body>
<section class="card" id="card">
    <div class="container">
    <a href="home.php"> <img src="image/logo.png" class="logo_card"></a>
        <a href="cart.php"><i class="icon_card fa-solid fa-cart-shopping"></i></a>
        <h1>Confirmed <span class="card_text">Orders</span></h1>
        <div class="row">

            <?php
            $con = mysqli_connect("localhost", "root", "", "yummy") or die("connection failed");

            $order_email = $_SESSION['email'];

            $sql = "SELECT * FROM orders WHERE order_email='$order_email' AND order_status='confirmed'";
            $result = $con->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="col-md-10 shadow-lg card_body mt-5 p-3">';
                    echo '<div class="row">';
                    echo '<div class="col-md-3">';
                    echo '<img src="' . $row['order_image'] . '" class="rounded-circle " style="width: 50%;">';
                    echo ' </div>';
                    echo '<div class="col-md-3">';
                    echo '<h1>' . $row['order_name'] . '</h1>';
                    echo '</div>';
                    echo '<div class="col-md-3 text-center">';
                    echo '<h5>number: ' . $row['order_number'] . '</h5>';
                    echo '<h5>Price: ' . $row['order_price'] . '$</h5>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    //$id = $row['id'];
                }
            } else {
                echo "no orders";
                echo'<br><br>';
            }
            ?>
        </div>
        <br>
        <br>
    </div>
</section>
<footer class="copy_right" id="copy_right">
  <div class="container text-center pt-3">
    <p style="margin-top: 20px;">Copyright © 2023 All rights reserved | made by OSS Team</span></p>
  </div>
</footer>  
</body>
</html>