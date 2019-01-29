<?php include'header.php';?>


 <section id="content">

        <!--breadcrumbs start-->
        <div id="breadcrumbs-wrapper">
            <!-- Search for small screen -->
           
          <div class="container">
            <div class="row">
              <div class="col s12 m12 l12">
                <h5 class="breadcrumbs-title">News Reply</h5>
                <ol class="breadcrumbs">
                  <li><a href="index.php">Dashboard</a>
                  </li>
                  <li><a href="#">News Reply</a>
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
                                <th>News Title</th>
                                <th>News Image</th>
                                 <th>Name</th>
                                 <th>Email</th>
                                 <th>Phone</th>
                                 <th>Message</th>
                                 <th>Date</th>
                                 
                                  <th>Action</th>
                            </tr>
                            <?php
                            $count=1;
                            $sql=mysqli_query($conn,"select reply.name,reply.email,reply.phone,reply.message,reply.date,reply.id,news.title,news.image from reply inner join news on reply.news_id=news.id");
                            while($rows=mysqli_fetch_assoc($sql)){
                            ?>
                            <tr>
                                <td><?php echo $count++;?></td> 
                                <td><?php echo $rows['title'];?></td>
                                 <td><img src="<?php echo $rows['image'];?>" width="120" height="120" /></td>
                                 <td><?php echo $rows['name'];?></td>
                                 <td><?php echo $rows['email'];?></td>
                                 <td><?php echo $rows['phone'];?></td>
                                  <td><?php echo $rows['message'];?></td>
                                  <td><?php echo date('d-m-Y',strtotime($rows['date']));?></td>
                                
                                <td><a href="deletereply.php?id=<?php echo $rows['id'];?>"><i class="fa fa-trash fa-2x"></i></a></td>
                            </tr>
                           <?php }?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
        <?php include 'footer.php';?>