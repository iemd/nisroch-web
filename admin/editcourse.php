<?php include'header.php';?>
<?php
   
    if(isset($_POST["submit"])){
    
   // small images
    
    $id=$_REQUEST['id'];
                        
    
	
	
	// Check Name is available or not 
	$name=$_POST['name'];
        $age=$_POST['age'];
        $time=$_POST['time'];
        $detail=$_POST['detail'];
        
			$insert = "update course set name='$name',age='$age',time='$time',detail='$detail' where id='$id'";
                        $res=mysqli_query($conn,$insert);
                        if($res){
                            ?>
<script>
    alert('update successfully!');
    window.location.href='course.php';
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
                <h5 class="breadcrumbs-title">Edit Courses</h5>
                <ol class="breadcrumbs">
                  <li><a href="index.php">Dashboard</a>
                  </li>
                  <li><a href="#">Edit Courses</a>
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
                <?php
                
                 $id=$_REQUEST['id'];
                 
                 $sql=mysqli_query($conn,"select * from course where id='$id'");
                 $res= mysqli_fetch_assoc($sql);
                
                ?>
                <div class="input-field col s12">
                    <input id="notice" type="text" name="name" class="validate" value="<?php echo $res['name'];?>">
                          <label for="notice">Course Name</label>
                        </div>
                <br/>
                  <div class="input-field col s12">
                        <input id="notice" type="text" name="age" class="validate" value="<?php echo $res['age'];?>">
                          <label for="notice">Age</label>
                        </div>
                <br/>
                <div class="input-field col s12">
                        <input id="notice" type="text" name="time" class="validate" value="<?php echo $res['time'];?>">
                          <label for="notice">Time</label>
                        </div>
                <br/>
                <div class="input-field col s12">
                         <textarea id="textarea1" name="detail" class="materialize-textarea"><?php echo $res['detail'];?></textarea>
                          <label for="textarea1">Detail</label>
                        </div>
                <br/>
                 
                      
                   
                        <button class="btn cyan waves-effect waves-light" type="submit" name="submit">Update
                                <i class="mdi-content-send right"></i>
                              </button>
            </form><br/>
            </div>
            <div class="divider"></div>
           
        </div>
        
        <?php include 'footer.php';?>