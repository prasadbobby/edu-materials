<?php
include('includes/header.php'); 
include('includes/navbar.php');  
date_default_timezone_set("Asia/Calcutta");
?>
<?php include_once './notification/connection.php'; ?>
<?php
 if(isset($_GET['id']))
 {
	 $main_id=$_GET['id'];
	 $sql_update=mysqli_query($con,"UPDATE message set status='1' where id='$main_id'");
 }

?>
<!Doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"/>
  </head>
  <body>
  
    <div class="container mt-5">
	  <div class="row">
	  <table class="table" style="border-radius: 10px; box-shadow: 0px 5px 20px rgba(0,0,0,.5);">
		  <thead  style="background: #4e73df; color: #fff;">
			<tr>
			  <th scope="col">S.no</th>
			  <th scope="col">Name</th>
			  <th scope="col">Message</th>
			  <th scope="col">Date</th>
			  <!-- <th scope="col">Delete</th> -->
			</tr>
		  </thead>
		  <tbody id="read-refresh">
		  
		  <?php
		  $Sr_no=1;
		  $sql_get=mysqli_query($con,"SELECT *FROM Message WHERE status=0");
          while($main_result=mysqli_fetch_assoc($sql_get)):		  ?>
			<tr>
			  <th scope="row"><?php echo $Sr_no++; ?></th>
			  <td><?php echo $main_result['name']; ?></td>
			  <td><?php echo $main_result['message']; ?></td>
			  <td><?php echo $main_result['date']; ?></td>
			  <!-- <td><a href="delete.php?id=<?php echo $main_result['id'];?>" class="text-danger"><i class="fas fa-trash"></i></a></td> -->
			</tr>
			<?php endwhile ?>
		  </tbody>
	   </table>
	    </div>
	</div>
  
  </div>
<?php
include('includes/scripts.php');
include('includes/footer.php');
?>