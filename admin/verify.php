<?php
include("connection.php");
$id=$_REQUEST['id'];
$sql=$con->prepare("update testimonial set status='1' where id=:id");
$sql->bindparam(':id', $id);
$sql->execute();
if($sql){
    ?>
<script>
    alert('verify successfully!');
    window.location.href='testimonal.php';
    </script>
<?php
}

?>