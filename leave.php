<?php require('config2.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Leave</title>
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
      <div class="card-header">Login</div>
      <div class="card-body">
        <form name="frm" method="post">
		<table cellpadding="5">
	   <tr>
	   <td>Leave Form</td>
	   <td><input type="date" name="fdate" required></td>
	   </tr>
	   <tr>
	   <td>Leave To</td>
	   <td><input type="date" name="tdate" required></td>
	   </tr>
	   <tr>
	   <td>Reason</td>
	   <td><textarea name="reason" required></textarea></td>
	   </tr>
	   <tr>
	   <td>&nbsp;</td>
	   <td><input type="submit" name="submit" value="get approval"></td>
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
  $doctor_id=$_GET['doctor_id'];
	if(isset($_POST['submit'])){
		$fdate=$_POST['fdate'];
		$tdate=$_POST['tdate'];
		$reason=$_POST['reason'];
		
		$sql="INSERT INTO leave_status(doctor_id,leave_from,leave_to,reason)
						  VALUES('$doctor_id','$fdate','$tdate','$reason')";
		$rs=mysqli_query($con,$sql) or die(mysqli_error($con));
		if($rs==1)
			header('location:dprofile.php?msg=wait for approval');
		else
			header('location:dprofile.php?msg=Try Again');
	}
  
  ?>
</body>

</html>
