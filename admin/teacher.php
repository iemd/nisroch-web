<?php include'header.php';?>
<?php
   
    if(isset($_POST["submit"])){
    
   // small images
    
    $name = $_FILES["image"]["name"];
		$tmp = $_FILES["image"]["tmp_name"];
		
                 
                
                $upload_dir = "images/teacher/";
			$pre = time();
			$name = $pre. $_FILES['image']['name'];

			$image = $upload_dir.$name;
                        move_uploaded_file($tmp, $image);
                        
    
	
	
	// Check Name is available or not 
	$name=$_POST['name'];
        $post=$_POST['post'];
			$insert = "INSERT INTO teacher(image,name,post) VALUES ('$image','$name','$post')";
                        $res=mysqli_query($conn,$insert);
                        if($res){
                            ?>
<script>
    alert('Teacher detail successfully!');
</script>

<?php
                        }
			
			

    }

?>

 <section id="content">

        <!--breadcrumbs start-->
        <div id="breadcrumbs-wrapper">
            <!-- Search for small screen -->
           
          <div class="container">
            <div class="row">
              <div class="col s12 m12 l12">
                <h5 class="breadcrumbs-title">Our Students Captains</h5>
                <ol class="breadcrumbs">
                  <li><a href="index.php">Dashboard</a>
                  </li>
                  <li><a href="#">Our Students Captains</a>
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
                 <div class="input-field col s12">
                        <input id="notice" type="text" name="name" class="validate">
                          <label for="notice">Name</label>
                        </div>
                <div class="input-field col s12">
                        <input id="notice" type="text" name="post" class="validate">
                          <label for="notice">Post Name</label>
                        </div>
                 <div class="file-field input-field">
                        <div class="btn">
                          <span>File</span>
                          <input type="file" name="image" multiple>
                        </div>
                        <div class="file-path-wrapper">
                          <input class="file-path validate" type="text" placeholder="Upload Image files">
                          <p>image dimension:300 x 300</p>
                        </div>
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
                                <th>Name</th>
                                 <th>Post</th>
                                 <th>Images</th>
                                  <th>Action</th>
                            </tr>
                            <?php
                            $count=1;
                            $sql=mysqli_query($conn,"select * from teacher");
                            while($rows=mysqli_fetch_assoc($sql)){
                            ?>
                            <tr>
                                <td><?php echo $count++;?></td> 
                                <td><?php echo $rows['name'];?></td>
                                <td><?php echo $rows['post'];?></td>  
                                 <td><img src="<?php echo $rows['image'];?>" width="100" height="100" /></td> 
                                <td><a href="deleteteacher.php?id=<?php echo $rows['id'];?>"><i class="fa fa-trash fa-2x"></i></a></td>
                            </tr>
                           <?php }?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
        <?php include 'footer.php';?>