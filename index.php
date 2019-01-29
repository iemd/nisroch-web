<?php include 'header.php'; ?>


<section class="slider-area slider-one clearfix">
<div id="slider-one">

    
    <?php
	include'admin/connection.php';
    $sql=$con->prepare("select * from slider1");
    $sql->execute();
    while($row=$sql->fetch(PDO::FETCH_ASSOC)){
   
    
    ?>
    
    
<div class="slide-one overlay gradient-overlay-2">
    <img src="admin/<?php echo $row['image'];?>" alt="Slide one" />
<div class="text-layer">
<div class="d-table">
<div class="d-tablecell">
<div class="container">
<div class="row">
<div class="col-xs-12 col-md-10 col-text-center">
<div class="slide-text text-center">
<div class="paragraph animated fadeInUp time-delay4 white-color font-18">
<p class="line-height-30"><?php echo $row['title'];?></p>
</div>
<h1 class="animated fadeInUp time-delay3 white-color montserrat weight-bold font-50 uppercase mb-30"> <?php echo $row['name'];?></h1>
<h2 class="animated fadeInUp time-delay2 white-color font-30 uppercase mb-5"><?php echo $row['detail'];?></h2>
<div class="animated fadeInUp time-delay5 mt-20">
<a class="btn white-color montserrat button-aylen style-aylen black-white" href="contact.php">CONTACT US</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

 <?php } ?>


</div>
</section>


<section class="welcome-area welcome-one section-padding white-bg">
<div class="container">
<div class="row">
<div class="col-xs-12 col-sm-8 col-md-6 col-text-center text-center">
<div class="section-title-2 mb-50 bg-icon bg-icon-one">
<h2 class="font-36 uppercase montserrat weight-bold mb-20">
welcome to <span class="theme-color">NISROCH CHEMICALS</span>
</h2>
<p class="font-16">
Nisroch Chemicals Private Limited is one of the leading company engaged in manufacturing & trading of quality based Insecticides, fungicides, Herbicides & Plant Growth Regulators.
</p>
</div>
</div>
</div>
<div class="all-welcome relative clearfix text-center">
<div class="horizontal-line"></div>
<div class="row">
<div class="col-xs-12 col-sm-4 mobile-mb-30">
<div class="single-welcome wow fadeInLeft" data-wow-delay=".3s" data-wow-duration="1s">
<div class="image-shape border-shape mb-30 relative">
<img src="assets/img/service/shape1.png" alt="Tree Planting" />
</div>
<h3 class="montserrat weight-regular font-26">Bio Pesticides</h3>
<p>Bio Pesticides, a contraction of "biological pesticides", include several types of pest management intervention: through predatory, parasitic, or chemical relationships. </p>
</div>
</div>
<div class="col-xs-12 col-sm-4 mobile-mb-30">
<div class="single-welcome wow fadeInUpSmall" data-wow-delay=".3s" data-wow-duration="1s">
 <div class="image-shape border-shape border-shape-right mb-30 relative">
<img src="assets/img/service/shape2.png" alt="Tree Planting" />
</div>
<h3 class="montserrat weight-regular font-26">Bio Fungicides</h3>
<p>Bio Fungicdes are formulations of living organisms that are used to control the activity of plant pathogenic fungi and bacteria. </p>
</div>
</div>
<div class="col-xs-12 col-sm-4">
<div class="single-welcome wow fadeInRight" data-wow-delay=".3s" data-wow-duration="1s">
<div class="image-shape border-shape-right mb-30 relative">
<img src="assets/img/service/shape3.png" alt="Tree Planting" />
</div>
<h3 class="montserrat weight-regular font-26">Bio Fertilizers</h3>
<p>Bio Fertilizer is a substance which applied to seeds, plant surfaces, or soil to promotes growth by increasing the supply or availability of primary nutrients to the host plant. </p>
</div>
</div>
</div>
</div>
</div>
</section>


<div class="video-area video-one overlay overlay-5 bg-image-3">
<div class="play-icon">
<a class="various fancybox" data-fancybox-type="iframe" title="The Butterfly And Flower" href="https://www.youtube.com/embed/zQ9tVUEI4J4?&amp;autoplay=1">
<i class="zmdi zmdi-play-circle-outline"></i>
</a>
</div>
</div>


