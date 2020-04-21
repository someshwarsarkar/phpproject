 <?php require("config.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admins</title>
</head>

<body>
<?php
$src="SELECT * FROM adminlogin";
$rs=mysqli_query($con,$src) or die(mysqli_error($con));
if(mysqli_num_rows($rs)>0){
	?>
    <table cellpadding="5" cellspacing="0" border="1">
    <thead>
	<tr>
	<th colspan="4"><h2 style="color:green;">Admins</h2></th>
	</tr>
	<tr>
	<th>First Name</th>
	<th>Last name</th>
	<th>Email ID</th>
	<th>Password</th>
	</tr>
	</thead>
	<tbody>
	<?php
	while($rec=mysqli_fetch_assoc($rs)){
    	?>
        <tr>
		<td><?php echo $rec['first_name']; ?></td>
		<td><?php echo $rec['last_name']; ?></td>
		<td><?php echo $rec['email']; ?></td>
		<td><?php echo md5($rec['password']); ?></td>
		</tr>
		<?php
	}
	?>
    </tbody>
    </table>
	<?php 
	$rc="SELECT * FROM adminregister";
$s=mysqli_query($con,$rc) or die(mysqli_error($con));
if(mysqli_num_rows($s)>0){
	?>
    <table cellpadding="5" cellspacing="0" border="1">
    <thead>
	<tr>
	<th colspan="6"><h2 style="color:green;">Waiting For Approval</h2></th>
	</tr>
	<tr>
	<th>First Name</th>
	<th>Last name</th>
	<th>Email ID</th>
	<th>Pasword</th>
	<th>ADD</th>
	<th>Delete</th>
	</tr>
	</thead>
	<tbody>
	<?php
	while($ec=mysqli_fetch_assoc($s)){
    	?>
        <tr>
        <td><?php echo $ec['first_name']; ?></td>
		<td><?php echo $ec['last_name']; ?></td>
		<td><?php echo $ec['email_id']; ?></td>
		<td><?php echo md5($ec['password']);?></td>
		<td><a href="a_approve.php?ar_id=<?php echo $ec['ar_id']; ?>"><img src="approve.png"></a></td>
		<td><a href="adelete.php?ar_id=<?php echo $ec['ar_id']; ?>"><img src="delete.png"></a></td>
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