<?php require("config.php"); ?>
<?php
	$first_name=$_GET['first_name'];
	$last_name=$_GET['last_name'];
	$password=$_GET['password'];
	$dob=$_GET['dob'];
	$gender=$_GET['gender'];
	$street=$_GET['street'];
	$location=$_GET['location'];
	$city=$_GET['city'];
	$state=$_GET['state'];
	$pincode=$_GET['pincode'];
	$mobile=$_GET['mobile'];
	$email_id=$_GET['email_id'];
	$src="SELECT email_id FROM user WHERE email_id='$email_id'";
	$rs=mysqli_query($con,$src) or die(mysqli_error($con));
	if(mysqli_num_rows($rs)>0){
		header('location:ulogin.php?msg=You are already registered || Please log in...');
	}else{
	$sql="INSERT INTO user(first_name,last_name,password,dob,gender,street,location,city,
						  state,pincode,mobile,email_id) 
		 VALUES('$first_name','$last_name','$password','$dob','$gender','$street','$location','$city',
				'$state','$pincode','$mobile','$email_id')";
	$res=mysqli_query($con,$sql) or die(mysqli_error($con));
	if($res==1)
		header('location:ulogin.php?msg=Registration successfull || please log In...');
	else
		header('location:uregister.php?msg=Registration failed try again');
	}
	
?>
