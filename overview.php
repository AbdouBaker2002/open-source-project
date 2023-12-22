<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="A food site that contains the most famous international dishes">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Hakim samir">
        <meta name="keywords" content=" Yummy food sandwich drink Meat chicken fish hot dog pizza ice cream chocolate cake">
        <title>overview</title>
        <link rel="shortcut icon" href="image/logo.png" type="image/x-icon">
        <link rel="stylesheet" href="css/all.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/css2?family=Alkatra&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Delicious+Handrawn&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@500&display=swap" rel="stylesheet">
      </head>
<body>
  <!-- start welcome page -->

  <section class="welcome" id="welcome">
    <div class="layer">
      <h1>Welcome to Yummy Restaurant</h1>
      <div class="welcome_info">
        <img src="image/logo.png" alt="" class="welcome_logo">
        <p>Yummy Restaurant, in its new dress, offers you a group of the best oriental and western food, and the newest
          and best hot and cold drinks, in addition to your ability to make an order that will reach you at the door of
          the house, so hurry up by booking through our website <br>
          <span class="welcome_text"> You can see our best dishes from here</span><br>
          <a href="#gallary"> <i class="welcome_btn fa-solid fa-circle-arrow-down"></i></a>
        </p>
      </div>
    </div>
  </section>

  <!-- end welcome page -->

  <!-- start gallary page -->
  <!-- mysqli_connect -->

  <section class="gallary" id="gallary">
    <div class="container">
      <h1>Menu<span class="gallary_text"> overview</span></h1>
      <div class="row g-3 gallary_image_box">
        <?php
        
        $con = mysqli_connect("localhost", "root", "", "yummy") or die("connection failed");
        $sql = "SELECT * FROM menu LIMIT 6";
        $result = $con->query($sql);
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            echo '<div class="col-md-4 gallary_image">';
            echo '<img src="' . $row['image_url'] . '" alt="' . $row['name'] . '">';

            echo '</div>';
          }
        }
        else{
          echo'no gallary';
        }
        ?>
      </div>
      <br>
      <h5>To order your favorite foods, please login</h5>
      <br>
      <div class="text-center">
        <form method="post">
          <button type="submit" class="btn btn-primary" name="login">Login</button>
        </form>
        <?php
        if (isset($_POST['login'])) {
          header("Location: login.php");
          exit();
        }
        ?>
      </div>
    </div>

  </section>

  <!-- end gallary page -->

</body>
</html>