<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}
if(isset($_POST['submit'])){
    $email = $_POST['email']; 
    $message = $_POST['message']; 
    $con = mysqli_connect("localhost", "root", "", "yummy") or die("connection failed");
    $stmt = $con->prepare("INSERT INTO review (email, message) VALUES (?, ?)");
    $stmt->bind_param("ss", $email, $message);
    $stmt->execute();
    $stmt->close();
    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Review submission page for Yummy">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Security section web team">
    <meta name="keywords" content="Yummy food, sandwich, drink, Meat, chicken, fish, hot dog, pizza, ice cream, chocolate cake">
    <title>Submit Review | Yummy</title>
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
                    <a class="nav-link" href="about_us.html">About</a>
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
          <div class="row">
            <div class="col-md-6">
              <h1>Get Fresh <span class="text">Food</span><br> in a Easy Way</h1>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi itaque, accusantium necessitatibus laudantium
                dolores assumenda tempore in suscipit distinctio! Dignissimos magni sapiente autem asperiores optio
                obcaecati, doloremque ex, assumenda nemo sunt laboriosam neque tempora. Nihil ipsa reprehenderit
                perspiciatis. Voluptate consequatur et dolores harum officia fuga itaque. Aliquam aspernatur consectetur
                corrupti.</p>
              <button class="home_btn"><a href="#order">Order Now</a> <i class="fa-solid fa-angle-right"></i></button>
            </div>
            <div class="col-md-6 home_img">
              <img src="image/main_img.png" class="w-100">
            </div>
          </div>
        </div>
      </header>
      <section class="submit_review">
        <div class="container">
            <a href="dashboard.php"> <img src="image/logo.png" class="logo_card"></a>
            <h1>Submit Your Review</h1>
            <form method="post" action="">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Review Message:</label>
                    <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit Review</button>
            </form>
        </div>
    </section>
</body>
</html>