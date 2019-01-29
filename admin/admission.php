<?php include'header.php';?>


 <section id="content">

        <!--breadcrumbs start-->
        <div id="breadcrumbs-wrapper">
            <!-- Search for small screen -->
           
          <div class="container">
            <div class="row">
              <div class="col s12 m12 l12">
                <h5 class="breadcrumbs-title">Apply For Admission</h5>
                <ol class="breadcrumbs">
                  <li><a href="index.php">Dashboard</a>
                  </li>
                  <li><a href="#">Apply For Admission</a>
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
                                <th>First Name</th>
                                <th>Last Name</th>
                                 <th>D.O.B</th>
                                 <th>Mobile Number(Student)</th>
                                 <th>Father's Name</th>
                                 <th>Mobile Number(Parent)</th>
                                 <th>City</th>
                                 <th>Class</th>
                                 <th>Address</th>
                                  <th>Action</th>
                            </tr>
                            <?php
                            $count=1;
                            $sql=mysqli_query($conn,"select * from admission");
                            while($rows=mysqli_fetch_assoc($sql)){
                            ?>
                            <tr>
                                <td><?php echo $count++;?></td> 
                                <td><?php echo $rows['fname'];?></td>
                                 <td><?php echo $rows['lname'];?></td>
                                 <td><?php echo $rows['dob'];?></td>
                                 <td><?php echo $rows['smobile'];?></td>
                                 <td><?php echo $rows['father_name'];?></td>
                                  <td><?php echo $rows['pmobile'];?></td>
                                  <td><?php echo $rows['city'];?></td>
                                <td><?php echo $rows['class'];?></td> 
                                 <td><?php echo $rows['address'];?></td> 
                                <td><a href="deleteadmission.php?id=<?php echo $rows['id'];?>"><i class="fa fa-trash fa-2x"></i></a></td>
                            </tr>
                           <?php }?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
        <?php include 'footer.php';?>