<?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="edu-materials";

	$conn=mysqli_connect($servername, $username,$password, $dbname);
	if (!$conn) {
		die("Could not connect".mysqli_connect_error());
	} else {
		$name=test_input($_POST['name']);
		$phone=test_input($_POST['phone']);
		$email=test_input($_POST['email']);
		$comments=test_input($_POST['comments']);

		$sql="INSERT INTO contact_us(name,phone,email,comments)VALUES('$name','$phone','$email','$comments')";
		if (mysqli_query($conn,$sql)) {
			echo "Thanks! We’ll be in touch.";
		} else {
			echo "There was a problem..!";
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