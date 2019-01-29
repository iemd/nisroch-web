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
	$title=$_POST['title'];
        $date=$_POST['date'];
        $month=$_POST['month'];
        $detail=$_POST['detail'];
        
			$insert = "INSERT INTO awards(image,title,date,month,detail) VALUES ('$image','$title','$date','$month','$detail')";
                        $res=mysqli_query($conn,$insert);
                        if($res){
                            ?>
<script>
    alert('awards added successfully!');
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
                <h5 class="breadcrumbs-title">Awards And Honours</h5>
                <ol class="breadcrumbs">
                  <li><a href="index.php">Dashboard</a>
                  </li>
                  <li><a href="#">Awards And Honours</a>
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
                          <label for="notice">Awards Title</label>
                        </div>
                <br/>
                  <div class="input-field col s12">
                        <input id="notice" type="text" name="date" class="validate">
                          <label for="notice">Date</label>
                        </div>
                <br/>
                <div class="input-field col s12">
                        <input id="notice" type="text" name="month" class="validate">
                          <label for="notice">Month</label>
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
                          <p>image dimension:370 x 260</p>
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
                                 <th>Date</th>
                                 <th>Month</th>
                                 <th>Detail</th>
                                 <th>Image</th>
                                  <th>Action</th>
                            </tr>
                            <?php
                            $count=1;
                            $sql=mysqli_query($conn,"select * from awards");
                            while($rows=mysqli_fetch_assoc($sql)){
                            ?>
                            <tr>
                                <td><?php echo $count++;?></td> 
                                <td><?php echo $rows['title'];?></td>
                                 <td><?php echo $rows['date'];?></td>
                                  <td><?php echo $rows['month'];?></td>
                                  <td style="width:20%;"><?php echo $rows['detail'];?></td>
                                <td><img src="<?php echo $rows['image'];?>" width="120" height="120" /></td>  
                                <td><a href="deleteawards.php?id=<?php echo $rows['id'];?>"><i class="fa fa-trash fa-2x"></i></a></td>
                            </tr>
                           <?php }?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
        <?php include 'footer.php';?>