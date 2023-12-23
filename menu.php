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
        <title>Menu</title>
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
                    <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about_us.html">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="menu">Menu</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="review.html">Review</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="order.html">Reservation</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact Us</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </header>
      
 <section class="menu" id="menu">
    <div class="container text-center">
      <h1>Our <span class="menu_text">Menu</span></h1>
      <div class="row row-cols-1 row-cols-md-4 g-2 ">
        <div>
          <div class="col">
            <div class="card h-100 shadow-lg">
              <div class="menu_img overflow-hidden pt-1">
                <a href="https://youtu.be/H3R1y1ADCZw"><img src="image/buger.jpg" class="card-img-top" alt="..."></a>
              </div>
              <div class="card-body">
                <h2 class="card-title">Buger</h2>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, illo?F</p>
                <h5><b>$20.00</b></h5>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star-half-stroke"></i>
                <br><br>
                <button class="menu_btn"><a href="#">Order Now</a></button>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="col">
            <div class="card h-100 shadow-lg">
              <div class="menu_img overflow-hidden pt-1">
                <a href="https://www.youtube.com/watch?v=HW2SoMJToIo&pp=ugMICgJhchABGAE%3D"><img src="image/pasta.jpg"
                    class="card-img-top " alt="..."></a>
              </div>
              <div class="card-body">
                <h2 class="card-title">pasta</h2>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, illo?F</p>
                <h5><b>$20.00</b></h5>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star-half-stroke"></i>
                <br><br>
                <button class="menu_btn"><a href="#">Order Now</a></button>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="col">
            <div class="card h-100 shadow-lg">
              <div class="menu_img overflow-hidden pt-1">
                <a href="https://www.youtube.com/watch?v=nOg-UCvoNMo&pp=ugMICgJhchABGAE%3D"><img
                    src="image/lasagna.webp" class="card-img-top" alt="..."></a>
              </div>
              <div class="card-body">
                <h2 class="card-title">lasagna</h2>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, illo?F</p>
                <h5><b>$20.00</b></h5>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star-half-stroke"></i>
                <br><br>
                <button class="menu_btn"><a href="#">Order Now</a></button>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="col">
            <div class="card h-100 shadow-lg">
              <div class="menu_img overflow-hidden pt-1">
                <a href="https://www.youtube.com/watch?v=Yb1tfUxTxIA"><img src="image/chocolate_Drink.jpg"
                    class="card-img-top" alt="..."></a>
              </div>
              <div class="card-body">
                <h2 class="card-title">Drink</h2>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, illo?F</p>
                <h5><b>$20.00</b></h5>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star-half-stroke"></i>
                <br><br>
                <button class="menu_btn"><a href="#">Order Now</a></button>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="col">
            <div class="card h-100 shadow-lg">
              <div class="menu_img overflow-hidden pt-1">
                <a href="https://www.youtube.com/watch?v=4GzxPw6-rLM"><img src="image/pizza.jpg" class="card-img-top"
                    alt="..."></a>
              </div>
              <div class="card-body">
                <h2 class="card-title">pizza</h2>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, illo?F</p>
                <h5><b>$20.00</b></h5>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star-half-stroke"></i>
                <br><br>
                <button class="menu_btn"><a href="#">Order Now</a></button>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="col">
            <div class="card h-100 shadow-lg">
              <div class="menu_img overflow-hidden pt-1">
                <a href="https://www.youtube.com/watch?v=g4TY8Cw5UJ4"><img src="image/Hot_dog.jpg" class="card-img-top"
                    alt="..."></a>
              </div>
              <div class="card-body">
                <h2 class="card-title">Hot Dog</h2>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, illo?F</p>
                <h5><b>$20.00</b></h5>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star-half-stroke"></i>
                <br><br>
                <button class="menu_btn"><a href="#">Order Now</a></button>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="col">
            <div class="card h-100 shadow-lg">
              <div class="menu_img overflow-hidden pt-1">
                <a href="https://www.youtube.com/watch?v=dNqC-9g9vtw"><img src="image/juse.jpg" class="card-img-top"
                    alt="..."></a>
              </div>
              <div class="card-body">
                <h2 class="card-title">Juse</h2>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, illo?F</p>
                <h5><b>$20.00</b></h5>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star-half-stroke"></i>
                <br><br>
                <button class="menu_btn"><a href="#">Order Now</a></button>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="col">
            <div class="card h-100 shadow-lg">
              <div class="menu_img overflow-hidden pt-1">
                <a href="https://www.youtube.com/watch?v=OQGAMDVF51Y"><img src="image/biryani.webp" class="card-img-top"
                    alt="..."></a>
              </div>
              <div class="card-body">
                <h2 class="card-title">Biryani</h2>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, illo?F</p>
                <h5><b>$20.00</b></h5>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star-half-stroke"></i>
                <br><br>
                <button class="menu_btn"><a href="#">Order Now</a></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end menu page -->

   <!-- start menu page -->

   <section class="menu" id="menu">
    <div class="container text-center">
      <h1>Our <span class="menu_text">Menu</span></h1>
      <div class="row row-cols-1 row-cols-md-4 g-2 ">
        <?php
        // Query the database for menu items
        $sql = "SELECT * FROM menu";
        $result = $con->query($sql);

        // Display the menu items
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {

            echo '<div>';
            echo '<div class="col">';
            echo '<div class="card h-100 shadow-lg">';
            echo '<div class="menu_img overflow-hidden pt-1">';
            echo '<img src="' . $row['image_url'] . '" class="card-img-top" alt="' . $row['name'] . '">';
            echo ' </div>';
            echo '<div class="card-body">';
            echo '  <h2 class="card-title">' . $row['name'] . '</h2>';
            echo '<p class="card-text">' . $row['description'] . '</p>';
            echo '<h5>$' . $row['price'] . '</h5>';
            echo '<h6>Quantity</h6>';
            echo '<form method="POST">';
            echo '<input type="number" class="form-control" id="formGroupExampleInput2" style="width: 80px;margin: auto;" name="quantity" value="1" min="1" required>';
            echo '<br>';
            echo '<input type="hidden" name="food" value="' . $row['name'] . '">';
            echo '<input type="hidden" name="price" value="' . $row['price'] . '">';
            echo '<input type="hidden" name="image" value="' . $row['image_url'] . '">';
            echo '<button type="submit" class="menu_btn order_btn" name="order">Add To Chart</button>';
            echo '</form>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
          }
        }
        ?>
        <?php
        if (isset($_POST['order'])) {
          $con = mysqli_connect("localhost", "root", "", "yummy") or die("connection failed");
          // Get the food item that was ordered
          $food = $_POST['food'];

          // Get the price of the food item
          $price = $_POST['price'];

          // Get the quantity of the food item
          $quantity = $_POST['quantity'];

          $user_email = $_SESSION['email'];

          // Get the image URL of the food item
          $image = $_POST['image'];


          // Add the order to the database
          $query = "INSERT INTO orders (order_email, order_name, order_image, order_number, order_price, order_status) VALUES ('$user_email','$food','$image','$quantity', '$price','chart')";
          $run = $con->query($query);
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