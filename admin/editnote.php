<?php include'header.php';?>
<?php
if(isset($_POST['update'])){
$id=$_REQUEST['id'];
$fparagraph=$_POST['fparagraph'];
$sparagraph=$_POST['sparagraph'];

$sql=mysqli_query($conn,"update welcome set f_paragraph='$fparagraph',s_paragraph='$sparagraph' where id='$id'");
if($sql){
    ?>
<script>
    alert('update paragraph successfully!');
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
                <?php
                $id=$_REQUEST['id'];
                $sql=mysqli_query($conn,"select * from welcome");
                $row=mysqli_fetch_assoc($sql);
                ?>
                     <div class="input-field col s12">
                         <textarea id="textarea1" name="fparagraph" class="materialize-textarea" ><?php echo $row['f_paragraph'];?></textarea>
                          <label for="textarea1">First Paragraph</label>
                        </div>
                     <div class="input-field col s12">
                         <textarea id="textarea1" name="sparagraph" class="materialize-textarea" ><?php echo $row['s_paragraph'];?></textarea>
                          <label for="textarea1">Second Paragraph</label>
                        </div><br/>
                        <button class="btn cyan waves-effect waves-light" type="submit" name="update">Update
                                <i class="mdi-content-send right"></i>
                              </button>
            </form><br/>
            </div>
            <div class="divider"></div>
            
        </div>
        
        <?php include 'footer.php';?>