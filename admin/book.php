<?php include'header.php';?>


 <section id="content">

        <!--breadcrumbs start-->
        <div id="breadcrumbs-wrapper">
            <!-- Search for small screen -->
           
          <div class="container">
            <div class="row">
              <div class="col s12 m12 l12">
                <h5 class="breadcrumbs-title">List Of Booking</h5>
                <ol class="breadcrumbs">
                  <li><a href="index.php">Dashboard</a>
                  </li>
                  <li><a href="#">List Of Booking</a>
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
                                 <th>Address</th>
                                 <th>Message</th>
                                 <th>Product Image</th>
                                 <th>Product Name</th>
                                  <th>Action</th>
                            </tr>
                            <?php
							include'connection.php';
                            $count=1;
                            $sql=$con->prepare("select book_now.name,book_now.mobile,book_now.email,book_now.address,book_now.message,product.image,book_now.id,product.title from book_now inner join product on book_now.p_id=product.id");
                            $sql->execute();
							while($rows=$sql->fetch(PDO::FETCH_ASSOC)){
                                
                            ?>
                            <tr>
                                <td><?php echo $count++;?></td> 
                                <td><?php echo $rows['name'];?></td>
                                <td><?php echo $rows['mobile'];?></td>
                                <td><?php echo $rows['email'];?></td>
                                <td><?php echo $rows['address'];?></td>
                                <td><?php echo $rows['message'];?></td>
                                <td><img src="<?php echo $rows['image'];?>" width="100" height="108" /></td>
                                <td><?php echo $rows['title'];?></td>
                                
                                <td><a href="deletebook.php?id=<?php echo $rows['id'];?>"><i class="fa fa-trash fa-2x"></i></a></td>
                            </tr>
                           <?php }?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
        <?php include 'footer.php';?>