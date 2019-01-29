<?php include 'header.php'; include'admin/connection.php'; ?>

<div class="pages-header pt-180 pb-95 overlay gradient-overlay-2 bg-image-5">
<div class="container">
<div class="row">
<div class="col-xs-12 text-center">
<div class="page-title">
<h1 class="font-36 weight-bold montserrat uppercase white-color mb-20">Our Gallery</h1>
<div class="text-center">
<div class="p-vertical-line mb-10">
<div class="v-line"></div>
<div class="v-line animated"></div>
<div class="v-line"></div>
</div>
</div>
<ul>
<li><a href="index.php">Home</a> <i class="zmdi zmdi-chevron-right"></i>
</li>
<li>Gallery</li>
</ul>
</div>
</div>
</div>
</div>
</div>


<section class="gallery-area gallery-one white-bg section-padding">
<div class="container">
<div class="row">
<div class="col-xs-12">
<div class="all-project move-fadeInUp animate">
<div class="project-menu text-center">
<ul class="clearfix mb-80">
<li data-filter="*" class="active">All</li>
<li data-filter=".INSECTICIDES">INSECTICIDES</li>
<li data-filter=".FUNGICIDES">FUNGICIDES</li>
<li data-filter=".HERBICIDES">HERBICIDES</li>
<li data-filter=".ANTIBIOTICS">ANTIBIOTICS</li>
<li data-filter=".PLANTGROWTH">PLANT GROWTH REGULATORS</li>
</ul>
</div>
</div>
</div>
</div>
<div class="project-grid wow fadeInUpSmall" data-wow-delay=".3s" data-wow-duration="1s">
    
     <?php
                           
                            $sql=$con->prepare("select * from gallery");
							$sql->execute();
                            while($rows=$sql->fetch(PDO::FETCH_ASSOC)){
                            ?>
    
<div class="grid-item <?php echo $rows['class'];?> gallery percent-33">
<div class="single-project overlay gradient-overlay-4">
<img src="admin/<?php echo $rows['image'];?>" alt="INSECTICIDES" /><br/>
<h3 align="center" style="margin-top:16px;"><span style="text-transform:uppercase;"><?php echo $rows['name'];?></span></h3>
<p><?php echo $rows['detail'];?></p>
<div class="title plr-40 text-center">
<div class="zoom-icon">
    <a href="admin/<?php echo $rows['image'];?>" class="fancybox">
        
<i class="zmdi zmdi-fullscreen"></i>
</a>
</div>
<h3 class="white-color montserrat weight-regular no-margin"><?php echo $rows['class'];?></h3>
</div>
</div>
</div>
   <?php }?>


</div>
</div>
</section>


<?php include 'footer.php'; ?>