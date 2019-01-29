<?php include'header.php';?>


 <section id="content">

        <!--breadcrumbs start-->
        <div id="breadcrumbs-wrapper">
            <!-- Search for small screen -->
           
          <div class="container">
            <div class="row">
              <div class="col s12 m12 l12">
                <h5 class="breadcrumbs-title">Message for Reply</h5>
                <ol class="breadcrumbs">
                  <li><a href="index.php">Dashboard</a>
                  </li>
                  <li><a href="#">Message for Reply</a>
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
                                <th>message for reply</th>
                               
                                 <th>Mobile</th>
                                 <th>Message</th>
                                 <th>Date</th>
                                 
                                 
                                  <th>Action</th>
                            </tr>
                            <?php
                            $count=1;
                            $sql=mysqli_query($conn,"select reply.name,reply_message.id,reply_message.mobile,reply_message.message,reply_message.date from reply_message inner join reply on reply_message.reply_id=reply.id");
                            while($rows=mysqli_fetch_assoc($sql)){
                            ?>
                            <tr>
                                <td><?php echo $count++;?></td> 
                                <td><?php echo $rows['name'];?></td>
                                 
                                 <td><?php echo $rows['mobile'];?></td>
                                  <td><?php echo $rows['message'];?></td>
                                  <td><?php echo date('d-m-Y',strtotime($rows['date']));?></td>
                                
                                <td><a href="deletereplym.php?id=<?php echo $rows['id'];?>"><i class="fa fa-trash fa-2x"></i></a></td>
                            </tr>
                           <?php }?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
        <?php include 'footer.php';?>