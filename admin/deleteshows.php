<?php
include("includes/db_connection.php");
$id=$_REQUEST['id'];
$sql=mysqli_query($conn,"delete from shows where id='$id'");
if($sql){
    ?>
<script>
    alert('deleted image!');
    window.location.href='shows.php';
    </script>
<?php
}

?>