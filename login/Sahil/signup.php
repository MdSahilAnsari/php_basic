<?php

$db_host="localhost";
$db_user="root";
$db_password="";
$db_name="login";

$conn=new mysqli($db_host,$db_user,$db_password,$db_name);
if(isset($_REQUEST['signup'])){
  $email=$_REQUEST['email'];
  $pass=$_REQUEST['pass'];
  
  $sql="INSERT INTO login(email,pass)
  VALUES('$email','$pass')";
  $conn->query($sql);
}

?>

<!doctype html>
<html lang="en">
  
<!-- Mirrored from landkit.goodthemes.co/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Jun 2022 08:07:48 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/favicon/favicon.ico" type="image/x-icon" />
    
    <!-- Map CSS -->
    <link rel="stylesheet" href="../api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css" />
    
    <!-- Libs CSS -->
    <link rel="stylesheet" href="assets/css/libs.bundle.css" />
    
    <!-- Theme CSS -->
    <link rel="stylesheet" href="assets/css/theme.bundle.css" />
    
    <!-- Title -->
    <title>Landkit</title>
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-156446909-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
    
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag("js", new Date());
      gtag("config", "UA-156446909-2");
    
    </script>
  </head>
  <body>

    <!-- CONTENT -->
    <section class="section-border border-primary">
      <div class="container d-flex flex-column">
        <div class="row align-items-center justify-content-center gx-0 min-vh-100">
          <div class="col-12 col-md-5 col-lg-4 py-8 py-md-11">

            <!-- Heading -->
            <h1 class="mb-0 fw-bold text-center">
              Sign up
            </h1>

            <!-- Text -->
            <p class="mb-6 text-center text-muted">
              Simplify your workflow in minutes.
            </p>

            <!-- Form -->
            <form class="mb-6">

              <!-- Email -->
              <div class="form-group">
                <label class="form-label" for="email">
                  Email Address
                </label>
                <input type="email" method="POST" class="form-control" id="email" placeholder="name@address.com" name="email">
              </div>

              <!-- Password -->
              <div class="form-group mb-5">
                <label class="form-label" for="password">
                  Password
                </label>
                <input type="password" method="POST" class="form-control" id="password" placeholder="Enter your password" name="pass">
              </div>

              <!-- Submit -->
              <button class="btn w-100 btn-primary" type="submit" name="signup">
                Sign up
              </button>

            </form>

            <!-- Text -->
            <p class="mb-0 fs-sm text-center text-muted">
              Already have an account? <a href="signin.php">Log in</a>.
            </p>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

    <!-- JAVASCRIPT -->
    <!-- Map JS -->
    <script src='../api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js'></script>
    
    <!-- Vendor JS -->
    <script src="assets/js/vendor.bundle.js"></script>
    
    <!-- Theme JS -->
    <script src="assets/js/theme.bundle.js"></script>

  </body>

<!-- Mirrored from landkit.goodthemes.co/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Jun 2022 08:07:48 GMT -->
</html>
