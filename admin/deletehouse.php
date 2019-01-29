<?php
include("includes/db_connection.php");
$id=$_REQUEST['id'];
$sql=mysqli_query($conn,"delete from house where id='$id'");
if($sql){
    ?>
<script>
    alert('delete house items!');
    window.location.href='house.php';
    </script>
<?php
}

?>