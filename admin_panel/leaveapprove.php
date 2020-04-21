<?php require('config.php');
	  $leave_id=$_GET['leave_id'];
	  ?>
	  <?php 
 $src="SELECT * FROM leave_status WHERE leave_id=$leave_id";
 $rs=mysqli_query($con,$src) or die(mysqli_error($con));
	 $w=mysqli_fetch_assoc($rs);
	 $a=$w['doctor_id'];
	 $b=$w['leave_from'];
	 $c=$w['leave_to'];
	 $d=$w['reason'];
	 $in="INSERT INTO leaves(doctor_id,leave_from,leave_to,reason)
					  VALUES($a,'$b','$c','$d')";
$er=mysqli_query($con,$in) or die(mysqli_error($con));
$out="DELETE FROM leave_status WHERE leave_id=$leave_id";
$p=mysqli_query($con,$out) or die(mysqli_error($con));
if($er==1 && $p==1)
header('location:leaveview.php?msg=Approved');
else
header('location:leaveview.php?msg=Not approved');
	 ?>