<section class="choose-area choose-one section-pt white-bg">
<div class="container">
<div class="row">
<div class="col-xs-12 col-sm-8 col-md-6 col-text-center text-center">
<div class="section-title-2 mb-50 bg-icon bg-icon-one">
<h2 class="font-36 uppercase montserrat weight-bold mb-20">
Why <span class="theme-color">Choose Us</span>
</h2>
<p class="font-16">
</p>
</div>
</div>
</div>
    <style>
        @media (max-width:767px){
          .single-list  .icon{
           margin: auto;
            }
            .single-list h4{
                text-align: center;
            }
            .single-choose.text-left .icon{
                margin: auto;
            }
        }
        </style>
<div class="row">
<div class="col-xs-12 col-sm-6 col-md-4 pr-40">
<div class="single-choose text-right pb-90 mr-30">
<div class="single-list wow fadeInLeft" data-wow-delay=".3s" data-wow-duration="1s">
<div class="icon">
    <img src="assets/img/icons/choose/1.png" alt="Icon" />
</div>
<h4 class="mb-10 mt-10 font-20 uppercase">Free Support</h4>
<p> </p>
</div>
<div class="single-list ptb-40 wow fadeInLeft" data-wow-delay=".6s" data-wow-duration="1s">
<div class="icon">
    <img src="assets/img/icons/choose/2.png" alt="Icon" />
</div>
<h4 class="mb-10 mt-10 font-20 uppercase">Happy Customers</h4>
<p> </p>
</div>
<div class="single-list wow fadeInLeft" data-wow-delay=".9s" data-wow-duration="1s">
<div class="icon">
    <img src="assets/img/icons/choose/3.png" alt="Icon" />
</div>
<h4 class="mb-10 mt-10 font-20 uppercase">License & Insurance</h4>
<p> </p>
</div>
</div>
</div>
<div class="col-xs-12 hidden-sm col-md-4 no-padding wow fadeInUpSmall" data-wow-delay=".3s" data-wow-duration="1s">
<div class="single-choose choose-man text-center">
<img src="assets/img/choose-man-2.png" alt="Choose Man" />
</div>
</div>
<div class="col-xs-12 col-sm-6 col-md-4 pl-40">
<div class="single-choose text-left pb-90 ml-30">
<div class="single-list wow fadeInRight" data-wow-delay=".3s" data-wow-duration="1s">
<div class="icon">
<img src="assets/img/icons/choose/4.png" alt="Icon" />
</div>
<h4 class="mb-10 mt-10 font-20 uppercase">Best Experts</h4>
<p> </p>
</div>
<div class="single-list ptb-40 wow fadeInRight" data-wow-delay=".6s" data-wow-duration="1s">
<div class="icon">
<img src="assets/img/icons/choose/5.png" alt="Icon" />
</div>
<h4 class="mb-10 mt-10 font-20 uppercase">High Quality</h4>
<p> </p>
</div>
<div class="single-list wow fadeInRight" data-wow-delay=".9s" data-wow-duration="1s">
<div class="icon">
<img src="assets/img/icons/choose/6.png" alt="Icon" />
</div>
<h4 class="mb-10 mt-10 font-20 uppercase">Free Consultations</h4>
<p> </p>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="promo-area promo-one section-padding overlay gradient-overlay-3 bg-image-2">
<div class="container">
<div class="row">
<div class="col-xs-12">
<div class="promo-title">
<h1 class="floatleft white-color no-margin">Need Help ? Please Contact Us</h1>
<div class="floatright">
<a class="btn white-color button-aylen style-aylen black-white" href="contact.php">CONTACT US</a>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="project-area project-one white-bg section-pt">
<div class="container">
<div class="row">
<div class="col-xs-12 col-sm-8 col-md-6 col-text-center text-center">
<div class="section-title-2 mb-50 bg-icon bg-icon-one">
<h2 class="font-36 uppercase montserrat weight-bold mb-20">
Our <span class="theme-color">Products</span>
</h2>
<p class="font-16">
</p>
</div>
</div>
</div>
<div class="row">
<div class="col-xs-12">
<div class="all-project move-fadeInUp animate">
<div class="project-menu text-center">
<ul class="clearfix mb-80">
<li data-filter="*" class="active">All</li>

<li data-filter=".INSECTICIDES">INSECTICIDES</li>

<li data-filter=".FUNGICIDES">FUNGICIDES</li>
<li data-filter=".HERBICIDES">HERBICIDES</li>
<li data-filter=".ANTIBIOTIC">ANTIBIOTIC</li>
<li data-filter=".BIOPRODUCTS">BIO PRODUCTS</li>
<li data-filter=".PLANTGROWTH">PLANT GROWTH REGULATORS</li>
</ul>
</div>
</div>
</div>
</div>
     <style>
        .grid-item{
            height: 565px;
        }
        @media (max-width:720px){
            .grid-item{
            height: auto;
        }
        }
    </style>
