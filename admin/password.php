<?php include'header.php';?>
 
<?php
if(isset($_POST['add'])){
$user=$_POST['user'];
$password=md5($_POST['password']);
 $role=$_SESSION['role'];
                        $sql=mysqli_query($conn,"select * from login where role='$role'");
                        $rr=mysqli_fetch_assoc($sql);
                        $name=$rr['username'];
$sql=mysqli_query($conn,"update login set username='$user',password='$password' where username='$name'");
if($sql){
    ?>
<script>
    alert(' successfully!');
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
                <h5 class="breadcrumbs-title">Password change</h5>
                <ol class="breadcrumbs">
                  <li><a href="index.php">Dashboard</a>
                  </li>
                  <li><a href="#">Password Change</a>
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
               $q=mysqli_query($conn,"select * from login");
               $row=mysqli_fetch_assoc($q);
               
               ?>
                    <div class="input-field col s12">
                        <input id="notice" type="text" name="user" value="<?php echo $row['username'];?>">
                          <label for="notice">UserName</label>
                        </div>
                <div class="input-field col s12">
                        <input id="notice" type="password" name="password" class="validate">
                          <label for="notice">Password</label>
                        </div>
                    <br/>
                        <button class="btn cyan waves-effect waves-light" type="submit" name="add">Change
                                <i class="mdi-content-send right"></i>
                              </button>
            </form><br/>
            </div>
            <div class="divider"></div>
            
        </div>
        
        <?php include 'footer.php';?>