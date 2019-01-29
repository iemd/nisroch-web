<?php include'header.php';?>
<?php
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
                         $id=$_REQUEST['id'];
                        $sql="update slider1 set image='$image' where id='$id'";
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
 <section id="content">

        <!--breadcrumbs start-->
        <div id="breadcrumbs-wrapper">
            <!-- Search for small screen -->
           
          <div class="container">
            <div class="row">
              <div class="col s12 m12 l12">
                <h5 class="breadcrumbs-title">Slider</h5>
                <ol class="breadcrumbs">
                  <li><a href="index.php">Dashboard</a>
                  </li>
                  <li><a href="#">Slider</a>
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
          
          <!--file-upload-->
          <div id="file-upload" class="section">
           
           
           
           
           
            <div class="row section">
              <div class="col s12 m4 l3">
                <p>Image Upload</p>
              </div>
              <div class="col s12 m8 l9">
                  <form action="" method="post" enctype="multipart/form-data">
                  <p>File Dimension: 1920 x 600.</p>
                  
                  <input type="file" name="image" id="input-file-max-fs" class="dropify" data-max-file-size="2M" /><br/>
                   <button class="btn cyan waves-effect waves-light" type="submit" name="update">Update
                                <i class="mdi-content-send right"></i>
                              </button>
                  </form>
              </div>
            </div>
            
            <!--remove button-->
            <div class="divider"></div>
            
            
            
          </div>
        
        </div>
        <!--end container-->

      </section>

<?php include 'footer.php';?>