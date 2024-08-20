<?php
include('includes/config.php');
session_start();
error_reporting(0);

if(isset($_POST['submit']))
  {
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $message=$_POST['message'];
     
    $query=mysqli_query($con, "insert into tblcontact(FirstName,LastName,Phone,Email,Message) value('$fname','$lname','$phone','$email','$message')");
    if ($query) {
   echo "<script>alert('Your message was sent successfully!.');</script>";
echo "<script>window.location.href ='contact.php'</script>";
  }
  else
    {
       echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }

  
}
  ?>
<!DOCTYPE HTML>
<html>
<head>
<title>MKHappyHome || Contact Us Page</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!--Custom Theme files-->


<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</script>
<script src="js/jquery-1.8.3.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<!--start-smoth-scrolling-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
		
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
<!--start-smoth-scrolling-->
<!--webfonts-->
<link rel="shortcut icon" href="images/1.jpg">
	<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,300italic,400italic,700italic|Niconne' rel='stylesheet' type='text/css'>
	<!--webfonts-->

	<style>
  .errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
	</style>	
</head>
<body>
<!--header-->
	<?php include_once('includes/header.php');?>
	</div>	
</div>	
		 <!--start-content-->
		    <div class="contact_desc">
		        <div class="container">
					<div  class="row">
						<div class="col-md-8">
		        			<h3>Fill the Form to Contact Us</h3>

								<?php if($error){?><div class="errorWrap"><strong style="color:red; font: size 24px;">ERROR</strong>:
								<?php echo htmlentities($error); ?> </div><?php } 
								else if($msg){?><div class="succWrap"><strong style="color:green; font: size 24px;" >SUCCESS</strong>:
								<?php echo htmlentities($msg); ?> </div><?php }?>

			         		<div class="contact-form">
				  	  		 <form method="post">
					    	<div class="col-md-6">
						    	<span><label>First Name</label></span>
						    	<span><input required="true" name="fname" type="text" class="textbox"></span>
						    </div>
						    <div class="col-md-6">
						    	<span><label>Last Name</label></span>
						    	<span><input required="true" name="lname" type="text" class="textbox"></span>
						    </div>
						    <div class="col-md-6">
						    	<span><label>Contact Number</label></span>
						    	<span><input required="true" name="phone" pattern="[0-9]+" maxlength="10" type="text" class="textbox"></span>
						    </div>
						    <div class="col-md-6">
						    	<span><label>E-MAIL</label></span>
						    	<span><input required="" name="email" type="text" class="textbox"></span>
						    </div>
						   
					   
					        <div class="col-md-6">					    	
						    	<span><label>Message</label></span>
						    	<span><textarea required="true" name="message"> </textarea></span>
						    </div>
						   <div>
						   		<input type="submit" value="Submit " name="submit" />
						  </div>
					    </form>
					    <!-- <div class="clearfix"></div> -->
				  </div>
				</div>
				 <div class="col-md-4">
				 	<div class="company_address">
													<?php

							$ret=mysqli_query($con,"select * from tblpage where PageType='contactus' ");
							$cnt=1;
							while ($row=mysqli_fetch_array($ret)) {

							?>
				     	<h3>Contact Details</h3>
						<p>Address:<?php  echo $row['PageDescription'];?></p>
				   		<p>Phone:<?php  echo $row['MobileNumber'];?></p>
				   		<p>Timing: <?php  echo $row['Timing'];?></p>
				 	 	<p>Email: <span><a href="mailto:example@email.com"><?php  echo $row['Email'];?></a></span></p><?php } ?>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2480.24367395998!2d-0.37909728852553815!3d51.563766306467414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4876132cdb24b3cf%3A0x46dc2b9f8b8d6085!2s35%20Leamington%20Cres%2C%20Harrow%20HA2%209HH!5e0!3m2!1sen!2suk!4v1722097423961!5m2!1sen!2suk" width="200" height="100" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

				     </div>
	
	                </div>	
				</div>
	             </div>  
	          </div>
	<!--/start-footer-->
	<?php include_once('includes/footer.php');?>
								<script type="text/javascript">
									$(document).ready(function() {
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
					<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>



</body>
</html>		