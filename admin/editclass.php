<?php
include("includes/db_connection.php");

if(isset($_POST['update'])){
    
  $id=$_REQUEST['id'];
  $course=$_POST['course'];
  $eligibility=$_POST['eligibility'];
  $duration=$_POST['duration'];

$sql=mysqli_query($conn,"update class set course='$course',eligibility='$eligibility',duration='$duration' where id='$id'");
if($sql){
    ?>
<script>
    alert('update classes successfully!');
    window.location.href='class.php';
    </script>

<?php
}
}


?>