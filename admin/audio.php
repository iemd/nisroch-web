<?php include'header.php';?>
<?php
   
    if(isset($_POST["submit"])){
    
    $title=$_POST['title'];
   
    $name = $_FILES["image"]["name"];
		$tmp = $_FILES["image"]["tmp_name"];
		
                 
                
                $upload_dir = "images/audio/";
			$pre = time();
			$name = $pre. $_FILES['image']['name'];

			$image = $upload_dir.$name;
                        move_uploaded_file($tmp, $image);
                        
    
	
        
	
	// Check Name is available or not 
	
			$insert = "INSERT INTO audio(title,mp3) VALUES ('$title','$image')";
                        $res=mysqli_query($conn,$insert);
                        if($res){
                            ?>
<script>
    alert('mp3 inserted successfully!');
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
                <h5 class="breadcrumbs-title">Audio/Mp3</h5>
                <ol class="breadcrumbs">
                  <li><a href="index.php">Dashboard</a>
                  </li>
                  <li><a href="#">Audio/Mp3</a>
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
                        <input id="notice" type="text" name="title" class="validate">
                          <label for="notice">Title</label>
                        </div>
                 <div class="file-field input-field">
                        <div class="btn">
                          <span>File</span>
                          <input type="file" name="image" multiple>
                        </div>
                      
                        <div class="file-path-wrapper">
                          <input class="file-path validate" type="text" placeholder="Upload one files">
                          <p>audio/mp3 file: maximum 8 mb.</p>
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
                                <th>Title</th>
                                 <th>audio/mp3</th>
                                  <th>Action</th>
                            </tr>
                            <?php
                            $count=1;
                            $sql=mysqli_query($conn,"select * from audio");
                            while($rows=mysqli_fetch_assoc($sql)){
                            ?>
                            <tr>
                                <td><?php echo $count++;?></td>
                                 <td><?php echo $rows['title']; ?></td>  
                                <td> <audio controls>
                        <source src="<?php echo $rows['mp3'];?>" type="audio/mpeg">
                    </audio></td>  
                                <td><a href="deleteaudio.php?id=<?php echo $rows['id'];?>"><i class="fa fa-trash fa-2x"></i></a></td>
                            </tr>
                           <?php }?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
        <?php include 'footer.php';?>