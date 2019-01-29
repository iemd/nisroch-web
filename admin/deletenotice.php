<?php
include("includes/db_connection.php");
$id=$_REQUEST['id'];
$sql=mysqli_query($conn,"delete from notice where id='$id'");
if($sql){
    ?>
<script>
    alert('delete notice!');
    window.location.href='notice.php';
    </script>
<?php
}

?>