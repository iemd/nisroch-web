<?php include'header.php';?>
<?php
   include 'connection.php';
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
        $post=$_POST['post'];
			$insert = $con->prepare("INSERT INTO team(image,name,post) VALUES (:image,:name,:post)");
			$insert->bindparam(':image', $image);
			$insert->bindparam(':name', $name);
			$insert->bindparam(':post', $post);
                        $res=$insert->execute();
                        if($res){
                            ?>
<script>
    alert('inserted successfully!');
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
                <h5 class="breadcrumbs-title">Our Team</h5>
                <ol class="breadcrumbs">
                  <li><a href="index.php">Dashboard</a>
                  </li>
                  <li><a href="#">Our Team</a>
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
                          <input class="file-path validate" type="text" placeholder="Upload small Image files">
                          <p>image dimension:270 x 352</p>
                        </div>
                      </div><br/>
                       <div class="input-field col s12">
                        <input id="notice" type="text" name="name" class="validate">
                          <label for="notice">Name</label>
                        </div><br/>
                        <div class="input-field col s12">
                        <input id="notice" type="text" name="post" class="validate">
                          <label for="notice">Designation</label>
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
                              
                                 <th>Images</th>
                                  <th>Name</th>
                                   <th>Designation</th>
                                  <th>Action</th>
                            </tr>
                            <?php
                            $count=1;
                            $sql=$con->prepare("select * from team");
							$sql->execute();
                            while($rows=$sql->fetch(PDO::FETCH_ASSOC)){
                            ?>
                            <tr>
                                <td><?php echo $count++;?></td> 
                               
                                <td><img src="<?php echo $rows['image'];?>" width="120" height="130" /></td>  
                                <td><span style="text-transform: uppercase"><?php echo $rows['name'];?></span></td>
                                <td><span style="text-transform: uppercase"><?php echo $rows['post'];?></span></td>
                                <td><a href="deleteteam.php?id=<?php echo $rows['id'];?>"><i class="fa fa-trash fa-2x"></i></a></td>
                            </tr>
                           <?php }?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
        <?php include 'footer.php';?>