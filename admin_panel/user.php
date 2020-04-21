 <?php require("config.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>User</title>
</head>

<body>
<?php
$src="SELECT * FROM user";
$rs=mysqli_query($con,$src) or die(mysqli_error($con));
if(mysqli_num_rows($rs)>0){
	?>
    <table cellpadding="5" cellspacing="0" border="2">
    <thead>
    <tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Password</th>
    <th>DOB</th>
    <th>Gender</th>
    <th>Street</th>
    <th>Location</th>
    <th>City</th>
    <th>State</th>
    <th>Pincode</th>
	<th>Mobile</th>
	<th>Email ID</th>
	<th>Delete</th>
	<th>Edit</th>
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
        <td><?php echo $rec['dob']; ?></td>
        <td><?php echo $rec['gender']; ?></td>
        <td><?php echo $rec['street']; ?></td>
        <td><?php echo $rec['location']; ?></td>
        <td><?php echo $rec['city']; ?></td>
		<td><?php echo $rec['state']; ?></td>
		<td><?php echo $rec['pincode']; ?></td>
		<td><?php echo $rec['mobile']; ?></td>
		<td><?php echo $rec['email_id']; ?></td>
        <td><a href="delete.php?user_id=<?php echo $rec['user_id']; ?>"><img src="delete.png"></a></td>
        <td><a href="update.php?user_id=<?php echo $rec['user_id']; ?>"><img src="update.png"></a></td>
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