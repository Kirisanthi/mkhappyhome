<?php
include('includes/config.php');
session_start();
error_reporting(0);
?>
<!DOCTYPE HTML>
<html>
<head>
<title>MKHappyHome || About us Page</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery-1.8.3.min.js"></script>
<script src="js/modernizr.custom.js"></script>
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
<link rel="shortcut icon" href="images/1.jpg">
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,300italic,400italic,700italic|Niconne' rel='stylesheet' type='text/css'>
</head>
<body>
<?php include_once('includes/header.php');?>
<div class="About-section">
    <div class="container">
        <h4 style="color:#2D6D4E">ABOUT US</h4>
        Welcome to MKHappyHome, where compassion meets care. Our mission is to provide a safe, nurturing, and comfortable environment for seniors to thrive. Located in the heart of [City/Region], we are dedicated to enhancing the quality of life for our residents through personalized care and attention.
        <h4 style="color:#2D6D4E">OUR MISSION</h4>
        At MKHappyHome, our mission is to offer a home-like atmosphere where seniors can live with dignity, respect, and independence. We strive to meet the physical, emotional, and social needs of our residents, ensuring they feel valued and cherished every day.
        <h4 style="color:#2D6D4E">OUR VISION</h4>
        We envision a community where seniors feel empowered and supported, living their golden years with joy and fulfillment. Our goal is to be the leading elder care home, recognized for our commitment to excellence and the well-being of our residents.
        <h4 style="color:#2D6D4E">OUR VALUE</h4>
        <ul>
            <li>Compassion: We treat each resident with kindness, understanding, and empathy.</li>
            <li>Respect: We honor the individuality and preferences of our residents, respecting their life experiences and choices.</li>
            <li>Excellence: We are committed to providing the highest standard of care, continuously improving our services to better serve our residents.</li>
            <li>Community: We foster a sense of belonging and community, encouraging social interactions and meaningful relationships among residents and staff.</li>
        </ul>	
    </div>
</div>
<?php include_once('includes/footer.php');?>
<script type="text/javascript">
    $(document).ready(function() {
        $().UItoTop({ easingType: 'easeOutQuart' });
    });
</script>
<a href="#home" id="toTop" class="scroll" style="display: block;">
    <span id="toTopHover" style="opacity: 1;"></span>
</a>
</body>
</html>
