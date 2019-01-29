<?php
error_reporting(0);
include("includes/db_connection.php");

include("includes/session.php");
if(isset($_SESSION["role"])){
    redirect("index.php");
}
?>





<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <meta name="description" content="ranjan chemistry classes">
  <meta name="keywords" content="ranjan chemistry classes">
  <title>Nisroch Chemicals</title>

  <!-- Favicons-->
 <link href="../assets/img/logo.png" rel="shortcut icon" type="image/vnd.microsoft.icon"/>
  <!-- Favicons-->
 
  <!-- For iPhone -->
  
  <!-- For Windows Phone -->


  <!-- CORE CSS-->
  
  <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->    
    <link href="css/custom/custom.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="css/layouts/page-center.css" type="text/css" rel="stylesheet" media="screen,projection">

  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="js/plugins/prism/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
  
</head>

<body class="cyan" style="background: url('../assets/img/slider/bg.jpg');  height: 100%;background-position: center; background-repeat: no-repeat; background-size: cover;">
  <!-- Start Page Loading -->
  <div id="loader-wrapper">
      <div id="loader"></div>        
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->



  <div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">
        <form class="login-form" action="loginprocess.php" method="post">
        <div class="row">
          <div class="input-field col s12 center">
              <h4 style="color: #e30016;"></h4>
             
              <img src="../assets/img/logo.png" alt="" class="responsive-img valign profile-image-login">
          
          </div>
        </div>
          <?php if(isset($_SESSION["errormsg"])) {echo $_SESSION["errormsg"]; }?> 
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input id="username" type="text" name="username" required>
            <label for="username" class="center-align">Username</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input id="password" type="password" name="password" required>
            <label for="password">Password</label>
          </div>
        </div>
        
        <div class="row">
          <div class="input-field col s12">
              <button type="submit" name="submit" class="btn waves-effect waves-light col s12">Login</button>
          </div>
        </div>
        

      </form>
    </div>
  </div>



  <!-- ================================================
    Scripts
    ================================================ -->

  <!-- jQuery Library -->
  <script type="text/javascript" src="js/plugins/jquery-1.11.2.min.js"></script>
  <!--materialize js-->
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <!--prism-->
  <script type="text/javascript" src="js/plugins/prism/prism.js"></script>
  <!--scrollbar-->
  <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

      <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.min.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="js/custom-script.js"></script>

</body>


<!-- Mirrored from demo.geekslabs.com/materialize-v1.0/user-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Jan 2018 11:50:00 GMT -->
</html>