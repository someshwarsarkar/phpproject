
<?php require('config.php'); ?>
<?php

	$first_name=$_POST['first_name'];
	$last_name=$_POST['last_name'];
	$password=$_POST['password'];
	$dob=$_POST['dob'];
	$doj=$_POST['doj'];
	$gender=$_POST['gender'];
	$qualification=$_POST['qualification'];
	$specialization=$_POST['specialization'];
	$yoe=$_POST['yoe'];
	$street=$_POST['street'];
	$location=$_POST['location'];
	$city=$_POST['city'];
	$state=$_POST['state'];
	$pincode=$_POST['pincode'];
	$contact_no=$_POST['contact_no'];
	$email_id=$_POST['email_id'];

$fname=$_FILES['ff']['name'];
$fsize=$_FILES['ff']['size'];
$ftype=$_FILES['ff']['type'];
$fpath="upload_files/".rand(000000,999999)."-".$fname;
if(move_uploaded_file($_FILES['ff']['tmp_name'],$fpath)){
	$sql="INSERT INTO app_doc(first_name,last_name,password,photo,dob,doj,gender,qualification,specialization,yoe,street,location,city,state,pincode,contact_no,email_id)
		  VALUES('$first_name','$last_name','$password','$fpath','$dob','$doj','$gender','$qualification','$specialization','$yoe','$street','$location','$city','$state','$pincode','$contact_no','$email_id')";
	$res=mysqli_query($con,$sql) or die(mysqli_error($con));
	if($res==1){
		header('location:dregister.php?msg=Wait for approval of admin');
	}
	else{
		header('location:dregister.php?msg=Registration failed try again');
	}

}
?>