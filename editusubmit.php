<?php 
require('config2.php');
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
		$upd="UPDATE user SET first_name='$first_name',last_name='$last_name',password='$password',dob='$dob',gender='$gender',
			  street='$street',location='$location',city='$city',state='$state',pincode='$pincode',mobile='$mobile',email_id='$email_id' WHERE user_id='$user_id'";
		$res=mysqli_query($con,$upd) or die(mysqli_error($con));
		if($res==1)
			header('location:ulogin.php?msg=Update Completed');
		else
			header('location:uprofile.php?msg=Update Failed');
	
	?>