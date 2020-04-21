<?php 
require('config.php');
 $id=$_GET['app_id'];
 
 ?>
 
 <?php 
$out="DELETE FROM app_doc WHERE app_id=$id";
$p=mysqli_query($con,$out) or die(mysqli_error($con));
if($p==1)
header('location:doctor.php?msg=Not approved');
else
header('location:doctor.php?msg=Try Again');
	 ?>