<?php require("config.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Appointment</title>
</head>

<body>
<?php
$src="SELECT * FROM appointment";
$rs=mysqli_query($con,$src) or die(mysqli_error($con));
if(mysqli_num_rows($rs)>0){
	?>
    <table cellpadding="5" cellspacing="0" border="2">
    <thead>
    <tr>
    <th>Patient's Name</th>
    <th>Mobile</th>
    <th>Doctor's Name</th>
    <th>Appointment Date</th>
    <th>Appointment Time</th>
    </tr>
    </thead>
    <tbody>
    <?php
	while($rec=mysqli_fetch_assoc($rs)){
    	?>
        <tr>
        <td><?php echo $rec['patient_name']; ?></td>
        <td><?php echo $rec['mobile']; ?></td>
        <td><?php echo $rec['doctor_name']; ?></td>
        <td><?php echo $rec['appointment_date']; ?></td>
        <td><?php echo $rec['appointment_time']; ?></td>
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
</body>
</html>