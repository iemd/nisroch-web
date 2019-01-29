<?php
$conn = mysqli_connect("localhost", "root", "", "nisroch");
if(mysqli_errno($conn)){
    die("Error in Database Connection: ".mysqli_connect_error()."and".mysqli_error($conn));
}


