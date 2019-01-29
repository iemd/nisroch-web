<?php
error_reporting(0);
include("includes/db_connection.php");
include("includes/functions.php");
include("includes/session.php");
if(!isset($_SESSION["role"])){
    redirect("login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <meta name="description" content="Chemistry classes, chemistry classes by ranjan singh">
  <meta name="keywords" content="Chemistry classes, chemistry classes by ranjan singh">
  <title>Nisroch Chemicals</title>

  <!-- Favicons-->
  <link href="../assets/img/logo.png" rel="shortcut icon" type="image/vnd.microsoft.icon"/>
  <!-- Favicons-->
  
  <!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
  <!-- For Windows Phone -->


  <!-- CORE CSS-->
  <link href="../assets//css/bootstrap.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->    
    <link href="css/custom/custom.min.css" type="text/css" rel="stylesheet" media="screen,projection">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="js/plugins/prism/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="js/plugins/dropify/css/dropify.min.css" type="text/css" rel="stylesheet" media="screen,projection">
</head>

<body>
  <!-- Start Page Loading -->
  <div id="loader-wrapper">
      <div id="loader"></div>        
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->

  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- START HEADER -->
  <header id="header" class="page-topbar">
        <!-- start header nav-->
        <div class="navbar-fixed">
            <nav class="navbar-color">
                <div class="nav-wrapper">
                    <ul class="left">                      
                        <li><a href="index.php" class="brand-logo darken-1"><img src="../assets/img/logo.png" alt="logo"></a></li>
                    </ul>
                   
                </div>
            </nav>
        </div>
        <!-- end header nav-->
  </header>
  <!-- END HEADER -->
  <style>
      i{
          color: #aad044;
      }
	  #content{
		  min-height:800px;
	  }
      </style>
  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- START MAIN -->
  <div id="main">
    <!-- START WRAPPER -->
    <div class="wrapper">

      <!-- START LEFT SIDEBAR NAV-->
      <aside id="left-sidebar-nav">
                <ul id="slide-out" class="side-nav fixed leftside-navigation">
                <li class="user-details cyan darken-2">
                <div class="row">
                    <div class="col col s4 m4 l4">
                        <img src="images/avatar.jpg" alt="" class="circle responsive-img valign profile-image">
                    </div>
                    <div class="col col s8 m8 l8">
                        
                        <?php
                        $role=$_SESSION['role'];
                        $sql=mysqli_query($conn,"select * from login where role='$role'");
                        $rr=mysqli_fetch_assoc($sql);
                        $name=$rr['username'];
                        ?>
                        <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown"><?php echo $name;?></a>
                        <p class="user-roal">Administrator</p>
                    </div>
                </div>
            </li>
                <li class="bold"><a href="index.php" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Dashboard</a>
                </li>
                <li class="bold"><a href="slider.php" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Slider</a>
                </li>
                  
                <li class="bold"><a href="productitem.php" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Product Items</a>
                </li>
                 <li class="bold"><a href="gallery.php" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Gallery</a>
                </li>
                <li class="bold"><a href="testimonal.php" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Testimonial</a>
                </li>
                  <li class="bold"><a href="counter.php" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Counter</a>
                </li>
                 <li class="bold"><a href="team.php" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Our Team</a>
                </li>
                <li class="bold"><a href="enquiry.php" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Enquiry</a>
                </li>
                 <li class="bold"><a href="book.php" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Book Now</a>
                </li>
                  <li class="bold"><a href="password.php" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Password Change</a>
                </li>
                <li class="bold"><a href="logout.php" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Logout</a>
                </li>
               
                <li class="li-hover"><div class="divider"></div></li>
               
            </ul>
                <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only cyan"><i class="mdi-navigation-menu"></i></a>
            </aside>