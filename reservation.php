<?php
$con = mysqli_connect("localhost", "root", "", "yummy") or die("connection failed");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="A food site that contains the most famous international dishes">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Hakim samir">
        <meta name="keywords" content=" Yummy food sandwich drink Meat chicken fish hot dog pizza ice cream chocolate cake">
        <title>Order</title>
        <link rel="shortcut icon" href="image/logo.png" type="image/x-icon">
        <link rel="stylesheet" href="css/all.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/css2?family=Alkatra&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Delicious+Handrawn&display=swap" rel="stylesheet">
      </head>      
<body>
  <header class="home" id="home">>
    <div class="container pt-5">
      <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
          <img src="image/logo.png" alt="logo">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#menu">Menu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#review">Review</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#reservation">Reservation</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact_us">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#team">Team</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <section class="reservation" id="reservation">
    <div class="container">
      <h1 class="reservation_text">Reservation</h1>
      <div class="row">
        <div class="col-md-6">
          <img src="image/order_image.png" class="w-100">
        </div>
        <div class="col-md-6 reservation_body">
          <form action="" method="post">
            <div class="row">
              <div class="col-md-6">
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="your email" value="<?php $user_email = $_SESSION['email'];
                  echo $user_email; ?>" readonly>
                </div>
                <div class="mb-3">
                  <label for="time" class="form-label">Time</label>
                  <select class="form-control form-select" id="time" name="time">
                    <option selected disabled>Choose your time</option>
                    <option value="17:00">5:00 PM</option>
                    <option value="18:00">6:00 PM</option>
                    <option value="19:00">7:00 PM</option>
                    <option value="20:00">8:00 PM</option>
                    <option value="21:00">9:00 PM</option>
                    <option value="22:00">10:00 PM</option>
                  </select>
                </div>
                <button class="reservation_btn" name="reservation">Reservation</button>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label for="date" class="form-label">Date</label>
                  <input type="date" class="form-control" id="date" name="date" placeholder="Date">
                </div>
                <div class="mb-3">
                  <label for="number" class="form-label">Number of individuals</label>
                  <input type="number" class="form-control" id="number" name="number" placeholder="Number" min="1">
                </div>
              </div>
            </div>
            <?php
            if (isset($_POST['reservation'])) {
              $email = $_SESSION['email'];
              $time = $_POST['time'];
              $date = $_POST['date'];
              $number = $_POST['number'];


            ?>
          </form>
        </div>
      </div>
    </div>
  </section>

  <footer class="copy_right" id="copy_right">
    <div class="container text-center pt-3">
      <p style="margin-top: 20px;">Copyright © 2023 All rights reserved | made by <i
          class="fa-solid fa-face-laugh copy_icon" style="color: #fac031;"></i> <span class="copy_text">
          Security section web team</span></p>
    </div>
  </footer>

    
</body>