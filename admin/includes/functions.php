<?php
function redirect($url){
	header("Location: ".htmlentities($url));
	exit;
	}
  
function Get_Date_Difference($start_date, $end_date)
    {
        $diff = abs(strtotime($end_date) - strtotime($start_date));
        $years = floor($diff / (365*60*60*24));
        $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
        
        return $months;
    }
 function getState(){
    global $conn;
    $sql = "SELECT * FROM state";
    $result = mysqli_query($conn, $sql) or die("Error in Selecting State Name Query: ".mysqli_error($conn));
    if(mysqli_num_rows($result) > 0){
        return $result;        
    }
    else {
        return false;
    }
}
function getCityNameByStateId($stateId){
    global $conn;
    $sql = "SELECT * FROM city WHERE state_id = '{$stateId}' ";
    $result = mysqli_query($conn, $sql) or die("Error in Selecting City Name By State Id: ".mysqli_error($conn));
    if(mysqli_num_rows($result) > 0){
        return $result;
    }
    else {
        return false;
    }
}

  