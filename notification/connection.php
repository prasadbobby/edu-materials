<?php

$con=mysqli_connect('localhost','root','','testing');

if($con)
{
	echo '';
}
else
{
	echo mysqli_error($con);
}

?>