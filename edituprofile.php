<?php require('config2.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>User Registration</title>
		<script>
function check_email(str) {
    if (str == "") {
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("msg").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","checkuemail.php?email_id="+str,true);
        xmlhttp.send();
    }
}
</script>
	

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
<div style="withd:100%; height:100%; background-image:url(../medino%20-%20Copy/assets/images/banner-bg.jpg); background-size:cover; padding-top50px;">
<?php 
$user_id=$_SESSION['info']['user_id'];
$src="SELECT * FROM user WHERE user_id=$user_id";
$rs=mysqli_query($con,$src);
$rec=mysqli_fetch_assoc($rs);
?>
<form name="frm" method="get" action="editusubmit.php" onsubmit="return validation();>
	<table cellpadding="10" align="center">
	<tr>
	<td colspan="2" align="center"><h1>User Registration</h1></td>
	</tr>
	<tr>
	<td><h3>First Name</h3></td>
	<td><h4><input type="text" id="first_name" name="first_name" value="<?php echo $rec['first_name']; ?>"></h4></td>
	</tr>
	<tr>
	<td><h3>Last Name</h3></td>
	<td><h4><input type="text" id="last_name" name="last_name" value="<?php echo $rec['last_name']; ?>"></h4></td>
	
	</tr>
	<tr>
	<td><h3>Password</h3></td>
	<td><h4><input type="password" id="password" name="password" value="<?php echo $rec['password']; ?>"></h4></td>
	
	</tr>
	<tr>
	<td><h3>Confirm Password</h3></td>
	<td><h4><input type="password" id="cpassword" name="cpassword" value="<?php echo $rec['password']; ?>"></h4></td>
	
	</tr>
	<tr>
	<td><h3>DOB</h3></td>
	<td><h4><input type="date" id="dob" name="dob" value="<?php echo $rec['dob']; ?>""></h4></td>
	
	</tr>
	<tr>
	<td><h3>Gender</h3></td>
	<td><h4><input type="radio" id="sex" name="gender" value="male" <?php 
if($rec["gender"]=='male'){
echo "checked";
}
?>>Male</h4>
	<h4><input type="radio" id="sex" name="gender" value="female" <?php 
if($rec["gender"]=='female'){
echo "checked";
}
?>>Female</h4>
    </td>
	</tr>
	<tr>
	<td><h3>Street</h3></td>
	<td><h4><input type="text" id="street" name="street" value="<?php echo $rec['street']; ?>"></td>
	
	</tr>
	<tr>
	<td><h3>Location</h3></td>
	<td><h4><input type="text" id="location" name="location" value="<?php echo $rec['location']; ?>"></h4></td>
	
	</tr>
	<tr>
	<td><h3>City</h3></td>
	<td><h4><input type="text" id="city" name="city"  value="<?php echo $rec['city']; ?>"></h4></td>
	
	</tr>
	<tr>
	<td><h3>State</h3></td>
	<td><h4><input type="text" id="state" name="state" value="<?php echo $rec['state']; ?>"></h4></td>
	
	</tr>
	<tr>
	<td><h3>Pincode</h3></td>
	<td><h4><input type="text" id="pincode" name="pincode" value="<?php echo $rec['pincode']; ?>"></h4></td>
	
	</tr>
	<tr>
	<td><h3>Mobile no.</h3></td>
	<td><input type="text" id="mobile" name="mobile" value="<?php echo $rec['mobile']; ?>"></td>
	
	</tr>
	<tr>
	<td><h3>Email id</h3></td>
	<td><h4><input type="text" id="email_id" value="<?php echo $rec['email_id']; ?>" name="email_id" onBlur="check_email(this.value)"><label id="msg" ></label></h4></td>
	
	</tr>
    <tr>
	<td><h3><a href="ulogin.php">Go To Log In Page</h3></a></td>
    <td colspan="2" align="center"><h3><input type="submit" name="submit" value="Save Changes"></h3></td>
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
	
	<script type="text/javascript">
			function validation(){
				
				var first_name=document.getElementById('first_name').value;
				if(first_name==""){
					alert('Enter First Name');
					return false;
				}
				var fn=/^[a-zA-Z]{1,20}$/;
				if(!document.frm.first_name.value.match(fn)){
					alert('First name must be alphabet');
					return false;
				}
				var last_name=document.getElementById('last_name').value;
				if(last_name==""){
					alert('Enter Last Name');
					return false;
				}
				var ln=/^[a-zA-Z]{1,20}$/;
				if(!document.frm.last_name.value.match(ln)){
					alert('Last name must be alphabet');
					return false;
				}
				var password=document.getElementById('password').value;
				if(password==""){
					alert('Enter Password');
					return false;
				}
				if(password.length <6){
					alert('Password should be atleast 6 characters');
					return false;
				}
				var cpassword=document.getElementById('cpassword').value;
				if(cpassword==""){
					alert('R-enter Your Password');
					return false;
				}
				if(password!=cpassword){
					alert('Password Not Matching');
					return false;
				}
				var dob=document.getElementById('dob').value;
				if(dob==""){
					alert('Enter Date Of Birth');
					return false;
				}
				if(document.frm.sex[0].checked==false && document.frm.sex[1].checked==false)
				{
					alert('Specify gender');
					return false;
				}
				var street=document.getElementById('street').value;
				if(street==""){
					alert('Enter Street');
					return false;
				}
				if(!isNaN(street)){
					alert('street must be alphabet');
					return false;
				}
				var location=document.getElementById('location').value;
				if(location==""){
					alert('Enter Location');
					return false;
				}
				if(!isNaN(location)){
					alert('location must be alphabet');
					return false;
				}
				var city=document.getElementById('city').value;
				if(city==""){
					alert('Enter Your City');
					return false;
				}
				if(!isNaN(city)){
					alert('city must be alphabet');
					return false;
				}
				var state=document.getElementById('state').value;
				if(state==""){
					alert('Enter State');
					return false;
				}
				if(!isNaN(state)){
					alert('state must be alphabet');
					return false;
				}
				var pincode=document.getElementById('pincode').value;
				if(pincode==""){
					alert('Enter Pincode');
					return false;
				}
				if(isNaN(pincode)){
					alert('Pincode must be number');
					return false;
				}
				var mobile=document.getElementById('mobile').value;
				if(mobile==""){
					alert('Enter 10 digits Mobile Number');
					return false;
				}
				if((mobile.length)<10 ||(mobile.length)>10){
					alert('Enter 10 digits valid mobile number');
					return false;
				}
				if(isNaN(mobile)){
					alert('Enter 10 digits valid mobile number');
					return false;
				}
				var email_id=document.getElementById('email_id').value;
				if(email_id==""){
					
					alert('Enter Email ID');
					return false;
				}
				var y=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
				if(!document.frm.email_id.value.match(y)){
					alert('Enter valid email id');
					return false;
				}
				
}
	
	
	
	</script>
	
</body>
</html>