<?php include'header.php'; error_reporting(0);?>
 <section id="content">

        <!--breadcrumbs start-->
        <div id="breadcrumbs-wrapper">
            <!-- Search for small screen -->
           
          <div class="container">
            <div class="row">
              <div class="col s12 m12 l12">
                <h5 class="breadcrumbs-title">Slider</h5>
                <ol class="breadcrumbs">
                  <li><a href="index.php">Dashboard</a>
                  </li>
                  <li><a href="#">Slider</a>
                  </li>
                 
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!--breadcrumbs end-->
       

        <!--start container-->
        <div class="container">
          
          <!--file-upload-->
          <div id="file-upload" class="section">
           
           
           
           
           
            <div class="row section">
              <div class="col s12 m4 l3">
                <p>Image Upload</p>
              </div>
               
              <div class="col s12 m8 l9">
                  <form action="sliderimage.php" method="post" enctype="multipart/form-data">
                       
                  <p>Image Dimension: 1920 x 800.</p>
                  
                  <input type="file" name="image" id="input-file-max-fs" class="dropify" data-max-file-size="2M" /><br/>
                  
                   <div class="input-field col s12">
                        <input id="notice" type="text" name="title" class="validate">
                          <label for="notice">Title</label>
                        </div>
                    <br/>
                     <div class="input-field col s12">
                        <input id="notice" type="text" name="name" class="validate">
                          <label for="notice">Name</label>
                        </div>
                    <br/>
                     <div class="input-field col s12">
                        <input id="notice" type="text" name="detail" class="validate">
                          <label for="notice">Detail</label>
                        </div>
                    <br/>
                   <button class="btn cyan waves-effect waves-light" type="submit" name="submit">Submit
                                <i class="mdi-content-send right"></i>
                              </button>
                  </form>
              </div>
            </div>
            
            <!--remove button-->
            <div class="divider"></div>
            <div class="row section">
                <p>List of Slider Images</p>
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th>Serial No.</th><th>Image</th><th>Action</th>
                            </tr>
                            <?php
                            include 'connection.php';
                             $count=1;
                            $sql=$con->prepare("select * from slider1");
                            $sql->execute();
                           while($res = $sql ->fetch(PDO::FETCH_ASSOC)){
                           
                            ?>
                            <tr>
                                <td><?php echo $count++;?></td><td><img src="<?php echo $res['image'];?>" width="320" height="120"/></td><td><a href="editslider.php?id=<?php echo $res['id'];?>"><i class="fa fa-edit fa-2x"></i></a>&nbsp;<a href="deleteslider.php?id=<?php echo $res['id'];?>"><i class="fa fa-trash fa-2x"></i></a></td>
                            </tr>
                           <?php }?>
                        </table> 
                    </div>
                </div>
            </div>
            
            
          </div>
        
        </div>
        <!--end container-->

      </section>

<?php include 'footer.php';?>