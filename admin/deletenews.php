<?php
include("includes/db_connection.php");
$id=$_REQUEST['id'];
$sql=mysqli_query($conn,"delete from news where id='$id'");
if($sql){
    ?>
<script>
    alert('delete news items!');
    window.location.href='news.php';
    </script>
<?php
}

?>