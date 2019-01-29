<?php
include("includes/db_connection.php");
$id=$_REQUEST['id'];
$sql=mysqli_query($conn,"delete from reply where id='$id'");
if($sql){
    ?>
<script>
    alert('delete reply items!');
    window.location.href='reply.php';
    </script>
<?php
}

?>