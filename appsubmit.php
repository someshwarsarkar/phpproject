<?php require("config2.php"); ?>
<?php
	$pname=$_POST['pname'];
	$dname=$_POST['dname'];
	$mobile=$_POST['mobile'];
	$date=$_POST['date'];
	$time=$_POST['time'];
	$sql="INSERT INTO appointment(patient_name,doctor_name,mobile,appointment_date,appointment_time) 
		 VALUES('$pname','$dname','$mobile','$date','$time')";
	$res=mysqli_query($con,$sql) or die(mysqli_error($con));
	if($res==1)
		header('location:uprofile.php?msg=Appointment granted');
	else
		header('location:uregister.php?msg=Try again');
	
	
?>
