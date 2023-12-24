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
      <h1>Reservation <span class="reservation_text">form</span></h1>
      <div class="row">
        <div class="col-md-6">
          <img src="image/order_image.png" class="w-75">
        </div>
        <div class="col-md-6 reservation_body">
          <div class="row">
            <div class="col-md-6">
              <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Email</label>
                <input type="email" class="form-control" id="formGroupExampleInput" placeholder="your email">
              </div>
              <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Time</label>
                <select class="form-control form-select mb-3">
                  <option selected>Choose your time</option>
                  <option value="1">5pm</option>
                  <option value="2">6pm</option>
                  <option value="3">7pm</option>
                  <option value="4">8pm</option>
                  <option value="5">9pm</option>
                  <option value="6">10pm</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Date</label>
                <input type="date" class="form-control" id="formGroupExampleInput2" placeholder="Date">
              </div>
              <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Number of individuals</label>
                <input type="number" class="form-control" id="formGroupExampleInput2" placeholder="Number">
              </div>
            </div>
            <div class="col-md-3">
              <button class="reservation_btn"><a href="#">reservation</a></button>
            </div>
          </div>
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