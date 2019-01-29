<?php include'header.php';?>
<?php
include 'connection.php'; 

?>

 <section id="content">

        <!--breadcrumbs start-->
        <div id="breadcrumbs-wrapper">
            <!-- Search for small screen -->
           
          <div class="container">
            <div class="row">
              <div class="col s12 m12 l12">
                <h5 class="breadcrumbs-title">Testimonial</h5>
                <ol class="breadcrumbs">
                  <li><a href="index.php">Dashboard</a>
                  </li>
                  <li><a href="#">Testimonial</a>
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
        <div class="container" style="min-height:100%">
            
            <div class="divider"></div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th>Serial No</th>
                                
                                 <th>Name</th>
                                 <th>Designation</th>
                                 <th>Message</th>
                                 <th>Verify</th>
                                  <th>Action</th>
                            </tr>
                            <?php
                            $count=1;
                            $sql=$con->prepare("select * from testimonial");
							$sql->execute();
                            while($rows=$sql->fetch(PDO::FETCH_ASSOC)){
                                $status=$rows['status'];
                            ?>
                            <tr>
                                <td><?php echo $count++;?></td> 
                                <td><?php echo $rows['name'];?></td>
                                <td><?php echo $rows['designation'];?></td>
                                <td style="width:50%;"><?php echo $rows['message'];?></td> 
                                <td>
                                   <?php
                                   if($status==1){?>
                                    <i class="fa fa-check"></i>
                                   <?php    
                                   }
                                   else{
                                       echo "Not Verified";
                                   }
                                   ?>
                                </td>
                                <td><a href="deletetestimonal.php?id=<?php echo $rows['id'];?>"><i class="fa fa-trash fa-2x"></i></a>&nbsp;&nbsp;<a class="btn btn-primary" href="verify.php?id=<?php echo $rows['id'];?>">Verify</a></td>
                            </tr>
                           <?php }?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
        <?php include 'footer.php';?>