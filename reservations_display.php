
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
<section class="Reservation_admin">
    <div class="container">
      <a href="dashboard.php"> <img src="image/logo.png" class="logo_card"></a>
      <h1>Reservations</h1>
      <h4><span style="color: black;">un ready</span> Reservations</h4>
      <table class="table table-dark table-striped text-center">
        <thead>
          <tr>
            <th scope="col">Email</th>
            <th scope="col">Date</th>
            <th scope="col">Time</th>
            <th scope="col">Number</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $con = mysqli_connect("localhost", "root", "", "yummy") or die("connection failed");
          $sql = "SELECT * FROM reservations WHERE status = 'not ready' ORDER BY date , time , email";
          $result = $con->query($sql);

          // Display the menu items
          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              echo '<tr>';
              echo '<td>' . $row['email'] . '</td>';
              echo '<td scope="row">' . $row['date'] . '</td>';
              echo '<td>' . $row['time'] . '</td>';
              echo '<td>' . $row['number_of_individuals'] . '</td>';
              echo '<td><button class="btn btn-primary">' . $row['status'] . '</button></td>';
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
              echo '</td>';
              echo '</tr>';
            }
            if (isset($_POST['delete'])) {
              $message_id = $_POST['id'];
              $sql1 = "DELETE FROM reservations WHERE id = '$message_id'";
              $result1 = $con->query($sql1);
            }
            if (isset($_POST['update'])) {
              $message_id = $_POST['id'];
              $sql1 = "UPDATE reservations
      SET status = 'ready'
      WHERE id = '$message_id';";
              $result1 = $con->query($sql1);
          }
          }
          ?>
        </tbody>
      </table>
      <br> <br> <br>
      <h4><span style="color: black;">ready</span> Reservations</h4>
      <table class="table table-dark table-striped text-center">
        <thead>
          <tr>
            <th scope="col">Email</th>
            <th scope="col">Date</th>
            <th scope="col">Time</th>
            <th scope="col">Number</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $con = mysqli_connect("localhost", "root", "", "yummy") or die("connection failed");
          $sql = "SELECT * FROM reservations WHERE status = 'ready' ORDER BY date , time , email";
          $result = $con->query($sql);

          // Display the menu items
          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              echo '<tr>';
              echo '<td>' . $row['email'] . '</td>';
              echo '<td scope="row">' . $row['date'] . '</td>';
              echo '<td>' . $row['time'] . '</td>';
              echo '<td>' . $row['number_of_individuals'] . '</td>';
              echo '<td><button class="btn btn-primary">' . $row['status'] . '</button></td>';
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
              echo '</td>';
              echo '</tr>';
            }
            if (isset($_POST['delete1'])) {
              $message_id = $_POST['id'];
              $sql1 = "DELETE FROM reservations WHERE id = '$message_id'";
              $result1 = $con->query($sql1);
            }
          }
          ?>
        </tbody>
      </table>
    </div>


  </section>
      <script src="js/jquery-3.2.1.min.js"></script>
      <script src="js/main.js"></script>
</body>
</html>