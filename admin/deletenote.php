<?php
include("includes/db_connection.php");
$id=$_REQUEST['id'];
$sql=mysqli_query($conn,"delete from welcome where id='$id'");
if($sql){
    ?>
<script>
    alert('delete paragraph!');
    window.location.href='welcome.php';
    </script>
<?php
}

?>