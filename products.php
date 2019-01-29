<?php include 'header.php'; include'admin/connection.php'; ?>

<div class="pages-header pt-180 pb-95 overlay gradient-overlay-2 bg-image-5">
<div class="container">
<div class="row">
<div class="col-xs-12 text-center">
<div class="page-title">
<h1 class="font-36 weight-bold montserrat uppercase white-color mb-20">Our Products</h1>
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
<li>Products</li>
</ul>
</div>
</div>
</div>
</div>
</div>


<section class="gallery-area gallery-one white-bg section-padding">
<div class="container">
<div class="row">
<div class="col-sm-12">
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
    </style>
<div class="project-grid wow fadeInUpSmall" data-wow-delay=".3s" data-wow-duration="1s">
 <?php
                           
                            $sql=$con->prepare("select product.id,product.title,product.detail,product.image,product_category.name from product inner join product_category on product.p_id=product_category.id");
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


<?php include 'footer.php'; ?>