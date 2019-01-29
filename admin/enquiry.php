<?php include'header.php'; include'connection.php';?>


 <section id="content">

        <!--breadcrumbs start-->
        <div id="breadcrumbs-wrapper">
            <!-- Search for small screen -->
           
          <div class="container">
            <div class="row">
              <div class="col s12 m12 l12">
                <h5 class="breadcrumbs-title">List Of Enquiry</h5>
                <ol class="breadcrumbs">
                  <li><a href="index.php">Dashboard</a>
                  </li>
                  <li><a href="#">List Of Enquiry</a>
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
            
            <div class="divider"></div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th>Serial No</th>
                                
                                 <th>Name</th>
                                 <th>Mobile</th>
                                 <th>Email</th>
                                 <th>Subject</th>
                                 <th>Message</th>
                                  <th>Action</th>
                            </tr>
                            <?php
                            $count=1;
                            $sql=$con->prepare("select * from contact");
							$sql->execute();
                            while($rows=$sql->fetch(PDO::FETCH_ASSOC)){
                            ?>
                            <tr>
                                <td><?php echo $count++;?></td> 
                                <td><?php echo $rows['name'];?></td>
                                <td><?php echo $rows['mobile'];?></td>
                                <td><?php echo $rows['email'];?></td>
                                <td><?php echo $rows['subject'];?></td>
                                <td><?php echo $rows['message'];?></td>
                                
                                <td><a href="deletecontact.php?id=<?php echo $rows['id'];?>"><i class="fa fa-trash fa-2x"></i></a></td>
                            </tr>
                           <?php }?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
        <?php include 'footer.php';?>