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
        <?php
        
        $id=$_REQUEST['id'];
        $sql=$con->prepare("select * from product where id=:id");
		$sql->bindparam(':id', $id);
		$sql->execute();
        $row=$sql->fetch(PDO::FETCH_ASSOC);
        
        ?>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <p align="center"><img src="admin/<?php echo $row['image'];?>" class="img-responsive" /></p>
                </div>
            </div>  
        </div>  
        <div class="col-md-8">
            <h2><?php echo $row['title'];?></h2><br/>
            <p><?php echo $row['detail'];?></p><br/>
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#book">Book Now</button>
            <div id="book" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Book Now</h4>
      </div>
        <?php
        if(isset($_POST['submit'])){
            
            $pid=$_POST['pid'];
             $name=$_POST['name'];
              $mobile=$_POST['mobile'];
               $email=$_POST['email'];
                $address=$_POST['address'];
                 $message=$_POST['message'];
        
        $query=$con->prepare("insert into book_now(p_id,name,mobile,email,address,message)values(:pid,:name,:mobile,:email,:address,:message)");
		$query->bindparam(':pid', $pid);
		$query->bindparam(':name', $name);
		$query->bindparam(':mobile', $mobile);
		$query->bindparam(':email', $email);
		$query->bindparam(':address', $address);
		$query->bindparam(':message', $message);
		
        $rs=$query->execute();
        if($rs){?>
            <script>
                alert('insert seccessfully');
            </script>
        
        <?php
        }
         
        $url=("http://txtguru.in/imobile/api.php?username=nisrochchemicals&password=13196274&source=Senderid&dmobile=91
		".$mobile."&message=Thankyou +for +your +concern +on +our +product, +Our +Business +representative +will +shortly +be
		+in +contact +with +you. +Team +NISROCH +CHEMICALS +PVT. +LTD.");
        $data=@file_get_contents($url);
        
        }
        ?>
            <?php
            $name=$_POST['name'];
              $mobile=$_POST['mobile'];
               $email=$_POST['email'];
                $address=$_POST['address'];
                 $message=$_POST['message'];
            
             $detail="Name:".$name." "."Mobile:".$mobile." "."Email:".$email." "."Address:".$address." "."Message:".$message;         
               
    
    $ch = curl_init('https://www.txtguru.in/imobile/api.php?');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "username=nisrochchemicals&password=13196274&source=NISROC&dmobile=917895798951&message=$detail");
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
$data = curl_exec($ch);
            ?>
      <div class="modal-body">
          <form action="" method="post">
              <input type="hidden" name="pid" value="<?php echo $row['id'];?>" />
              <input type="text" class="form-control" name="name" placeholder="Your Name" required="" /><br/>
               <input type="text" class="form-control" name="mobile" placeholder="Mobile" required="" /><br/>
                <input type="text" class="form-control" name="email" placeholder="Email" required=""/><br/>
                <textarea rows="5" cols="8" class="form-control" name="address" placeholder="address"></textarea><br/>
                <textarea rows="5" cols="8" class="form-control" name="message" placeholder="Message"></textarea><br/>
                <p align="center"><button type="submit" class="btn btn-primary" name="submit">Submit</button></p>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
        </div>  
    </div>
</div>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <style>
    h2{
  text-align:center;
  padding: 20px;
}
/* Slider */

.slick-slide {
    margin: 0px 20px;
}

.slick-slide img {
    width: 100%;
}

.slick-slider
{
    position: relative;
    display: block;
    box-sizing: border-box;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
            user-select: none;
    -webkit-touch-callout: none;
    -khtml-user-select: none;
    -ms-touch-action: pan-y;
        touch-action: pan-y;
    -webkit-tap-highlight-color: transparent;
}

.slick-list
{
    position: relative;
    display: block;
    overflow: hidden;
    margin: 0;
    padding: 0;
}
.slick-list:focus
{
    outline: none;
}
.slick-list.dragging
{
    cursor: pointer;
    cursor: hand;
}

.slick-slider .slick-track,
.slick-slider .slick-list
{
    -webkit-transform: translate3d(0, 0, 0);
       -moz-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
         -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
}

.slick-track
{
    position: relative;
    top: 0;
    left: 0;
    display: block;
}
.slick-track:before,
.slick-track:after
{
    display: table;
    content: '';
}
.slick-track:after
{
    clear: both;
}
.slick-loading .slick-track
{
    visibility: hidden;
}

.slick-slide
{
    display: none;
    float: left;
    height: 100%;
    min-height: 1px;
}
[dir='rtl'] .slick-slide
{
    float: right;
}
.slick-slide img
{
    display: block;
}
.slick-slide.slick-loading img
{
    display: none;
}
.slick-slide.dragging img
{
    pointer-events: none;
}
.slick-initialized .slick-slide
{
    display: block;
}
.slick-loading .slick-slide
{
    visibility: hidden;
}
.slick-vertical .slick-slide
{
    display: block;
    height: auto;
    border: 1px solid transparent;
}
.slick-arrow.slick-hidden {
    display: none;
}
.slide img{
    border: solid 1px #5b974e;
}
.slide p a{
    color: #000;
}
</style>
<div class="container" style="margin-top:80px;">
    <h2 align="center">Other Products</h2>
        <div class="row">
            <div class="col-md-12">
                <section class="customer-logos slider">
                    <?php
                    $sql=$con->prepare("select * from product");
					$sql->execute();
                    while($row=$sql->fetch(PDO::FETCH_ASSOC)){
                    ?>
                    <div class="slide">
                        <a href="single-product.php?id=<?php echo $row['id'];?>">  <img src="admin/<?php echo $row['image'];?>"></a><br/>
                        <p align="center"><a href="single-product.php?id=<?php echo $row['id'];?>"> <?php echo $row['title'];?></a></p>
                        
                    </div>
       <?php }?>
      
   </section>
            </div>
        </div>
    </div>
</section>

<script>
   $(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 3
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 1
            }
        }]
    });
});
    </script>
<?php include 'footer.php'; ?>