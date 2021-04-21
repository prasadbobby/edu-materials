<?php 
 
 include_once 'connection.php';
 if (isset($GET['ID']))
 {
	 $delete_id=$GET['id'];
	 
	 $sql_delete=mysqli_query($con,"DELETE FROM message where id='$delete_id'");
	 if($sql_delete)
	 {
		 readdir('location: read_msg.php');
	 }
	 else
	 {
		 echo mysqli_error($con);
	 }
 }




?>