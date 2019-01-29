<?php include'header.php';?>
<?php
   
    if(isset($_POST["submit"])){
    
   
	$category=$_POST['category'];
        $discipline=$_POST['discipline'];
        $homework=$_POST['homework'];
        $activities=$_POST['activities'];
        $speaking=$_POST['speaking'];
        $attendance=$_POST['attendance'];
        $total=$_POST['total'];
       
			$insert = "INSERT INTO house(category,discipline,homework,activities,speaking,attendance,total) VALUES ('$category','$discipline','$homework','$activities','$speaking','$attendance','$total')";
                        $res=mysqli_query($conn,$insert);
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
                <h5 class="breadcrumbs-title">House Contest</h5>
                <ol class="breadcrumbs">
                  <li><a href="index.php">Dashboard</a>
                  </li>
                  <li><a href="#">House Contest</a>
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
                <label>House Category</label>
  <select class="browser-default" name="category">
    <option value="" disabled selected>Choose House Category</option>
    <option value="Dexterous Dragon">Dexterous Dragon</option>
    <option value="Flawless Falcon">Flawless Falcon</option>
    <option value="Hilarious Hawk">Hilarious Hawk</option>
     <option value="Unerring Unicorn">Unerring Unicorn</option>
  </select><br/>
                 
                 <div class="input-field col s12">
                        <input id="notice" type="text" name="discipline" class="validate">
                          <label for="notice">Discipline</label>
                        </div><br/>
                      <div class="input-field col s12">
                        <input id="notice" type="text" name="homework" class="validate">
                          <label for="notice">Homework</label>
                        </div><br/>
                        
                        <div class="input-field col s12">
                        <input id="notice" type="text" name="activities" class="validate">
                          <label for="notice">Activities</label>
                        </div><br/>
                        <div class="input-field col s12">
                        <input id="notice" type="text" name="speaking" class="validate">
                          <label for="notice">Speaking</label>
                        </div><br/>
                         <div class="input-field col s12">
                        <input id="notice" type="text" name="attendance" class="validate">
                          <label for="notice">Attendance</label>
                        </div><br/>
                         <div class="input-field col s12">
                        <input id="notice" type="text" name="total" class="validate">
                          <label for="notice">Total</label>
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
                                <th>House Category</th>
                                 <th>Discipline</th>
                                 <th>Homework</th>
                                  <th>Activities</th>
                                   <th>Speaking</th>
                                    <th>Attendance</th>
                                     <th>Total</th>
                                  <th>Action</th>
                            </tr>
                            <?php
                            $count=1;
                            $sql=mysqli_query($conn,"select * from house");
                            while($rows=mysqli_fetch_assoc($sql)){
                            ?>
                            <tr>
                                <td><?php echo $count++;?></td> 
                                <td><?php echo $rows['category'];?></td>
                                <td><?php echo $rows['discipline'];?></td>  
                                 <td><?php echo $rows['homework'];?></td>
                                 <td><?php echo $rows['activities'];?></td> 
                                 <td><?php echo $rows['speaking'];?></td> 
                                 <td><?php echo $rows['attendance'];?></td> 
                                 <td><?php echo $rows['total'];?></td> 
                                 <td><a href="deletehouse.php?id=<?php echo $rows['id'];?>"><i class="fa fa-trash fa-2x"></i></a>&nbsp;&nbsp;<a href="edithouse.php?id=<?php echo $rows['id'];?>"><i class="fa fa-edit fa-2x"></i></a></td>
                            </tr>
                           <?php }?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
        <?php include 'footer.php';?>