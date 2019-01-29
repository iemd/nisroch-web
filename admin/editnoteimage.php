<?php include'header.php';?>

<?php
if(isset($_POST["update"])){
   
    $name = $_FILES["image"]["name"];
		$tmp = $_FILES["image"]["tmp_name"];
		$type = $_FILES["image"]["type"];
		$size = $_FILES["image"]["size"];
                
                $upload_dir = "images/welcome/";
			$pre = time();
			$name = $pre."_".basename($name);
			$image = $upload_dir.$name;
                        move_uploaded_file($tmp, $image);
                         $id=$_REQUEST['id'];
                        $sql="update welcome set image='$image' where id='$id'";
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
 <section id="content">

        <!--breadcrumbs start-->
        <div id="breadcrumbs-wrapper">
            <!-- Search for small screen -->
           
          <div class="container">
            <div class="row">
              <div class="col s12 m12 l12">
                <h5 class="breadcrumbs-title">Welcome Note</h5>
                <ol class="breadcrumbs">
                  <li><a href="index.php">Dashboard</a>
                  </li>
                  <li><a href="#">Welcome Note</a>
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
                        <input type="file" name="image">
                      </div>
                      <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                        <p>image dimension: 442 x 400.</p>
                      </div>
                    </div>
                     
                    
                        <button class="btn cyan waves-effect waves-light" type="submit" name="update">Update
                                <i class="mdi-content-send right"></i>
                              </button>
            </form><br/>
            </div>
            
           
        </div>
        
        <?php include 'footer.php';?>