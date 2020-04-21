 <?php require('config2.php'); ?>
 <?php
if(empty($_SESSION['info'])){
	header('location:ulogin.php');
}
?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>Medino</title>
	<style type="text/css">
.dv{
	width:500px;
	height:400px;
	float:left;
	margin-left:10px;
}
</style>

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
<div style="withd:100%; height:500px; background-image:url(../medino%20-%20Copy/assets/images/banner-bg.jpg); background-size:cover; padding-top50px;">
<h2>Hi <?php echo $_SESSION['info']['first_name'].' '.$_SESSION['info']['last_name'];?></h2>
<?php if(isset($_GET['msg']))
			echo $_GET['msg'];
		?>
<div class="dv">
<form name="frm" method="post" onSubmit="return validation();" action="appsubmit.php">
<table cellpadding="10">
<tr>
<td>Name</td>
<td><input type="name" name="pname" id="pname" placeholder="Enter Your Name"></td>
</tr>
<tr>
<td>Mobile No.</td>
<td><input type="text" name="mobile" id="mobile" placeholder="Enter your mobile no."></td>
</tr>
<tr>
<td>Doctor's Name</td>
<td><input type="name" name="dname" id="dname"  placeholder="Enter your required doctor"></td>
</tr>
<tr>
<td>Appointment Date</td>
<td><input type="date" id="date" name="date"></td>
</tr>
<tr>
<td>Appointment Time</td>
<td><input type="time" name="time" id="time"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td><input type="submit" name="submit" value="Take Appointment"></td>
</tr>
</table>
</form> 
<?php if(isset($_GET['msg'])){
	echo '<h3 style="color:red">'.'**'.$_GET['msg'].'</h3>';
}
?>
</div>
<div class="dv">
<?php
$src="SELECT * FROM sechedule";
$rs=mysqli_query($con,$src) or die(mysqli_error($con));
if(mysqli_num_rows($rs)>0){
	?>
    <table cellpadding="5" cellspacing="0" border="1">
    <thead>
	<tr>
	<th>Doctor's Name</th>
	<th>Specialist Of</th>
	<th>Day</th>
	<th>Time</th>
	</tr>
	</thead>
	<tbody>
	 <?php
	while($rec=mysqli_fetch_assoc($rs)){
    	?>
		<tr>
		<td><?php echo $rec['doctor_name']; ?></td>
		<td><?php echo $rec['specialist_of']; ?></td>
		<td><?php echo $rec['available_days']; ?></td>
		<td><?php echo $rec['slots']; ?></td>
		
		</tr>
		  <?php
	}
	?>
	
    </tbody>
    </table>
	
<?php
}
?>

	
</div>
<h2><a href="edituprofile.php">Edit Profile</a></h2><br>
<a href="ulogout.php"><button>Logout</button></a>
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
	<script type="text/javascript">
	
				function validation(){
				
				var pname=document.getElementById('pname').value;
				if(pname==""){
					alert('Enter Your Name');
					return false;
				}
				if(!isNaN(pname)){
					alert('Name must be alphabet');
					return false;
				}
				var mobile=document.getElementById('mobile').value;
				if(mobile==""){
					alert('Enter Mobile no.');
					return false;
				}
				if(isNaN(mobile)){
					alert('Mobile no. can`t be alphabet');
					return false;
				}
				var dname=document.getElementById('dname').value;
				if(dname==""){
					alert('Enter doctor`s name');
					return false;
				}
				if(!isNaN(dname)){
					alert('Doctor`s name must be alphabet');
					return false;
				}
				var date=document.getElementById('date').value;
				if(date==""){
					alert('Enter Appointment Date);
					return false;
				}
				var time=document.getElementById('time').value;
				if(time==""){
					alert('Enter Appointment Time');
					return false;
				}
				}
	</script>
</body>
</html>