<?php include'header.php';?>
<?php
   
    if(isset($_POST["submit"])){
    
   // small images
    
    $id=$_REQUEST['id'];
                        
    
	
	
	// Check Name is available or not 
	$title=$_POST['title'];
        $date=$_POST['date'];
        $month=$_POST['month'];
        $detail=$_POST['detail'];
        
			$insert = "update news set title='$title',date='$date',month='$month',detail='$detail' where id='$id'";
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
                <h5 class="breadcrumbs-title">Edit News</h5>
                <ol class="breadcrumbs">
                  <li><a href="index.php">Dashboard</a>
                  </li>
                  <li><a href="#">Edit News</a>
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
                 
                 $sql=mysqli_query($conn,"select * from news where id='$id'");
                 $res= mysqli_fetch_assoc($sql);
                
                ?>
                <div class="input-field col s12">
                    <input id="notice" type="text" name="title" class="validate" value="<?php echo $res['title'];?>">
                          <label for="notice">News Title</label>
                        </div>
                <br/>
                  <div class="input-field col s12">
                        <input id="notice" type="text" name="date" class="validate" value="<?php echo $res['date'];?>">
                          <label for="notice">Date</label>
                        </div>
                <br/>
                <div class="input-field col s12">
                        <input id="notice" type="text" name="month" class="validate" value="<?php echo $res['month'];?>">
                          <label for="notice">Month</label>
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