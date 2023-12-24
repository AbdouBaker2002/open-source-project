<?php
session_start();
if (!isset($_SESSION['email'])) {
  header("Location: login.php");
  exit();
}
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
<section class="orders">
        <div class="container">
            <a href="dashboard.php"> <img src="image/logo.png" class="logo_card"></a>

            <h1><span class="orders-text">Orders</span></h1>
            <h4><span style="color: black;">Confirmed</span> Order</h4>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <th scope="col">name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Number</th>
                        <th scope="col">Price</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $con = mysqli_connect("localhost", "root", "", "yummy") or die("connection failed");

                    $sql = "SELECT * FROM orders WHERE order_status='confirmed' ORDER BY order_email";
                    $result = $con->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<th scope="row">' . $row['order_name'] . '</th>';
                            echo '<td>' . $row['order_email'] . '</td>';
                            echo '<td>' . $row['order_number'] . '</td>';
                            echo '<td>' . $row['order_price'] . '</td>';
                            echo '<td><button class="btn btn-primary">' . $row['order_status'] . '</button></td>';
                            echo '<td>';
                            echo '<form method="post">';
                            echo '<input type="hidden" name="id" value="' . $row['id'] . '">'; // Add this line to pass the ID value
                            echo '<button name = "update""><i class="fa-solid fa-check true_icon"></i></button>';
                            echo '<button  type="submit" name="delete">
                        <i class="delete fa-solid fa-trash-can"></i>
                    </button>';
                            echo '</form>';
                            echo '</td>';
                            echo '</tr>';
                            $id = $row['id'];
                        }

                    }
                    if (isset($_POST['delete'])) {
                        $message_id = $_POST['id'];
                        $sql1 = "DELETE FROM orders WHERE id = '$message_id'";
                        $result1 = $con->query($sql1);
                    }
                    if (isset($_POST['update'])) {
                        $message_id = $_POST['id'];
                        $sql1 = "UPDATE orders
                SET order_status = 'done'
                WHERE id = '$message_id';";
                        $result1 = $con->query($sql1);
                    }


                    ?>
                </tbody>
            </table>
            <h4 class="pt-5"><span style="color: black;">Done</span> orders</h4>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <th scope="col">Order name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Number</th>
                        <th scope="col">Price</th>
                        <th scope="col">Done</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>


                    <?php
                    $con = mysqli_connect("localhost", "root", "", "yummy") or die("connection failed");

                    $sql = "SELECT * FROM orders WHERE order_status='done' ORDER BY order_email";
                    $result = $con->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<th scope="row">' . $row['order_name'] . '</th>';
                            echo '<td>' . $row['order_email'] . '</td>';
                            echo '<td>' . $row['order_number'] . '</td>';
                            echo '<td>' . $row['order_price'] . '</td>';
                            echo '<td><button class="btn btn-primary">' . $row['order_status'] . '</button></td>';
                            echo '<td>';
                            echo '<form method="post">';
                            echo '<input type="hidden" name="id" value="' . $row['id'] . '">'; // Add this line to pass the ID value
                            echo '<button  type="submit" name="delete1">
                        <i class="delete fa-solid fa-trash-can"></i>
                    </button>';
                            echo '</form>';
                            echo '</td>';
                            echo '</tr>';
                            $id = $row['id'];
                        }

                    }
                    if (isset($_POST['delete1'])) {
                        $message_id = $_POST['id'];
                        $sql1 = "DELETE FROM orders WHERE id = '$message_id'";
                        $result1 = $con->query($sql1);
                    }


                    ?>
                </tbody>
            </table>
        </div>


    </section>
    
</body>
</html>