<div class="project-grid wow fadeInUpSmall" data-wow-delay=".3s" data-wow-duration="1s">
    <?php
                           
                            $sql=$con->prepare("select product.id,product.title,product.detail,product.image,product_category.name from product inner join product_category on product.p_id=product_category.id order by product.id desc limit 12");
                            $sql->execute();
							while($rows=$sql->fetch(PDO::FETCH_ASSOC)){
                            ?>
<div class="grid-item <?php echo $rows['name'];?> gallery percent-33">
<div class="single-project overlay gradient-overlay-4">
    <img src="admin/<?php echo $rows['image'];?>" alt="insecticides" style="  border: 1px solid #000;" />
    
<div class="title plr-40 text-center">
<div class="zoom-icon">
<a href="admin/<?php echo $rows['image'];?>" class="fancybox">
<i class="zmdi zmdi-fullscreen"></i>
</a>
</div>
<h3 class="white-color montserrat weight-regular no-margin"><?php echo $rows['title'];?></h3>
<!--<span><?php //echo $rows['detail'];?></span>--->
</div>
</div>
    <h3 align="center" style="margin-top:16px;"><span style="text-transform:uppercase;"><?php echo $rows['title'];?></span></h3>
    <p align="center" style="margin-bottom:16px;"><a href="single-product.php?id=<?php echo $rows['id'];?>" class="btn btn-primary">Read more</a></p>
</div>
   <?php }?>


</div>
</div>
</section>


<section class="testimonial-area testimonial-one section-padding bg-image-4">
<div class="container">
<div class="row">
<div class="col-xs-12 col-sm-8 col-md-10 col-text-center">
<div class="one-item-not-fade text-center">
     <?php
                           
                            $sql=$con->prepare("select * from testimonial where status=1");
                            $sql->execute();
							while($rows=$sql->fetch(PDO::FETCH_ASSOC)){
                            ?>
<div class="single-slide">
<div class="content">
<i class="zmdi zmdi-quote"></i>
<p class="font-26"><?php echo $rows['message'];?>.</p>
</div>
<div class="vertical-line ptb-15">
<div class="left"></div>
<div class="middle"></div>
<div class="right"></div>
</div>
<div class="heading clearfix">
<div class="title">
<h3 class="no-margin uppercase"><?php echo $rows['name'];?> </h3>
<p class="montserrat weight-regular mb-20"><?php echo $rows['designation'];?></p>
</div>

</div>
</div>
   <?php }?>
 
</div>
</div>
</div>
</div>
    
    <?php
   
    if(isset($_POST["submit"])){
    
   // small images
    
   
                        
     
	
	// Check Name is available or not 
	$name=$_POST['name'];
        $desig=$_POST['occupation'];
        $detail=$_POST['message'];
        $mobile=$_POST['mobile'];
			$insert = $con->prepare("INSERT INTO testimonial(name,designation,message) VALUES (:name,:desig,:detail)");
			$insert->bindparam(':name', $name);
			$insert->bindparam(':desig', $desig);
			$insert->bindparam(':detail', $detail);
                        $res=$insert->execute();
                        if($res){
                            ?>
<script>
    alert('Review inserted successfully!');
</script>

<?php
                        }
			
	 $url=("http://txtguru.in/imobile/api.php?username=nisrochchemicals&password=13196274&source=NISROC&dmobile=91".$mobile."&message=Thankyou+for+providing+your+time+to+say+with+the+NISROCH+CHEMICALS+PVT.+LTD.,+Your+feedback+will+be+important+for+us.+Team+NCPL.");
        $data=@file_get_contents($url);		

    }

?>
    
    <p align="center"><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#review">Write Review</button></p>
<div id="review" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Review</h4>
      </div>
      <div class="modal-body">
          <form action="" method="post">
              <input type="text" class="form-control" name="name" placeholder="Your Name" required=""/><br/>
              <input type="text" class="form-control" name="mobile" placeholder="Mobile" required=""/><br/>
              <select class="form-control" name="occupation" required="">
                  <option value="">Select occupation</option>
                  <option value="FARMER">FARMER</option>
                  <option value="BUSINESS">BUSINESS</option>
                  <option value="GOVERNMENT SERVICE">GOVERNMENT SERVICE</option>
                  <option value="STUDENT">STUDENT</option>
                  <option value="Others">Others</option>
              </select><br/>
              <textarea rows="5" cols="8" class="form-control" name="message" placeholder="Write Review" required=""></textarea><br/>
              <p align="center"><button class="btn btn-primary btn-lg" name="submit" type="submit">Submit</button></p>
                  
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
</section>


