<?php
error_reporting(0);
include("connection.php");
include("includes/functions.php");
include("includes/session.php");
if(isset($_POST["submit"])){
   $username = trim(stripslashes($_POST['username']));
   $password = trim(stripslashes($_POST['password']));
   $hashpassword = md5($password);
   //echo $username." " .$hashpassword;
   $sql = $con->prepare("SELECT * FROM login WHERE username =:username AND password =:hashpassword LIMIT 1 ");
   $sql->bindparam(':username', $username);
   $sql->bindparam(':hashpassword', $hashpassword);
   $sql->execute();
   $count1=$sql->rowCount();
   //$result = mysqli_query($conn, $sql) or die("Error in Login Query: ".mysqli_error($conn));
   if($count1 == 1){
	  $row = $sql->fetch();
	  $role = $row["role"];
	  $_SESSION["role"] = $role;
	   redirect("index.php");
	   }
	   else {
		   $_SESSION["errormsg"] = "Username or Password is wrong! Please Try Again";
		   redirect("login.php");
		   }
}

