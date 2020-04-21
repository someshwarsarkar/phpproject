<?php require('config2.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Admin</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Patient Report</div>
      <div class="card-body">
       <form name="frm" method="post">
	   <table cellpadding="5">
	   <tr>
	   <td>Patient's Name</td>
	   <td><input type="name" name="pname" required placeholder="Enter Patient's Name" size="32"></td>
	   </tr>
	   <tr>
	   <td>Appointment Date</td>
	   <td><input type="date" name="date" required></td>
	   </tr>
	   <tr>
	   <td>Ailment's Type</td>
	   <td><input type="text" name="ail_type" required placeholder="Enter ailment's type" size="32"></td>
	   </tr>
	   <tr>
	   <td>Ailment Details</td>
	   <td><textarea name="ail_details" required></textarea></td>
	   </tr>
	   <tr>
	   <td>Doctor History</td>
	   <td><input type="name" name="dname" required placeholder="Enter corresponding doctor's name" size="32"></td>
	   </tr>
	   <tr>
	   <td>&nbsp;</td>
	   <td><input type="submit" name="submit" value="submit"></td>
	   </tr>
	   </table>
	   </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="dprofile.php">Back</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <?php
	if(isset($_POST['submit'])){
		$pname=$_POST['pname'];
		$date=$_POST['date'];
		$ail_type=$_POST['ail_type'];
		$ail_details=$_POST['ail_details'];
		$dname=$_POST['dname'];
		$sql="INSERT INTO patient(patient_name,appointment_date,ail_type,ail_details,doctor_history)
						  VALUES('$pname','$date','$ail_type','$ail_details','$dname')";
		$rs=mysqli_query($con,$sql) or die(mysqli_error($con));
		if($rs==1)
			header('location:dprofile.php?msg=Patient Report Submitted');
		else
			header('location:dprofile.php?msg=Try Again');
	}
  
  ?>
</body>

</html>
