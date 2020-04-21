<?php require('config2.php'); ?>
<?php $email=$_POST['email'];
$password=$_POST['password'];
$src="SELECT * FROM adminlogin WHERE email='$email' AND password='$password'";
$rc=mysqli_query($con,$src) or die(mysqli_error($con));
if(mysqli_num_rows($rc)>0){
	$rec=mysqli_fetch_assoc($rc);
	$_SESSION['u_info']=$rec;
	header('location:index.php');
	
}
else{
	header('location:alogin.php?msg=Invalid email or password');
}
?>
