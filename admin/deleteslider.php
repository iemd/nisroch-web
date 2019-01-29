<?php
include("includes/db_connection.php");
$id=$_REQUEST['id'];
$sql=mysqli_query($conn,"delete from slider1 where id='$id'");
if($sql){
    ?>
<script>
    alert('delete image!');
    window.location.href='slider.php';
    </script>
<?php
}

?>