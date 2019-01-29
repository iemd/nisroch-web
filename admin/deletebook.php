<?php
include("includes/db_connection.php");
$id=$_REQUEST['id'];
$sql=mysqli_query($conn,"delete from book_now where id='$id'");
if($sql){
    ?>
<script>
    alert('delete items!');
    window.location.href='book.php';
    </script>
<?php
}

?>