<?php include'header.php';?>
<?php
   
    if(isset($_POST["submit"])){
    
   // small images
     $id=$_REQUEST['id'];
     
    $name = $_FILES["image"]["name"];
		$tmp = $_FILES["image"]["tmp_name"];
		
                 
                
                $upload_dir = "images/gallary/";
			$pre = time();
			$name = $pre. $_FILES['image']['name'];

			$image = $upload_dir.$name;
                        move_uploaded_file($tmp, $image);
                        
    
	
	
	// Check Name is available or not 
	
        
			$insert = "update news set image='$image' where id='$id'";
                        $res=mysqli_query($conn,$insert);
                        if($res){
                            ?>
<script>
    alert('update successfully!');
     window.location.href='news.php';
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
                <h5 class="breadcrumbs-title">Edit News Image</h5>
                <ol class="breadcrumbs">
                  <li><a href="index.php">Dashboard</a>
                  </li>
                  <li><a href="#">Edit News Image</a>
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
               
                 <div class="file-field input-field">
                        <div class="btn">
                          <span>File</span>
                          <input type="file" name="image" multiple>
                        </div>
                        <div class="file-path-wrapper">
                          <input class="file-path validate" type="text" placeholder="Upload Image files">
                          <p>image dimension:370 x 260</p>
                        </div>
                      </div><br/>
                      
                   
                        <button class="btn cyan waves-effect waves-light" type="submit" name="submit">Update
                                <i class="mdi-content-send right"></i>
                              </button>
            </form><br/>
            </div>
            <div class="divider"></div>
            
        </div>
        
        <?php include 'footer.php';?>