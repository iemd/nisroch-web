<?php
include("includes/db_connection.php");
$id=$_REQUEST['id'];
$sql=mysqli_query($conn,"delete from product where id='$id'");
if($sql){
    ?>
<script>
    alert('delete team!');
    window.location.href='productitem.php';
    </script>
<?php
}

?>