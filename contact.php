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
        <title>Contact</title>
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
                            <a class="nav-link" href="menu.html">Menu</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="review.html">Review</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="order.html">Reservation</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact Us</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </nav>
                </div>
    </header>
    <section class="contact" id="contact_us">
    <div class="container">
      <h1><span class="contact_text">Contact</span> Us</h1>
      <div class="row">
        <div class="col-md-6 contact_img">
          <img src="image/contact.png" class="w-100">
        </div>
        <div class="col-md-6 contact_body">
          <div class="row">
            <div class="col-md-12">
              <form action="" method="post">
                <div class="mb-3">
                  <label for="formGroupExampleInput">Name</label>
                  <input type="text" class="form-control" id="formGroupExampleInput" name="name"
                    placeholder="your name">
                </div>
                <div class="mb-3">
                  <label for="formGroupExampleInput">Email</label>
                  <input type="email" class="form-control" id="formGroupExampleInput" name="email"
                    placeholder="your email" value="<?php $user_email = $_SESSION['email'];
                    echo $user_email; ?>" readonly>
                </div>

                <div class="mb-3">
                  <label for="formGroupExampleInput2">Message</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" name="message"
                    placeholder="your message" rows="4"></textarea>
                </div>
                <button class="contact_btn" name="send">Send</button>
                <?php
                $con = mysqli_connect("localhost", "root", "", "yummy") or die("connection failed");
                if (isset($_POST['send'])) {
                  $name = htmlentities(mysqli_real_escape_string($con, $_POST['name']));
                  $email = $_SESSION['email'];
                  $message = htmlentities(mysqli_real_escape_string($con, $_POST['message']));

                  if (strlen($name) == 0 || strlen($message) == 0) {
                    echo "Filed can not be empty";
                  }

                  $insert_query = "INSERT INTO contactus (name, email, message, status) VALUES ('$name', '$email', '$message', 'unread')";
                  $run_query = $con->query($insert_query);
                  if ($run_query) {
                    echo "correct";
                  } else {
                    echo "error";
                  }
                }
                ?>
              </form>
            </div>
          </div>
        </div>
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