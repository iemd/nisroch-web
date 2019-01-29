<?php include 'header.php'; include'admin/connection.php'; ?>

 <?php 
if (isset($_POST["submit"])) {
	//$msg=""; 
    $name=$_POST['name'];
    $mobile=$_POST['phone'];
    $email=$_POST['email'];
    $subject=$_POST['concern'];
    $message=$_POST['message'];
    
    $sql=$con->prepare("insert into contact(name,mobile,email,subject,message)values(:name,:mobile,:email,:subject,:message)");
	$sql->bindparam(':name', $name);
	$sql->bindparam(':mobile', $mobile);
	$sql->bindparam(':email', $email);
	$sql->bindparam(':subject', $subject);
	$sql->bindparam(':message', $message);
    $res=$sql->execute();
    
    $ToEmail = 'info@nisrochchemicals.com'; 
    $EmailSubject = 'Enquiry From NISROCH CHEMICALS Website: '; 
    $mailheader = "From: ".$_POST["email"]."\r\n"; 
    $mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
    $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
    $MESSAGE_BODY = "Name: ".$_POST["name"]."<br/>"; 
	
	  $MESSAGE_BODY .= "Mobile: ".$_POST["phone"]."<br/>";
      $MESSAGE_BODY .= "Email: ".$_POST["email"]."<br/>"; 
	  $MESSAGE_BODY .= "Concern: ".$_POST["concern"]."<br/>"; 
		
    $MESSAGE_BODY .= "Query: ".nl2br($_POST["message"]).""; 
    $result=mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) ; 
	if($result){
		//$msg = "Message sent";
		echo "<script>alert('sent successfully!')</script>";
		
		}
	else{
		//$msg = "Message Not sent";
		echo "<script>alert(' sorry sent not successfully!')</script>";
		} 
                
                
                $str = "Thankyou for contacting with NISROCH CHEMICALS PVT. LTD. Our representative will shortly be in touch with you. Team NCPL.";
$sno = urlencode("$mobile");

$url=("http://txtguru.in/imobile/api.php?username=nisrochchemicals&password=13196274&source=NISROC&dmobile=91"
        . "".$mobile."&message=Thankyou+for+contacting+with+NISROCH+CHEMICALS+PVT.+LTD.+Our+representative+will+shortly"
        . "+be+in+touch+with+you.+Team+NCPL.");
$data=@file_get_contents($url);
                
}
                ?>


<?php
if (isset($_POST["submit"])) {
    
    $email=$_POST['email'];
    
   $ToEmail = $email; 
    $EmailSubject = 'Enquiry From NISROCH CHEMICALS Website: '; 
    $mailheader = "From: info@nisrochchemicals.com\r\n"; 
    $mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
    $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
    $MESSAGE_BODY = "Welcome to Nisroch Chemical Pvt. Ltd. Contact you soon"; 
	
	 
    $result=mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) ; 
	if($result){
		//$msg = "Message sent";
		echo "<script>alert('sent successfully!')</script>";
		
		}
	else{
		//$msg = "Message Not sent";
		echo "<script>alert(' sorry sent not successfully!')</script>";
		} 
                
            $name=$_POST['name'];
    $mobile=$_POST['phone'];
    $email=$_POST['email'];
    $subject=$_POST['concern'];
    $message=$_POST['message'];
       $detail="Name:".$name." "."Mobile:".$mobile." "."Email:".$email." "."Concern:".$subject." "."Message:".$message;         
               /* $url=("http://txtguru.in/imobile/api.php?username=nisrochchemicals&password=13196274&source=NISROC&dmobile=918709767404&message=Name:$name");
        $data=@file_get_contents($url);	*/
    
   $ch = curl_init('https://www.txtguru.in/imobile/api.php?');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "username=nisrochchemicals&password=13196274&source=NISROC&dmobile=918709767404&message=$detail");
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
$data = curl_exec($ch);
                
    
}

?>

