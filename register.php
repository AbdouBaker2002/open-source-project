<?php
$con = mysqli_connect("localhost", "root", "", "yummy") or die("connection failed");
$error_message = "";

$first_name = "";
$last_name = "";
$email = "";
$password = "";
$confirm_password = "";
$phone = "";
$address = "";
$age = "";

if (isset($_POST['sign_up'])) {
  $first_name = htmlentities(mysqli_real_escape_string($con, $_POST['first_name']));
  $last_name = htmlentities(mysqli_real_escape_string($con, $_POST['last_name']));
  $email = htmlentities(mysqli_real_escape_string($con, $_POST['email']));
  $password = htmlentities(mysqli_real_escape_string($con, $_POST['password']));
  $confirm_password = htmlentities(mysqli_real_escape_string($con, $_POST['confirm_password']));
  $phone = htmlentities(mysqli_real_escape_string($con, $_POST['phone']));
  $address = htmlentities(mysqli_real_escape_string($con, $_POST['address']));
  $age = htmlentities(mysqli_real_escape_string($con, $_POST['age']));
  $gender = htmlentities(mysqli_real_escape_string($con, $_POST['gender']));

  // Validate first Name
  if (!preg_match("/^[A-Za-z ]+$/", $first_name)) {
    $error_message = "First Name should contain only letters and spaces.";
  }

  // Validate Last Name
  if (!preg_match("/^[A-Za-z ]+$/", $last_name)) {
    $error_message = "Last Name should contain only letters and spaces.";
  }

  // Validate Email
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $error_message = "Invalid email address.";
  }

  // Validate Password
  if (strlen($password) < 8) {
    $error_message = "Password should be at least 8 characters long.";
  } elseif (!preg_match("/\d/", $password)) {
    $error_message = "Password should contain at least one number.";
  } elseif (!preg_match("/[A-Z]/", $password)) {
    $error_message = "Password should contain at least one capital letter.";
  } elseif (!preg_match("/[a-z]/", $password)) {
    $error_message = "Password should contain at least one small letter.";
  } elseif (!preg_match("/[^\w\d\s:]/", $password)) {
    $error_message = "Password should contain at least one special character.";
  }

  // Validate Confirm Password
  if ($password !== $confirm_password) {
    $error_message = "Passwords do not match.";
  }

  // Validate Phone
  if (!preg_match("/^(010|011|012|015)[0-9]{8}$/", $phone)) {
    $error_message = "Invalid phone number.";
  }

  if (empty($error_message)) {
    $check_user = "SELECT * FROM users WHERE Email='$email'";
    $result = $con->query($check_user);
    $check = mysqli_num_rows($result);
    if ($check == 1) {
      $error_message = "User is already registered.";
    } else {
      $insert = "INSERT INTO users(First_Name, Last_Name, Email, User_Password, Phone, User_Address, Age, Gender) VALUES ('$first_name', '$last_name','$email','$password', '$phone', '$address','$age', '$gender')";
      $run = $con->query($insert);
      if ($run) {
        $first_name = "";
        $last_name = "";
        $email = "";
        $password = "";
        $confirm_password = "";
        $phone = "";
        $address = "";
        $age = "";
        header("Location: login.php");
        exit();
      }
    }
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
  <title>Register</title>
  <link rel="shortcut icon" href="image/logo.png" type="image/x-icon">
  <link rel="stylesheet" href="css/all.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Alkatra&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Delicious+Handrawn&display=swap" rel="stylesheet">
</head>

<body>
<section class="register" id="register">
    <div class="layer">
      <div class="register_info ">
        <img src="image/logo.png" alt="" class="register_logo">
        <form action="" method="post">
          <h3>Register</h3>
          <div class="row p-2">
            <div class="col-md-6 pb-4">
              <input type="text" class="form-control" placeholder="First name" aria-label="First name" name="first_name"
                value="<?php echo $first_name; ?>" required>
            </div>
            <div class="col-md-6 pb-4">
              <input type="text" class="form-control" placeholder="Last name" aria-label="Last name" name="last_name"
                value="<?php echo $last_name; ?>" required>
            </div>
            <div class="col-md-12 pb-4">
              <input type="email" class="form-control" placeholder="Email" aria-label="register_email" name="email"
                value="<?php echo $email; ?>" required>
            </div>
            <div class="col-md-6 pb-4">
              <input type="password" class="form-control" placeholder="Password" aria-label="password_email "
                name="password" value="<?php echo $password; ?>" required>
            </div>
            <div class="col-md-6 pb-4">
              <input type="password" class="form-control" placeholder="Confirm Password" aria-label="password_email"
                name="confirm_password" value="<?php echo $confirm_password; ?>" required>
            </div>
            <div class="col-md-12 pb-4">
              <input type="number" class="form-control" placeholder="Phone" aria-label="register_phone" name="phone"
                value="<?php echo $phone; ?>" required>
            </div>
            <div class="col-md-12 pb-4">
              <input type="text" class="form-control" placeholder="Address" aria-label="register_address" name="address"
                value="<?php echo $address; ?>" required>
            </div>
            <div class="col-md-12 pb-4">
              <input type="number" class="form-control" placeholder="Age" aria-label="register_age" name="age"
                value="<?php echo $age; ?>" required>
            </div>
            <div class="col-md-12 pb-4" style="color: white;">
              <label style="font-weight: 500; font-size: 20px;">Gender</label>
              <br>
              <input type="radio" name="gender" value=1 required checked />
              <label>male</label>
              <input type="radio" name="gender" value=0 required />
              <label>female</label>
            </div>
            <div class="col-12 pb-3">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck" required checked>
                <label class="form-check-label" for="gridCheck" style="color: white;">
                  I accept <span class="login_text"><a href="terms.php" style="text-decoration: none;">Terms of
                      Use</a></span>
                </label>
              </div>
            </div>
            <div class="col-md-12 text-center pb-3">
              <button type="submit" class="btn btn-primary" name="sign_up">Sign Up</button>
            </div>
            
          </div>
        </form>
        <?php
            if (!empty($success_message)) {
              echo '<div class="success-message">' . $success_message . '</div>';
            } elseif (!empty($error_message)) {
              echo '<div class="error-message">' . $error_message . '</div>';
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
