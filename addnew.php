<?php
	include('conn.php');
	
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$address=$_POST['address'];
	$phone=$_POST['phone'];
	
	mysqli_query($conn,"insert into user (firstname, lastname, address,phone) values ('$firstname', '$lastname', '$address','$phone')");
	header('location:index.php');

?>