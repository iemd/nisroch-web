<?php include'header.php';?>
<?php
   
    if(isset($_POST["submit"])){
    
   // small images
    
   
                        
     
	
	// Check Name is available or not 
	$work=$_POST['work'];
        $awards=$_POST['awards'];
        $happy=$_POST['happy'];
        $dealers=$_POST['dealers'];
        $id1=$_REQUEST['id'];
        
			$insert = "update periodic set work='$work',awards='$awards',happy_client='$happy',dealers='$dealers' where id='$id1'";
                        $res=mysqli_query($conn,$insert);
                        if($res){
                            ?>
<script>
    alert('update successfully!');
	window.location.href='counter.php';
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
                <h5 class="breadcrumbs-title">Edit Counter</h5>
                <ol class="breadcrumbs">
                  <li><a href="index.php">Dashboard</a>
                  </li>
                  <li><a href="#">Edit Counter</a>
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
                
                $sql=mysqli_query($conn,"select * from periodic where id='$id'");
                $rs=mysqli_fetch_assoc($sql);
                
                ?>
                 
                
                       <div class="input-field col s12">
                           <input id="notice" type="text" name="work" value="<?php echo $rs['work'];?>" class="validate">
                          <label for="notice">Hours Of Work</label>
                        </div><br/>
                        <div class="input-field col s12">
                        <input id="notice" type="text" name="awards" value="<?php echo $rs['awards'];?>" class="validate">
                          <label for="notice">Awards</label>
                        </div><br/>
                     <div class="input-field col s12">
                   <input id="notice" type="text" name="happy" value="<?php echo $rs['happy_client'];?>" class="validate">
                          <label for="notice">Happy Clients</label>
                        </div><br/>
                        <div class="input-field col s12">
                        <input id="notice" type="text" name="dealers" value="<?php echo $rs['dealers'];?>" class="validate">
                          <label for="notice">Dealers</label>
                        </div><br/>
                        <button class="btn cyan waves-effect waves-light" type="submit" name="submit">Update
                                <i class="mdi-content-send right"></i>
                              </button>
            </form><br/>
            </div>
            <div class="divider"></div>
           
        </div>
        
        <?php include 'footer.php';?>