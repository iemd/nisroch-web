<?php include'header.php';?>
     
      <section id="content">

        <!--breadcrumbs start-->
        <div id="breadcrumbs-wrapper">
            <!-- Search for small screen -->
           
          <div class="container">
            <div class="row">
              <div class="col s12 m12 l12">
                <h5 class="breadcrumbs-title">Dashboard</h5>
                
              </div>
            </div>
          </div>
        </div>
        <!--breadcrumbs end-->

        <style>
            .dash .panel{
                background: #aad044 ;
            }
            .dash .panel h5{
                
                color: #fff;
            }
            .ff{
                padding: 11px 12px 11px 12px;
                background-color: #fff;
                border-radius: 50%;
            }
        </style>
        
        <?php
         $sql=mysqli_query($conn,"select * from slider1");
         $rowcount= mysqli_num_rows($sql);
         
          $sql1=mysqli_query($conn,"select * from product");
         $rowcount1= mysqli_num_rows($sql1);
         
           $sql2=mysqli_query($conn,"select * from gallery");
         $rowcount2= mysqli_num_rows($sql2);
         
          $sql3=mysqli_query($conn,"select * from contact");
         $rowcount3= mysqli_num_rows($sql3);
         
        ?>
        
 <div class="divider"></div>
        <!--start container-->
        <div class="container" style="height:700px;">
       
            <div class="row dash" style="margin-top: 50px;">
                <div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h5 align='center'>Slider</h5><br/>
                            <p align="center"><span class="ff"><?php echo $rowcount;?></span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h5 align='center'>Products</h5> <br/>
                           <p align="center"><span class="ff"><?php echo $rowcount1;?></span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-body">
                             <h5 align='center'>Gallery</h5><br/>
                            <p align="center"><span class="ff"><?php echo $rowcount2;?></span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-body">
                             <h5 align='center'>Enquiry</h5><br/>
                            <p align="center"><span class="ff"><?php echo $rowcount3;?></span></p>
                        </div>
                    </div>
                </div>
            </div>
      
        
          <!-- Floating Action Button -->
          
            <!-- Floating Action Button -->
        </div>
        <!--end container-->

      </section>
    
  <!-- START FOOTER -->
 <?php include'footer.php';?>