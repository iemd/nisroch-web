<?php
include("includes/db_connection.php");
$id=$_REQUEST['id'];
$sql=mysqli_query($conn,"delete from download where id='$id'");
if($sql){
    ?>
<script>
    alert('deleted file!');
    window.location.href='download.php';
    </script>
<?php
}

?>