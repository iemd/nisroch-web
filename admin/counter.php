<?php include'header.php'; error_reporting(0);?>
<?php
   include 'connection.php'; 
    if(isset($_POST["submit"])){
    
   // small images
    
   
                        
     
	
	// Check Name is available or not 
	$work=$_POST['work'];
        $awards=$_POST['awards'];
        $happy=$_POST['happy'];
        $dealers=$_POST['dealers'];
        
			$insert = $con->prepare("INSERT INTO periodic(work,awards,happy_client,dealers) VALUES (:work,:awards,:happy,:dealers)");
			$insert->bindparam(':work', $work);
			$insert->bindparam(':awards', $awards);
			$insert->bindparam(':happy', $happy);
			$insert->bindparam(':dealers', $dealers);
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
                <h5 class="breadcrumbs-title">Counter</h5>
                <ol class="breadcrumbs">
                  <li><a href="index.php">Dashboard</a>
                  </li>
                  <li><a href="#">Counter</a>
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
                        <input id="notice" type="text" name="work" class="validate">
                          <label for="notice">Hours Of Work</label>
                        </div><br/>
                        <div class="input-field col s12">
                        <input id="notice" type="text" name="awards" class="validate">
                          <label for="notice">Awards</label>
                        </div><br/>
                     <div class="input-field col s12">
                   <input id="notice" type="text" name="happy" class="validate">
                          <label for="notice">Happy Clients</label>
                        </div><br/>
                        <div class="input-field col s12">
                        <input id="notice" type="text" name="dealers" class="validate">
                          <label for="notice">Dealers</label>
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
                                
                                 <th>Hours Of Work</th>
                                 <th>Awards</th>
                                 <th>Happy Clients</th>
                                  <th>Dealers</th>
                                  <th>Action</th>
                            </tr>
                            <?php
                            $count=1;
                            $sql=$con->prepare("select * from periodic");
							$sql->execute();
                            while($rows=$sql->fetch(PDO::FETCH_ASSOC)){
                            ?>
                            <tr>
                                <td><?php echo $count++;?></td> 
                                <td><?php echo $rows['work'];?></td>
                                <td><?php echo $rows['awards'];?></td>
                                <td><?php echo $rows['happy_client'];?></td> 
                                <td><?php echo $rows['dealers'];?></td> 
                                <td><a href="deletecounter.php?id=<?php echo $rows['id'];?>"><i class="fa fa-trash fa-2x"></i></a>&nbsp;&nbsp;&nbsp;<a href="editcounter.php?id=<?php echo $rows['id'];?>"><i class="fa fa-edit fa-2x"></i></a></td>
                            </tr>
                           <?php }?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
        <?php include 'footer.php';?>