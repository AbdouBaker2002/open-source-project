<?php
$con = mysqli_connect("localhost", "root", "", "yummy") or die("connection failed");
session_start();
if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
    $query2 = "SELECT Admin FROM users WHERE email = '$email';";
    $result2 = $con->query($query2);
    $row =  $result2->fetch_assoc();
    $check =$row['Admin'];
    if ($check == 1) {
        header("Location:dashboard.php");
        exit();
    } else {
        header("Location:home.php");
        exit();
    }
}

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
    <section class="login" id="login">
        <div class="layer">
          <h1>Welcome to Yummy Restaurant</h1>
          <div class="login_info">
            <img src="image/logo.png" alt="" class="login_logo">
            <form>
              <div class="row p-3">
                <div class="col-12 pb-3 pt-3">
                  <input type="email" class="form-control" placeholder="Email" aria-label="login_email">
                </div>
                <div class="col-12 pb-3">
                  <input type="password" class="form-control" placeholder="Password" aria-label="password_email">
                </div>
                <div class="col-12 text-center pb-3">
                  <button type="submit" class="btn btn-primary"><a href="index.html">Login</a></button>
                </div>
                <p>Don't have account ? <a href="register.html">Signup Now</a></p>
              </div>
            </form>
          </div>
        </div>
      </section>
    
</body>
</html>