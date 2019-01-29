<?php
include("includes/db_connection.php");
$id=$_REQUEST['id'];
$sql=mysqli_query($conn,"delete from testimonial where id='$id'");
if($sql){
    ?>
<script>
    alert('delete testimonail!');
    window.location.href='testimonal.php';
    </script>
<?php
}

?>