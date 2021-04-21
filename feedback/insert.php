<?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="testing";

	$conn=mysqli_connect($servername, $username,$password, $dbname);
	if (!$conn) {
		die("Could not connect".mysqli_connect_error());
	} else {
		$name=test_input($_POST['name']);
		$phone=test_input($_POST['phone']);
		$email=test_input($_POST['email']);
		$comments=test_input($_POST['comments']);

		$sql="INSERT INTO feedback(name,phone,email,comments)VALUES('$name','$phone','$email','$comments')";
		if (mysqli_query($conn,$sql)) {
			echo "Your feedback has been recorded. Thank you..!";
		} else {
			echo "Oop's there was Problem. Please Try Again!";
		}
		mysqli_close($conn);
	}
	function test_input($data){
		$data=trim($data);
		$data=stripslashes($data);
		$data=htmlspecialchars($data);
		return $data;
		
	}





?>