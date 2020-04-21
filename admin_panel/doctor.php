 <?php require("config.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Doctor</title>
</head>

<body>
<?php
$src="SELECT * FROM doctor";
$rs=mysqli_query($con,$src) or die(mysqli_error($con));
if(mysqli_num_rows($rs)>0){
	?>
    <table cellpadding="5" cellspacing="0" border="1">
    <thead>
	<tr>
	<th colspan="18"><h2>Doctors</h2></th>
	</tr>
    <tr>
    <th>First Name</th>
	<th>Last Name</th>
    <th>Password</th>
    <th>Photo</th>
    <th>DOB</th>
    <th>DOJ</th>
    <th>Gender</th>
    <th>Qualification</th>
    <th>Specializtion</th>
    <th>YOE</th>
    <th>Street</th>
	<th>Location</th>
	<th>City</th>
	<th>State</th>
	<th>Pincode</th>
	<th>Contact No.</th>
	<th>Email ID</th>
	<th>Suspend</th>
    </tr>
    </thead>
    <tbody>
    <?php
	while($rec=mysqli_fetch_assoc($rs)){
    	?>
        <tr>
        <td><?php echo $rec['first_name']; ?></td>
		<td><?php echo $rec['last_name']; ?></td>
        <td><?php echo md5($rec['password']); ?></td>
		 <td><img src="../<?php echo $rec['photo']; ?>" width="125" border="2"></td>
        <td><?php echo $rec['dob']; ?></td>
		<td><?php echo $rec['doj']; ?></td>
        <td><?php echo $rec['gender']; ?></td>
        <td><?php echo $rec['qualification']; ?></td>
        <td><?php echo $rec['specialization']; ?></td>
        <td><?php echo $rec['yoe']; ?></td>
		<td><?php echo $rec['street']; ?></td>
		<td><?php echo $rec['location']; ?></td>
		<td><?php echo $rec['city']; ?></td>
		<td><?php echo $rec['state']; ?></td>
		<td><?php echo $rec['pincode']; ?></td>
		<td><?php echo $rec['contact_no']; ?></td>
		<td><?php echo $rec['email_id']; ?></td>
        <td><a href="d_delete.php?doctor_id=<?php echo $rec['doctor_id']; ?>"><img src="delete.png"></a></td>
        </tr>
        <?php
	}
	?>
    </tbody>
    </table>
	<?php
$rc="SELECT * FROM app_doc";
$s=mysqli_query($con,$rc) or die(mysqli_error($con));
if(mysqli_num_rows($s)>0){
	?>
    <table cellpadding="5" cellspacing="0" border="1">
    <thead>
	<tr>
	<th colspan="19"><h2 style="color:red;">Waiting for approval</h2></th>
	</tr>
    <tr>
    <th>First Name</th>
	<th>Last Name</th>
    <th>Password</th>
    <th>Photo</th>
    <th>DOB</th>
    <th>DOJ</th>
    <th>Gender</th>
    <th>Qualification</th>
    <th>Specializtion</th>
    <th>YOE</th>
    <th>Street</th>
	<th>Location</th>
	<th>City</th>
	<th>State</th>
	<th>Pincode</th>
	<th>Contact No.</th>
	<th>Email ID</th>
	<th>Approval</th>
	<th>Suspend</th>
    </tr>
    </thead>
    <tbody>
    <?php
	while($ec=mysqli_fetch_assoc($s)){
    	?>
        <tr>
        <td><?php echo $ec['first_name']; ?></td>
		<td><?php echo $ec['last_name']; ?></td>
		<td><?php echo md5($ec['password']); ?></td>
		 <td><img src="../<?php echo $ec['photo']; ?>" width="125" border="2"></td>
        <td><?php echo $ec['dob']; ?></td>
		<td><?php echo $ec['doj']; ?></td>
        <td><?php echo $ec['gender']; ?></td>
        <td><?php echo $ec['qualification']; ?></td>
        <td><?php echo $ec['specialization']; ?></td>
        <td><?php echo $ec['yoe']; ?></td>
		<td><?php echo $ec['street']; ?></td>
		<td><?php echo $ec['location']; ?></td>
		<td><?php echo $ec['city']; ?></td>
		<td><?php echo $ec['state']; ?></td>
		<td><?php echo $ec['pincode']; ?></td>
		<td><?php echo $ec['contact_no']; ?></td>
		<td><?php echo $ec['email_id']; ?></td>
		<td><a href="d_approve.php?app_id=<?php echo $ec['app_id']; ?>"><img src="approve.png"></a></td>
        <td><a href="a_delete.php?app_id=<?php echo $ec['app_id']; ?>"><img src="delete.png"></a></td>
        </tr>
        <?php
	}
	?>
    </tbody>
    </table>
    <?php
}
?>

<?php
if(isset($_GET['msg'])){
	echo $_GET['msg'];
}
?>

    <?php
}
?>
</body>
</html>