<?php
include("includes/db_connection.php");
$id=$_REQUEST['id'];
$sql=mysqli_query($conn,"delete from audio where id='$id'");
if($sql){
    ?>
<script>
    alert('deleted mp3 file!');
    window.location.href='audio.php';
    </script>
<?php
}

?>