<?php include("includes/db_connection.php");

if(isset($_POST["submit"])){
    $fparagraph=$_POST['fparagraph'];
    $sparagraph=$_POST['sparagraph'];
    $name = $_FILES["image"]["name"];
		$tmp = $_FILES["image"]["tmp_name"];
		$type = $_FILES["image"]["type"];
		$size = $_FILES["image"]["size"];
                
                $upload_dir = "images/welcome/";
			$pre = time();
			$name = $pre."_".basename($name);
			$image = $upload_dir.$name;
                        move_uploaded_file($tmp, $image);
                        
                        $sql="insert into welcome(image,f_paragraph,s_paragraph)values('$image','$fparagraph','$sparagraph')";
                        $res=mysqli_query($conn,$sql);
                        if($res)
                        {
                        ?>
<script>
    alert('image uploaded successfully!');
    window.location.href='welcome.php';
    </script>


<?php
                        }
}
    
?>