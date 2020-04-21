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
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Register an Account</div>
      <div class="card-body">
        
        <div class="text-center">
		<form name="frm" method="post" align="center" onSubmit="return validation();" >
		<table cellpadding="10">
		<tr>
		<td>Day</td>
		<td><input type="text" name="day" id="day" placeholder="Enter Day"></td>
		</tr>
		<tr>
		<td>Time</td>
		<td><input type="time" name="time" id="time"></td>
		</tr>
		<tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="submit" value="submit"></td>
		</table>
		
		</form>
        <a href="dlogout.php">Logout</a><br>
		 <a href="dprofile.php">back</a>
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
		$doctor_id=$_GET['doctor_id'];
		 $c="SELECT * from doctor where doctor_id=$doctor_id";
 $rsc=mysqli_query($con,$c) or die(mysqli_error($con));
	 $w=mysqli_fetch_assoc($rsc);

 $a= $w['first_name'];
 $u= $w['last_name'];
$doctor_name=$a.' '.$u; 
$specialist_of=$w['specialization'];
		$day=$_POST['day'];
		$time=$_POST['time'];
		$sql="INSERT INTO sechedule(doctor_id,doctor_name,specialist_of,available_days,slots) VALUES('$doctor_id','$doctor_name','$specialist_of','$day','$time')";
		$res=mysqli_query($con,$sql) or die(mysqli_error($con));
	if($res==1)
		header('location:dprofile.php?msg=Sechedule updated');
	else
		header('location:dprofile.php?msg=Registration failed try again');
		
		
	}
	
?>
<script type="text/javascript">
function validation()
{
				var date=document.getElementById('date').value;
				if(date==""){
					alert('Enter Date);
					return false;
				}
				var time=document.getElementById('time').value;
				if(time==""){
					alert('Enter Time');
					return false;
				}
}
				</script>
</body>


</html>
