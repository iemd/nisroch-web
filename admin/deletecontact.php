<?php
include("includes/db_connection.php");
$id=$_REQUEST['id'];
$sql=mysqli_query($conn,"delete from contact where id='$id'");
if($sql){
    ?>
<script>
    alert('delete contact list!');
    window.location.href='enquiry.php';
    </script>
<?php
}

?>