<div class="pages-header pt-180 pb-95 overlay gradient-overlay-2 bg-image-5">
<div class="container">
<div class="row">
<div class="col-xs-12 text-center">
<div class="page-title">
<h1 class="font-36 weight-bold montserrat uppercase white-color mb-20">Contact Us</h1>
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
<li>Contact</li>
</ul>
</div>
</div>
</div>
</div>
</div>
<style>
    .custom-input select{
        background: #f7f7f7 none repeat scroll 0 0;
    border: 0;
    font-weight: 300;
    color: #757575;
    border-radius: 0;
    font-size: 14px;
    }
</style>
<script>
    function validateForm(){
        
        var name=document.forms["form"]["name"].value;
      var x = document.forms["form"]["email"].value;
      var phone = document.forms["form"]["phone"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
        if (name==null || name=="")
{
	alert('please fill the name!');
  	return false;
}
else if(x==null || x==""){
   alert('please fill the Email!');
  	return false;
}
else if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=x.length) 
	{
            alert('Please Fill the valid email field!');
       
        return false;
    }
else if (phone==null || phone=="")
    {
   alert('please fill the Phone!');
  	return false;
}
else if (/^\d{10}$/.test(phone)) {
    // value is ok, use it
} else {
   alert('please fill the valid Phone number!');
  /*  number.focus()*/
    return false;
}
    }
</script>
<section class="contact-area contact-page white-bg section-pt">
<div class="container">
<div class="row">
<div class="col-xs-12">
<div class="plr-30">
<div class="contact-box white-bg">
<div class="left mobile-mb-30 tablet-mb-30 floatleft">
<div class="contact-form">
<form class="custom-input contact_form name-email" name="form" action="" onsubmit="return validateForm()" method="post">
<div class="row">
<div class="col-xs-12 col-sm-6">
<input type="text" id="contact_name" name="name" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" placeholder="Your Name" />

</div>
<div class="col-xs-12 col-sm-6">
<input type="email"  name="email" placeholder="Your Email" />
</div>
</div>
<div class="row">
<div class="col-xs-12 col-sm-6">
<input type="text" id="contact_phone" name="phone" placeholder="Phone" />
</div>
<div class="col-xs-12 col-sm-6">
    <select name="concern" class="form-control">
        <option value="">select concern type</option>
        <option value="Be Seller">Be Seller</option>
        <option value="Be Vendor">Be Vendor</option>
        <option value="Product Info">Product Info</option>
        <option value="Business with Us">Business with Us</option>
        <option value="Career With Us">Career With Us</option>
        <option value="Feedback Any">Feedback Any</option>
    </select>
</div>
</div>
<textarea name="message" id="contact_message" rows="4" placeholder="Message"></textarea>
<button class="font-14 btn we-regular uppercase mt-5" type="submit" name="submit">
Send Message
</button>
</form>
</div>
</div>
<div class="right floatright">
<div class="d-table">
<div class="d-table-cell">
<div class="info-box">
<div class="section-title text-left mb-20">
<h2 class="font-30 weight-bold uppercase mb-20">say hello</h2>
<div class="horizontal-line mb-20">
<div class="top"></div>
<div class="bottom"></div>
</div>
</div>
<ul class="contact-text clearfix">
<li>
<h5 class="font-16 mb-10 montserrat weight-regular">
Address: <span class="font-14 weight-light">B-707, Shri Ganesh Park, <br /> Goveli Road, Titwala-E <br /> Maharastra - 421605</span>
</h5>
</li>
<li>
<h5 class="font-16 no-margin montserrat weight-regular">
Phone: <span class="font-14 weight-light"><a class="montserrat weight-light" href="tel:+91-7302711356">+91-7302711356</a></span>
</h5>
</li>
<li>
<h5 class="font-16 no-margin montserrat weight-regular">
Email: <span class="font-14 weight-light"><a class="lowercase montserrat weight-light" href="cdn-cgi/l/email-protection.html#88ebe9faedc8e6e1fbfae7ebe0ebe0ede5e1ebe9e4fba6ebe7e5"><span class="__cf_email__" data-cfemail="573436253217393e242538343f343f323a3e34363b247934383a">[email&#160;protected]</span></a></span>
</h5>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>





<?php include 'footer.php'; ?>