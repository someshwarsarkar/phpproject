<?php 
require('config.php');
 $id=$_GET['app_id'];
 
 ?>
 
 <?php 
 $src="SELECT * from app_doc where app_id=$id";
 $rs=mysqli_query($con,$src) or die(mysqli_error($con));
	 $w=mysqli_fetch_assoc($rs);

 $a= $w['first_name'];
 $u= $w['last_name']; 
 $b= $w['password']; 
 $c= $w['photo']; 
 $d= $w['dob']; 
 $e= $w['doj'];
 $f= $w['gender']; 
 $g= $w['qualification']; 
 $h= $w['specialization']; 
 $i= $w['yoe']; 
 $j= $w['street']; 
 $k= $w['location']; 
 $l= $w['city']; 
 $m= $w['state']; 
 $n= $w['pincode']; 
 $o= $w['contact_no']; 
 $p= $w['email_id']; 
$in="INSERT INTO doctor(first_name,last_name,password,photo,dob,doj,gender,qualification,specialization,yoe,street,location,city,state,pincode,contact_no,email_id)
	 VALUES('$a','$u','$b','$c','$d','$e','$f','$g','$h',$i,'$j','$k','$l','$m',$n,$o,'$p')";
$er=mysqli_query($con,$in) or die(mysqli_error($con));
$out="DELETE FROM app_doc WHERE app_id=$id";
$p=mysqli_query($con,$out) or die(mysqli_error($con));
if($er==1 && $p==1)
header('location:doctor.php?msg=Approved');
else
header('location:doctor.php?msg=Not approved');
	 ?>