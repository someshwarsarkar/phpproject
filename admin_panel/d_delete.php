<?php 
require('config.php');
 $id=$_GET['doctor_id'];
 
 ?>
 
 <?php 
$out="DELETE FROM doctor WHERE doctor_id=$id";
$p=mysqli_query($con,$out) or die(mysqli_error($con));
if($p==1)
header('location:doctor.php?msg=Doctor Suspended');
else
header('location:doctor.php?msg=Try Again');
	 ?>