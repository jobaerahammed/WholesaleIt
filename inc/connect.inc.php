<?php 
	$con=mysqli_connect("localhost","root","") or die("Couldn't connet to SQL server");
	mysqli_select_db($con, "wholesaleit") or die("Couldn't select DB");
?>