<section class="counterup-area counterup-one bg-color-2 section-padding">
<div class="container">
<div class="row text-left">
<div class="all-counterup clearfix">
<div class="col-xs-12 col-sm-6 col-md-3 mobile-mb-30">
<div class="single-counter">
<div class="icon mr-20 floatleft text-center">
    <?php
    $sql=$con->prepare("select * from periodic");
	$sql->execute();
                            $rows=$sql->fetch(PDO::FETCH_ASSOC);
                            
                            $qq=$con->prepare("select * from product");
							$qq->execute();
                            $count= $qq->rowCount();
    
    ?>
<img src="assets/img/icons/counter/1.png" alt="Icon" />
</div>
<h1 class="weight-regular white-color no-margin"><?php echo $rows['work'];?></h1>
<h3 class="font-20 weight-regular white-color no-margin">Hours of Work</h3>
</div>
</div>
<div class="col-xs-12 col-sm-6 col-md-3 mobile-mb-30">
<div class="single-counter">
<div class="icon mr-20 floatleft text-center">
<img src="assets/img/icons/counter/2.png" alt="Icon" />
</div>
<h1 class="weight-regular white-color no-margin"><?php echo $count;?></h1>
<h3 class="font-20 weight-regular white-color no-margin">Product</h3>
</div>
</div>
<div class="col-xs-12 col-sm-6 col-md-3">
<div class="single-counter">
<div class="icon mr-20 floatleft text-center">
<img src="assets/img/icons/counter/3.png" alt="Icon" />
</div>
<h1 class="weight-regular white-color no-margin"><?php echo $rows['happy_client'];?></h1>
<h3 class="font-20 weight-regular white-color no-margin">Happy Clients </h3>
</div>
</div>
<div class="col-xs-12 col-sm-6 col-md-3">
<div class="single-counter">
<div class="icon mr-20 floatleft text-center">
<img src="assets/img/icons/counter/2.png" alt="Icon" />
</div>
<h1 class="weight-regular white-color no-margin"><?php echo $rows['dealers'];?></h1>
<h3 class="font-20 weight-regular white-color no-margin">Dealers </h3>
</div>
</div>
</div>
</div>
</div>
</section>


<div class="team-area team-one white-bg section-padding">
<div class="container">
<div class="row">
<div class="col-xs-12 col-sm-9 col-md-7 col-text-center text-center">
<div class="section-title mb-70">
<h2 class="font-36 uppercase montserrat weight-bold mb-20">OUR TEAM</h2>
<div class="double-line"></div>
<p class="font-16 mt-20"> </p>
</div>
</div>
</div>
<div class="row mb-50 text-center">
     <?php
                          
                            $sql=$con->prepare("select * from team");
							$sql->execute();
                            while($rows=$sql->fetch(PDO::FETCH_ASSOC)){
                            ?>
<div class="col-xs-12 col-sm-6 col-md-3 mobile-mb-30 tablet-mb-40 wow fadeInUpSmall" data-wow-delay=".1s" data-wow-duration="1s">
<div class="single-member relative">
    <img src="admin/<?php echo $rows['image'];?>" alt="Member Image" />
<div class="text-parent">
<div class="text theme-bg">
<h4 class="uppercase mb-5"><?php echo $rows['name'];?></h4>
<h6 class="font-12 montserrat weight-regular uppercase no-margin"><?php echo $rows['post'];?></h6>
<div class="social-icon l-height-1">
<ul class="clearfix">
<li><a href="https://www.facebook.com/" target="_blank"><i class="zmdi zmdi-facebook"></i></a></li>
<li><a href="https://www.twitter.com/" target="_blank"><i class="zmdi zmdi-twitter"></i></a></li>
<li><a href="https://www.linkedin.com/" target="_blank"><i class="zmdi zmdi-linkedin"></i></a></li>
<li><a href="https://www.instagram.com/" target="_blank"><i class="zmdi zmdi-instagram"></i></a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
  <?php  }?>


</div>
</div>
</div>


<?php include 'footer.php'; ?>