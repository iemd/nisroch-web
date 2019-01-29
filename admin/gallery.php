<?php include'header.php'; ?>
<?php
 include 'connection.php';
    if(isset($_POST["submit"])){
    
   // small images
    
    $name = $_FILES["image"]["name"];
		$tmp = $_FILES["image"]["tmp_name"];
		list($width, $height) = getimagesize($tmp);
                
                
                
                $upload_dir = "images/gallary/";
                 $imgExt = strtolower(pathinfo($name,PATHINFO_EXTENSION));
                $valid_extensions = array('jpeg', 'jpg', 'png', 'gif');
                if(in_array($imgExt, $valid_extensions)){
                    if($width=="370" && $height=="400" ){
			$pre = time();
			$name = $pre. $_FILES['image']['name'];

			$image = $upload_dir.$name;
                        move_uploaded_file($tmp, $image);
                        
   
	
	$class=$_POST['class'];
        $name=$_POST['name'];
        $detail=$_POST['detail'];
			$insert =$con->prepare("INSERT INTO gallery(image,class,name) VALUES (:image,:class,:name)");
                        $insert->bindparam(':image', $image);
                         $insert->bindparam(':class', $class);
                          $insert->bindparam(':name', $name);
                         
                         $sql= $insert->execute();
						 
                         }
                else{ ?>
                    <script>
                        alert('please upload image dimension 370px x 400px!');
    
</script>
              <?php  }   }
             
                else { ?>
<script>
    alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed!');
</script>
                    
                
               <?php } 
                
                        

				   }

?>

 <section id="content">

        <!--breadcrumbs start-->
        <div id="breadcrumbs-wrapper">
            <!-- Search for small screen -->
           
          <div class="container">
            <div class="row">
              <div class="col s12 m12 l12">
                <h5 class="breadcrumbs-title">Gallery</h5>
                <ol class="breadcrumbs">
                  <li><a href="index.php">Dashboard</a>
                  </li>
                  <li><a href="#">Gallery</a>
                  </li>
                 
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!--breadcrumbs end-->
        <style>
            i{
                color:#00bcd4;
            }
        </style>

        <!--start container-->
        <div class="container">
            <div class="col-md-8">
            <form action="" method="post" enctype="multipart/form-data">
                <label>Image Classes</label>
  <select class="browser-default" name="class">
    <option value="" disabled selected>Choose Image category</option>
    <option value="INSECTICIDES">INSECTICIDES</option>
    <option value="FUNGICIDES">FUNGICIDES</option>
    <option value="HERBICIDES">HERBICIDES</option>
     <option value="ANTIBIOTICS">ANTIBIOTICS</option>
      <option value="PLANTGROWTH">PLANTGROWTH</option>
  </select><br/>
                 
                 <div class="file-field input-field">
                        <div class="btn">
                          <span>File</span>
                          <input type="file" name="image" multiple>
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" placeholder="Upload small Image files" required="">
                          <p>image dimension:370px x 400px</p>
                        </div>
                      </div><br/>
                      <div class="input-field col s12">
                        <input id="notice" type="text" name="name" class="validate">
                          <label for="notice">Name</label>
                        </div><br/>
                        
                   
                        <button class="btn cyan waves-effect waves-light" type="submit" name="submit">Submit
                                <i class="mdi-content-send right"></i>
                              </button>
            </form><br/>
            </div>
            <div class="divider"></div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th>Serial No</th>
                                <th>Image Classes</th>
                                 <th>Images</th>
                                 <th>Name</th>
                                 
                                  <th>Action</th>
                            </tr>
                            <?php
                            $count=1;
                            $sql=$con->prepare("select * from gallery");
							$sql->execute();
                            while($rows=$sql->fetch(PDO::FETCH_ASSOC)){
                            ?>
                            <tr>
                                <td><?php echo $count++;?></td> 
                                <td><?php echo $rows['class'];?></td>
                                <td><img src="<?php echo $rows['image'];?>" width="120" height="130" /></td>  
                                <td><?php echo $rows['name'];?></td>
                                
                               
                                <td><a href="deletegallery.php?id=<?php echo $rows['id'];?>"><i class="fa fa-trash fa-2x"></i></a></td>
                            </tr>
                           <?php }?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
        <?php include 'footer.php';?>