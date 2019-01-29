<?php include("connection.php");
 error_reporting(0);
if(isset($_POST["submit"])){
     
    $name = $_FILES["image"]["name"];
		$tmp = $_FILES["image"]["tmp_name"];
		$type = $_FILES["image"]["type"];
		$size = $_FILES["image"]["size"];
                
                $upload_dir = "images/slider/";
                $imgExt = strtolower(pathinfo($name,PATHINFO_EXTENSION));
                $valid_extensions = array('jpeg', 'jpg', 'png', 'gif');
                if(in_array($imgExt, $valid_extensions)){
			$pre = time();
			$name = $pre."_".basename($name);
			$image = $upload_dir.$name;
                        move_uploaded_file($tmp, $image);
                        
                     $title=$_POST['title'];
                     $name=$_POST['name'];
                     $detail=$_POST['detail'];
                         
                        $sql=$con->prepare("insert into slider1(image,title,name,detail)values(:image,:title,:name,:detail)");
                        $sql->bindparam(':image', $image);
                         $sql->bindparam(':title', $title);
                          $sql->bindparam(':name', $name);
                           $sql->bindparam(':detail', $detail);
                        $res=$sql->execute();
                        if($res)
                        {
                        ?>
<script>
    alert('Slider image uploaded successfully!');
    window.location.href='slider.php';
    </script>


<?php
                        }
                         }
                else{ ?>
<script>
    alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed!');
     window.location.href='slider.php';
</script>
                    
                
               <?php } 
                        
}
    
?>