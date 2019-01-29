<?php
include("includes/db_connection.php");
$id=$_REQUEST['id'];
$sql=mysqli_query($conn,"delete from video where id='$id'");
if($sql){
    ?>
<script>
    alert('delete video!');
    window.location.href='video.php';
    </script>
<?php
}

?>