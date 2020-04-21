<?php
require("config.php");
$email_id=$_GET['email_id'];
$src="SELECT email_id FROM user WHERE email_id='$email_id'";
$rs=mysqli_query($con,$src)or die(mysqli_error($con));
if(mysqli_num_rows($rs)>0){
	echo '<h3 style="color:red;">'."	**You are already registered".'</h3>';
}
?>