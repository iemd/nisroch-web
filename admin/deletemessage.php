<?php
include("includes/db_connection.php");
$id=$_REQUEST['id'];
$sql=mysqli_query($conn,"delete from flash where id='$id'");
if($sql){
    ?>
<script>
    alert('delete message!');
    window.location.href='message.php';
    </script>
<?php
}

?>