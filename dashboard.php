<?php
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
  <link href="https://fonts.googleapis.com/css2?family=Alkatra&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Delicious+Handrawn&display=swap" rel="stylesheet">
</head>

<body>
  <section class="dashboard" id="dashboard">
    <div class="container">
      <h1>Admin <span class="dashboard_text">dashboard</span></h1>
      <form method="post">
        <div class="row text-center pb-5">

          <div class="col-md-4 g-3 dashboard_body p-3 pt-5" style="height: 300px;">
            <button name="home" style="text-decoration: none; border: none; background: none;">
              <div class="card-body">
                <i class="fa-solid fa-house pb-4" style="font-size: 80px;color: blue; "></i>
                <h1 style="color: black;">Home Page</h1>
              </div>
            </button>
          </div>
          <div class="col-md-4 g-3 dashboard_body p-3 pt-5" style="height: 300px;">
            <button name="contact" style="text-decoration: none; border: none; background: none;">
              <div class="card-body">
                <i class="fa-solid fa-house pb-4" style="font-size: 80px;color: blue; "></i>
                <h1 style="color: black;">Contact Messages</h1>
              </div>
            </button>
          </div>
          <div class="col-md-4 g-3 dashboard_body p-3 pt-5" style="height: 300px;">
            <button name="reservation" style="text-decoration: none; border: none; background: none;">
              <div class="card-body">
                <i class="fa-solid fa-house pb-4" style="font-size: 80px;color: blue; "></i>
                <h1 style="color: black;">Reservations</h1>
              </div>
            </button>
          </div>
          <div class="col-md-4 g-3 dashboard_body p-3 pt-5" style="height: 300px;">
            <button name="orders" style="text-decoration: none; border: none; background: none;">
              <div class="card-body">
                <i class="fa-solid fa-house pb-4" style="font-size: 80px;color: blue; "></i>
                <h1 style="color: black;">Orders</h1>
              </div>
            </button>
          </div>
          <div class="col-md-4 g-3 dashboard_body p-3 pt-5" style="height: 300px;">
            <button name="menu" style="text-decoration: none; border: none; background: none;">
              <div class="card-body">
                <i class="fa-solid fa-house pb-4" style="font-size: 80px;color: blue; "></i>
                <h1 style="color: black;">Menu</h1>
              </div>
            </button>
          </div>
          <div class="col-md-4 g-3 dashboard_body p-3 pt-5" style="height: 300px;">
            <button name="logout" style="text-decoration: none; border: none; background: none;">
              <div class="card-body">
                <i class="fa-solid fa-house pb-4" style="font-size: 80px;color: blue; "></i>
                <h1 style="color: black;">Log Out</h1>
              </div>
            </button>
          </div>

        </div>
      </form>

    </div>

  </section>
</body>

</html>
