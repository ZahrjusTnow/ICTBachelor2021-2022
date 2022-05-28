<?php
	include('conn.php');
	
	$id=$_GET['id'];
	
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$address=$_POST['address'];
	$phone=$_POST['phone'];
	
	mysqli_query($conn,"update user set firstname='$firstname', lastname='$lastname', address='$address',phone='$phone' where userid='$id'");
	header('location:index.php');

?>