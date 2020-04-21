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
        <form name="frm" method="post" action="asubmit.php">
		<table cellpadding="10">
			<tr>
			<td>First Name :-</td>
			<td><input type="name" name="first_name" id="first_name" placeholder="Enter first Name" size="50"></td>
			</tr>
			<tr>
			<td>Last Name :-</td>
			<td><input type="name" name="last_name" id="last_name" placeholder="Enter last Name" size="50"></td>
			</tr>
			<tr>
			<td>Email ID :-</td>
			<td><input type="text" name="email_id" id="email_id" placeholder="Enter Email ID" size="50"></td>
			</tr>
			<tr>
			<td>Password :-</td>
			<td><input type="password" name="password" id="password" placeholder="Enter password" size="50"></td>
			</tr>
			<tr>
			<td>Confirm Password :-</td>
			<td><input type="password" name="cpassword" id="cpassword" placeholder="Re-enter password" size="50"></td>
			</tr>
			<tr>
			
			<td><input type="submit" name="submit" value="Get Approval"></td>
			</tr>
			</table>
		</form>
        <div class="text-center">
          <a class="d-block small mt-3" href="login.php">Login Page</a>
          <a class="d-block small" href="forgot-password.php">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
