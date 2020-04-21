<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>Medino</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/x-icon">

    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/animate-3.7.0.css">
    <link rel="stylesheet" href="assets/css/font-awesome-4.7.0.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-4.1.3.min.css">
    <link rel="stylesheet" href="assets/css/owl-carousel.min.css">
    <link rel="stylesheet" href="assets/css/jquery.datetimepicker.min.css">
    <link rel="stylesheet" href="assets/css/linearicons.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div style="width:100%; height:150px; background-color:#CCC;">

    <!-- Header Area Starts -->
   <header class="header-area">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 d-md-flex">
                    <h6 class="mr-3"><span class="mr-2"><i class="fa fa-mobile"></i></span> call us now! +1 305 708 2563</h6>
                    <h6 class="mr-3"><span class="mr-2"><i class="fa fa-envelope-o"></i></span> medical@example.com</h6>
                    <h6><span class="mr-2"><i class="fa fa-map-marker"></i></span> Find our Location</h6>
                </div>
                <div class="col-lg-3">
                    <div class="social-links">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="header" id="home">
        <div class="container">
            <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
                <a href="home.php"><img src="assets/images/logo/logo.png" alt="" title="" /></a>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                       <li class="menu-active"><a href="home.php">Home</a></li>
                        <li><a href="departments.php">departments</a></li>
                        <li><a href="ulogin.php">Log in</a></li>
                        <li class="menu-has-children"><a href="">Doctors</a>
                            <ul>
                                <li><a href="dlogin.php">Log In</a></li>
                                <li><a href="dregister.php">Register</a></li>
								<li><a href="doctors.php">Doctor Details</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.php">Contact</a></li>			          				          
                    </ul>
            </nav><!-- #nav-menu-container -->		    		
            </div>
        </div>
    </div>
</header>
<!-- Header Area End -->
	</div>
	<div style="withd:100%; height:100%; background-image:url(../medino%20-%20Copy/assets/images/banner-bg.jpg); background-size:cover; padding-top50px; action="dlogincode.php"">
	<?php if(isset($_GET['msg']))
		echo '<h4 style="color:green">'.$_GET['msg'].'</h4>'; ?>
<form method="post" name="frm" action="dlogincode.php">
	<table cellpadding="5"  align="center">
	<tr>
	<td align="center"><h1>Doctor's Log In</h1></td>
	</tr>
	<tr>
	<td><h2>Email</h2></td>
	<td><h3><input type="email" name="email" required placeholder="Enter registered email id"></h3></td>
	</tr>
	<tr>
	<td><h2>Password</h2></td>	
	<td><h3><input type="password" name="password" requierd placeholder="Enter password"></h3></td>
	</tr>
	<tr>
	<td>&nbsp;</td>
	<td><h3><input type="submit" name="login" value="Login"></h3></td>
	</tr> 
	<tr>
	<td colspan="2" align="center"><h3>If you are new here please register <a href="dregister.php">Click here</a></h3></td>
	</tr>
	<tr>
	<td colspan="2" align="center"><h3><a href="dregister.php">Forgot password</a></h3></td>
	</tr>
	
	</table>
	</form>
	
</div>
<!-- Footer Area Starts -->
    <footer class="footer-area section-padding">
        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-xl-2 col-lg-3">
                        <div class="single-widget-home mb-5 mb-lg-0">
                            <h3 class="mb-4">top products</h3>
                            <ul>
                                <li class="mb-2"><a href="#">managed website</a></li>
                                <li class="mb-2"><a href="#">managed reputation</a></li>
                                <li class="mb-2"><a href="#">power tools</a></li>
                                <li><a href="#">marketing service</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-5 offset-xl-1 col-lg-6">
                        <div class="single-widget-home mb-5 mb-lg-0">
                            <h3 class="mb-4">newsletter</h3>
                            <p class="mb-4">You can trust us. we only send promo offers, not a single.</p>  
                            <form action="#">
                                <input type="email" placeholder="Your email here" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email here'" required>
                                <button type="submit" class="template-btn">subscribe now</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-3 offset-xl-1 col-lg-3">
                        <div class="single-widge-home">
                            <h3 class="mb-4">instagram feed</h3>
                            <div class="feed">
                                <img src="assets/images/feed1.jpg" alt="feed">
                                <img src="assets/images/feed2.jpg" alt="feed">
                                <img src="assets/images/feed3.jpg" alt="feed">
                                <img src="assets/images/feed4.jpg" alt="feed">
                                <img src="assets/images/feed5.jpg" alt="feed">
                                <img src="assets/images/feed6.jpg" alt="feed">
                                <img src="assets/images/feed7.jpg" alt="feed">
                                <img src="assets/images/feed8.jpg" alt="feed">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <span>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</span>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="social-icons">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->
 <!-- Javascript -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="assets/js/vendor/bootstrap-4.1.3.min.js"></script>
    <script src="assets/js/vendor/wow.min.js"></script>
    <script src="assets/js/vendor/owl-carousel.min.js"></script>
    <script src="assets/js/vendor/jquery.datetimepicker.full.min.js"></script>
    <script src="assets/js/vendor/jquery.nice-select.min.js"></script>
    <script src="assets/js/vendor/superfish.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I"></script>
    <script src="assets/js/vendor/gmaps.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>