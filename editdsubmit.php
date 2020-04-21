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
	$upd="UPDATE doctor SET first_name='$first_name',last_name='$last_name',password='$password',photo='$fpath',dob='$dob',doj='$doj',gender='$gender',
							qualification='$qualification',specialization'$specialization',yoe='$yoe',street='$street',location='$location',
							city='$city',state='$state',pincode='$pincode',contact_no='$contact_no',email_id='$email_id' WHERE doctor_id=$doctor_id";
	$res=mysqli_query($con,$upd) or die(mysqli_error($con));
	if($res==1)
		header('location:dlogin.php?msg=Update Successfull');
	else
		header('location:dlogin.php?msg=Update Unsuccessfull');
}
?>