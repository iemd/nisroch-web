<?php include'header.php'; error_reporting(0);?>
<?php
   include'connection.php';
    if(isset($_POST["submit"])){
    
   // small images
    
    $name = $_FILES["image"]["name"];
		$tmp = $_FILES["image"]["tmp_name"];
		
                 
                
                $upload_dir = "images/gallary/";
                $imgExt = strtolower(pathinfo($name,PATHINFO_EXTENSION));
                $valid_extensions = array('jpeg', 'jpg', 'png', 'gif');
                if(in_array($imgExt, $valid_extensions)){
			$pre = time();
			$name = $pre. $_FILES['image']['name'];
                        list($width, $height) = getimagesize($tmp);
                         if($width=="370" && $height=="400" ){
			$image = $upload_dir.$name;
                        move_uploaded_file($tmp, $image);
                        
     
	
	// Check Name is available or not 
	$category=$_POST['category'];
        $product=$_POST['product'];
        $detail=$_POST['detail'];
			$insert = $con->prepare("INSERT INTO product(p_id,title,detail,image) VALUES (:category,:product,:detail,:image)");
                        $insert->bindparam(':category', $category);
                         $insert->bindparam(':product', $product);
                          $insert->bindparam(':detail', $detail);
                           $insert->bindparam(':image', $image);
                        $res=$insert->execute();
                        }
                else{ ?>
                    <script>
                        alert('please upload image dimension 370px x 400px!');
    
</script>
              <?php  }
               }
                else{ ?>
<script>
    alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed!');
</script>
                    
                
               <?php } 
                        
		       }
			

 

?>

 <section id="content">

        <!--breadcrumbs start-->
        <div id="breadcrumbs-wrapper">
            <!-- Search for small screen -->
           
          <div class="container">
            <div class="row">
              <div class="col s12 m12 l12">
                <h5 class="breadcrumbs-title">Product Items</h5>
                <ol class="breadcrumbs">
                  <li><a href="index.php">Dashboard</a>
                  </li>
                  <li><a href="#">Product Items</a>
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
            <div class="col-md-8">
            <form action="" method="post" enctype="multipart/form-data">
                <label>Image Classes</label>
  <select class="browser-default" name="category">
    <option value="" disabled selected>Choose Product category</option>
    <?php
    $sql=$con->prepare("select * from product_category");
    $sql->execute();
    while($row=$sql->fetch(PDO::FETCH_ASSOC)){
    ?>
    <option value="<?php echo $row['id'];?>"><?php echo $row['name'];?></option>
  <?php }?>
  </select><br/>
                 
                 <div class="file-field input-field">
                        <div class="btn">
                          <span>File</span>
                          <input type="file" name="image" multiple>
                        </div>
                        <div class="file-path-wrapper">
                          <input class="file-path validate" type="text" placeholder="Upload Image files">
                          <p>image dimension:370px x 400px</p>
                        </div>
                      </div><br/>
                       <div class="input-field col s12">
                        <input id="notice" type="text" name="product" class="validate">
                          <label for="notice">PRODUCT NAME</label>
                        </div><br/>
                      <div class="input-field">
                         <textarea id="textarea1" name="detail" class="materialize-textarea"></textarea>
                          <label for="textarea1">Detail</label>
                        </div><br/>
                   
                        <button class="btn cyan waves-effect waves-light" type="submit" name="submit">Submit
                                <i class="mdi-content-send right"></i>
                              </button>
            </form><br/>
            </div>
            <div class="divider"></div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th>Serial No</th>
                                <th>Product Category</th>
                                 <th>Product Name</th>
                                 <th>Detail</th>
                                 <th>Image</th>
                                  <th>Action</th>
                            </tr>
                            <?php
                            $count=1;
                             $results_per_page = 10;
$sql=$con->prepare("select product.id,product.title,product.detail,product.image,product_category.name from product inner join product_category on product.p_id=product_category.id");
$result =$sql->execute();
$number_of_results =$sql->rowCount();
$number_of_pages = ceil($number_of_results/$results_per_page);
if(!isset($_GET["page"])){
	$page = 1;
	}else {
		$page = $_GET["page"];
		}
		
		$this_page_first_result = (($page - 1 ) * $results_per_page);
                            $sql=$con->prepare("select product.id,product.title,product.detail,product.image,product_category.name from product inner join product_category on product.p_id=product_category.id LIMIT ".$this_page_first_result.' , '.$results_per_page);
                            $sql->execute();
                            while($rows=$sql->fetch(PDO::FETCH_ASSOC)){
                            ?>
                            <tr>
                                <td><?php echo $count++;?></td> 
                                <td><?php echo $rows['name'];?></td>
                                <td><?php echo $rows['title'];?></td>
                                <td><?php echo $rows['detail'];?></td> 
                                 <td><img src="<?php echo $rows['image'];?>" width="110" height="120" /></td> 
                                <td><a href="deleteproduct.php?id=<?php echo $rows['id'];?>"><i class="fa fa-trash fa-2x"></i></a></td>
                            </tr>
                           <?php }?>
                        </table>
                    </div>
                    <style>

#page ul{list-style-type:none;}
#page ul li{float:left; padding:5px 16px 3px 12px;; border:solid 1px #d8450b;}
#page ul li a{text-decoration:none;}

</style>
 <div class="row">
        <div class="col-md-12">
<div  id="page">
<ul>
<?php
for($page=1;$page<=$number_of_pages;$page++){
	?>
	<li>
	<?php
		echo '<a href="productitem.php?page='.$page.'">'.$page.'</a>';
		} ?> </li></ul></div>
        </div>
    </div>
                </div>
            </div>
        </div>
        
        <?php include 'footer.php';?>