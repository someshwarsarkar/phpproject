<?php 
require('config2.php');
?>
<?php unset($_SESSION['u_info']);
header('location:alogin.php');
?>