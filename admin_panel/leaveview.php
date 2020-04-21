<?php require("config.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Leave</title>
</head>

<body>
<?php
$src="SELECT * FROM leaves";
$rs=mysqli_query($con,$src) or die(mysqli_error($con));
if(mysqli_num_rows($rs)>0){
	?>
    <table cellpadding="5" cellspacing="0" border="2">
    <thead>
	<tr>
	<th colspan="4">Leave</th>
	</tr>
    <tr>
    <th>Doctor ID</th>
    <th>Leave From</th>
    <th>Leave To</th>
    <th>Reason</th>
    </tr>
    </thead>
    <tbody>
    <?php
	while($rec=mysqli_fetch_assoc($rs)){
    	?>
        <tr>
        <td><?php echo $rec['doctor_id']; ?></td>
        <td><?php echo $rec['leave_from']; ?></td>
        <td><?php echo $rec['leave_to']; ?></td>
        <td><?php echo $rec['reason']; ?></td>
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
$srcc="SELECT * FROM leave_status";
$rss=mysqli_query($con,$srcc) or die(mysqli_error($con));
if(mysqli_num_rows($rss)>0){
	?>
    <table cellpadding="5" cellspacing="0" border="2">
    <thead>
	<tr>
	<th colspan="5">Waiting For Leave</th>
	</tr>
    <tr>
    <th>Doctor ID</th>
    <th>Leave From</th>
    <th>Leave To</th>
    <th>Reason</th>
	<th>Approval</th>
    </tr>
    </thead>
    <tbody>
    <?php
	while($recc=mysqli_fetch_assoc($rss)){
    	?>
        <tr>
        <td><?php echo $recc['doctor_id']; ?></td>
        <td><?php echo $recc['leave_from']; ?></td>
        <td><?php echo $recc['leave_to']; ?></td>
        <td><?php echo $recc['reason']; ?></td>
		<td><a href="leaveapprove.php?leave_id=<?php echo $recc['leave_id']; ?>"><img src="approve.png"></a></td>
        </tr>
        <?php
	}
	?>
    </tbody>
    </table>
    <?php
}
?>
<h3><a href="tables.php">Back</a></h3>
<?php
if(isset($_GET['msg'])){
	echo $_GET['msg'];
}
?>
</body>
</html>