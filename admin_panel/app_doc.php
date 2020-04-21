 <?php require("config.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Doctor</title>
</head>

<body>
<?php
$src="SELECT * FROM app_doc";
$rs=mysqli_query($con,$src) or die(mysqli_error($con));
if(mysqli_num_rows($rs)>0){
	?>
    <table cellpadding="5" cellspacing="0" border="2">
    <thead>
    <tr>
    <th>Doctor's Name</th>
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
	while($rec=mysqli_fetch_assoc($rs)){
    	?>
        <tr>
        <td><?php echo $rec['doctor_name']; ?></td>
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
		<td><a href="d_approve.php?app_id=<?php echo $rec['app_id']; ?>"><img src="approve.png"></a></td>
        <td><a href="a_delete.php?app_id=<?php echo $rec['app_id']; ?>"><img src="delete.png"></a></td>
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
</body>
</html>