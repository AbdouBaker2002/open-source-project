<?php
session_start();
if (!isset($_SESSION['email'])) {
  header("Location: login.php");
  exit();
}
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
        <title>Review</title>
        <link rel="shortcut icon" href="image/logo.png" type="image/x-icon">
        <link rel="stylesheet" href="css/all.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">

        <link href="https://fonts.googleapis.com/css2?family=Alkatra&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Delicious+Handrawn&display=swap" rel="stylesheet">
      </head>   <body>
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
          <section class="review" id="review">
            <div class="container">
              <h1>Customer <span class="review_text">Review</span></h1>
              <div class="row row-cols-1 row-cols-md-4 g-2 text-center review_box">
                <div class="col">
                  <div class="card p-3 shadow-lg">
                    <div class="review_img">
                      <img src="image/review_1.png" class="rounded-circle w-75" alt="...">
                    </div>
                    <div class="card-body">
                      <h2 class="name" style="transition: 0.3s;">John Deo</h2>
                      <div class="review_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                      </div>
                      <div class="review_social">
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-instagram"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-linkedin-in"></i>
                      </div>
                      <br><br>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus alias laudantium eum cumque eius
                        perspiciatis? Modi nihil excepturi facilis rem repellendus doloremque, debitis quis incidunt impedit
                        sit,
                        sapiente in architecto nobis consequuntur voluptatum, quasi reiciendis ea maxime accusantium ut
                        doloribus
                        earum asperiores ab nesciunt? Velit quibusdam beatae similique asperiores cupiditate?</p>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card p-3 shadow-lg">
                    <div class="review_img">
                      <img src="image/review_2.png" class="rounded-circle w-75" alt="...">
                    </div>
                    <div class="card-body">
                      <h2 class="name" style="transition: 0.3s;">John Deo</h2>
                      <div class="review_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                      </div>
                      <div class="review_social">
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-instagram"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-linkedin-in"></i>
                      </div>
                      <br><br>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus alias laudantium eum cumque eius
                        perspiciatis? Modi nihil excepturi facilis rem repellendus doloremque, debitis quis incidunt impedit
                        sit,
                        sapiente in architecto nobis consequuntur voluptatum, quasi reiciendis ea maxime accusantium ut
                        doloribus
                        earum asperiores ab nesciunt? Velit quibusdam beatae similique asperiores cupiditate?</p>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card p-3 shadow-lg">
                    <div class="review_img">
                      <img src="image/review_3.png" class="rounded-circle w-75" alt="...">
                    </div>
                    <div class="card-body">
                      <h2 class="name" style="transition: 0.3s;">John Deo</h2>
                      <div class="review_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                      </div>
                      <div class="review_social">
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-instagram"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-linkedin-in"></i>
                      </div>
                      <br><br>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus alias laudantium eum cumque eius
                        perspiciatis? Modi nihil excepturi facilis rem repellendus doloremque, debitis quis incidunt impedit
                        sit,
                        sapiente in architecto nobis consequuntur voluptatum, quasi reiciendis ea maxime accusantium ut
                        doloribus
                        earum asperiores ab nesciunt? Velit quibusdam beatae similique asperiores cupiditate?</p>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card p-3 shadow-lg">
                    <div class="review_img">
                      <img src="image/review_4.png" class="rounded-circle w-75" alt="...">
                    </div>
                    <div class="card-body">
                      <h2 class="name" style="transition: 0.3s;">John Deo</h2>
                      <div class="review_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                      </div>
                      <div class="review_social">
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-instagram"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-linkedin-in"></i>
                      </div>
                      <br><br>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus alias laudantium eum cumque eius
                        perspiciatis? Modi nihil excepturi facilis rem repellendus doloremque, debitis quis incidunt impedit
                        sit,
                        sapiente in architecto nobis consequuntur voluptatum, quasi reiciendis ea maxime accusantium ut
                        doloribus
                        earum asperiores ab nesciunt? Velit quibusdam beatae similique asperiores cupiditate?</p>
                    </div>
                  </div>
                </div>
              </div>
        
        
            </div>
        
          </section>
          <section class="review" id="review">
    <div class="container">
      <h1>Customer <span class="review_text">Review</span></h1>
      <div class="row row-cols-1 row-cols-md-4 g-2 text-center review_box">
        <?php
        $sql = "SELECT * FROM reviews";
        $result = $con->query($sql);

        // Display the menu items
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
          echo '<div class="col">';
          echo '<div class="card p-3 shadow-lg">';
          echo '<div class="review_img">';
          echo '<img src="' . $row['image'] . '" class="rounded-circle w-75" alt="' . $row['name'] . ' width="200" height="200">';
          echo '</div>';
          echo '<div class="card-body">';
          echo '<h2 class="name" style="transition: 0.3s;">' . $row['name'] . '</h2>';
          echo '<div class="review_social">';
          echo ' <a href="' . $row['facebook'] . '" target ="_blank"><i class="fa-brands fa-facebook-f"></i></a>';
          echo ' <a href="' . $row['instagram'] . '" target ="_blank"><i class="fa-brands fa-instagram"></i></a>';
          echo '<a href="' . $row['twitter'] . '" target ="_blank"><i class="fa-brands fa-twitter"></i></a>';
          echo '</div>';
          echo '<br><br>';
          echo '<p>' . $row['description'] . '</p>';
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