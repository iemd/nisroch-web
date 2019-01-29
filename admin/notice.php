<?php include'header.php';?>
<?php
if(isset($_POST['add'])){
$notice=$_POST['notice'];

$sql=mysqli_query($conn,"insert into notice(notice)values('$notice')");
if($sql){
    ?>
<script>
    alert('notice added successfully!');
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
                <h5 class="breadcrumbs-title">Notice</h5>
                <ol class="breadcrumbs">
                  <li><a href="index.php">Dashboard</a>
                  </li>
                  <li><a href="#">Notice</a>
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
                        <input id="notice" type="text" name="notice" class="validate">
                          <label for="notice">Notice</label>
                        </div>
                    <br/>
                        <button class="btn cyan waves-effect waves-light" type="submit" name="add">Add
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
                                <th>Serial No</th><th>Notice</th><th>Action</th>
                            </tr>
                            <?php
                            $count=1;
                            $sql=mysqli_query($conn,"select * from notice");
                            while($rows=mysqli_fetch_assoc($sql)){
                            ?>
                            <tr>
                                            <td><?php echo $count++;?></td>
                                            <td><?php echo $rows['notice'];?></td>
                                            
                                            <td><a href="deletenotice.php?id=<?php echo $rows['id'];?>"><i class="fa fa-trash fa-2x"></i></a></td>                  
                                       
                            </tr>
                            
                          <?php  }?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
        <?php include 'footer.php';?>