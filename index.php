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
        <title>Yummy</title>
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

      <section class="team" id="team">
    <div class="container_team">
        <h1>Our <span class="team_text">Team</span></h1>
        <div class="row team_box">
            <?php
            $sql = "SELECT * FROM team";
            $result = $con->query($sql);

            // Display the team items
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="col-md-1 profile">';
                    echo '<img src="' . $row['image'] . '" alt="">';
                    echo '<div class="team_info">';
                    echo '<h2 class="name">' . $row['name'] . '</h2>';
                    echo '<p class="bio">' . $row['description'] . '</p>';
                    echo '<div class="team_icon">';
                    echo '<a href="' . $row['instagram'] . '" target ="_blank"> <i class="fa-brands fa-instagram"></i></a>';
                    echo '<a href="' . $row['facebook'] . '" target ="_blank"> <i class="fa-brands fa-facebook-f"></i></a>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
            }
            ?>
        </div>
    </div>
</section>

      
      <footer class="copy_right" id="copy_right">
        <div class="container text-center pt-3">
          <p style="margin-top: 20px;">Copyright © 2023 All rights reserved | made by OSS Team</span></p>
        </div>
      </footer>  
</body>
</html>