<?php
include("includes/db_connection.php");

if(isset($_POST["update"])){
   
    $name = $_FILES["image"]["name"];
		$tmp = $_FILES["image"]["tmp_name"];
		$type = $_FILES["image"]["type"];
		$size = $_FILES["image"]["size"];
                
                $upload_dir = "images/slider/";
			$pre = time();
			$name = $pre."_".basename($name);
			$image = $upload_dir.$name;
                        move_uploaded_file($tmp, $image);
                         $id=$_REQUIRED['id'];
                        $sql="update slider set image='$image' where id='$id'";
                        $res=mysqli_query($conn,$sql);
                        if($res)
                        {
                        ?>
<script>
    alert('image uploaded successfully!');
    window.location.href='slider.php';
    </script>


<?php
                        }
}
    
?>