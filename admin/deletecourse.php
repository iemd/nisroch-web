<?php
include("includes/db_connection.php");
$id=$_REQUEST['id'];
$sql=mysqli_query($conn,"delete from course where id='$id'");
if($sql){
    ?>
<script>
    alert('delete courses!');
    window.location.href='course.php';
    </script>
<?php
}

?>