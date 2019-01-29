<?php
include("includes/db_connection.php");
$id=$_REQUEST['id'];
$sql=mysqli_query($conn,"delete from team where id='$id'");
if($sql){
    ?>
<script>
    alert('delete team!');
    window.location.href='team.php';
    </script>
<?php
}

?>