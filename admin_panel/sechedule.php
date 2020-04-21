<?php
require('config2.php');
$src="SELECT * FROM sechedule";
$rs=mysqli_query($con,$src) or die(mysqli_error($con));
if(mysqli_num_rows($rs)>0){
	?>
    <table cellpadding="5" cellspacing="0" border="1">
    <thead>
	<tr>
	<th>Doctor's Name</th>
	<th>Specialist Of</th>
	<th>Day</th>
	<th>Time</th>
	</tr>
	</thead>
	<tbody>
	 <?php
	while($rec=mysqli_fetch_assoc($rs)){
    	?>
		<tr>
		<td><?php echo $rec['doctor_name']; ?></td>
		<td><?php echo $rec['specialist_of']; ?></td>
		<td><?php echo $rec['available_days']; ?></td>
		<td><?php echo $rec['slots']; ?></td>
		
		</tr>
		  <?php
	}
	?>
	
    </tbody>
    </table>
	
<?php
}
?>
 