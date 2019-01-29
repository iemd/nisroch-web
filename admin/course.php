<?php include'header.php';?>
<?php
   
    if(isset($_POST["submit"])){
    
   // small images
    
    $name = $_FILES["image"]["name"];
		$tmp = $_FILES["image"]["tmp_name"];
		
                 
                
                $upload_dir = "images/gallary/";
			$pre = time();
			$name = $pre. $_FILES['image']['name'];

			$image = $upload_dir.$name;
                        move_uploaded_file($tmp, $image);
                        
    
	
	
	// Check Name is available or not 
	$name=$_POST['name'];
        $age=$_POST['age'];
        $time=$_POST['time'];
        $detail=$_POST['detail'];
        
			$insert = "INSERT INTO course(image,name,age,time,detail) VALUES ('$image','$name','$age','$time','$detail')";
                        $res=mysqli_query($conn,$insert);
                        if($res){
                            ?>
<script>
    alert('courses inserted successfully!');
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
                <h5 class="breadcrumbs-title">Our Courses</h5>
                <ol class="breadcrumbs">
                  <li><a href="index.php">Dashboard</a>
                  </li>
                  <li><a href="#">Our Courses</a>
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
                          <label for="notice">Course Name</label>
                        </div>
                <br/>
                  <div class="input-field col s12">
                        <input id="notice" type="text" name="age" class="validate">
                          <label for="notice">Age</label>
                        </div>
                <br/>
                <div class="input-field col s12">
                        <input id="notice" type="text" name="time" class="validate">
                          <label for="notice">Time</label>
                        </div>
                <br/>
                <div class="input-field col s12">
                         <textarea id="textarea1" name="detail" class="materialize-textarea"></textarea>
                          <label for="textarea1">Detail</label>
                        </div>
                <br/>
                 <div class="file-field input-field">
                        <div class="btn">
                          <span>File</span>
                          <input type="file" name="image" multiple>
                        </div>
                        <div class="file-path-wrapper">
                          <input class="file-path validate" type="text" placeholder="Upload Image files">
                          <p>image dimension:270 x 230</p>
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
                                <th>Course Name</th>
                                 <th>Time</th>
                                 <th>Age</th>
                                 <th>Detail</th>
                                 <th>Image</th>
                                  <th>Action</th>
                            </tr>
                            <?php
                            $count=1;
                            $sql=mysqli_query($conn,"select * from course");
                            while($rows=mysqli_fetch_assoc($sql)){
                            ?>
                            <tr>
                                <td><?php echo $count++;?></td> 
                                <td><?php echo $rows['name'];?></td>
                                 <td><?php echo $rows['time'];?></td>
                                  <td><?php echo $rows['age'];?></td>
                                  <td style="width:20%;"><?php echo $rows['detail'];?></td>
                                <td><img src="<?php echo $rows['image'];?>" width="120" height="120" /></td>  
                                <td><a href="deletecourse.php?id=<?php echo $rows['id'];?>"><i class="fa fa-trash fa-2x"></i></a>&nbsp;&nbsp;<a href="editcourse.php?id=<?php echo $rows['id'];?>"><i class="fa fa-edit fa-2x"></i></a>&nbsp;&nbsp;<a href="editcourseimage.php?id=<?php echo $rows['id'];?>"><i class="fa fa-image fa-2x"></i></a></td>
                            </tr>
                           <?php }?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
        <?php include 'footer.php';?>