<?php

$con=mysqli_connect('localhost','root','','edu-materials');

if($con)
{
	echo '';
}
else
{
	echo mysqli_error($con);
}

?>