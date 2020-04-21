<?php require('config2.php');

$email=$_REQUEST['email'];
$password=$_REQUEST['password'];
$src="SELECT * FROM doctor where email_id='$email' AND password='$password'";
$r=mysqli_query($con,$src) or die(mysqli_error($con));
if(mysqli_num_rows($r)>0){
	$sr=mysqli_fetch_assoc($r);
	$_SESSION['info']=$sr;
	header('location:dprofile.php');

}
else{
	header('location:dlogin.php?msg=Invalid email or password OR you are not approved by admin');
} 
?>