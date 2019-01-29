<?php
include("includes/db_connection.php");
$id=$_REQUEST['id'];
$sql=mysqli_query($conn,"delete from reply_message where id='$id'");
if($sql){
    ?>
<script>
    alert('delete reply message!');
    window.location.href='replym.php';
    </script>
<?php
}

?>