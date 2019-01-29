<?php
include("connection.php");
$id=$_REQUEST['id'];
$sql=$con->prepare("delete from periodic where id=:id");
$sql->bindparam(':id', $id);
$sql->execute();
if($sql){
    ?>
<script>
    alert('deleted counter data!');
    window.location.href='counter.php';
    </script>
<?php
}

?>