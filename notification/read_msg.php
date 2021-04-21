<?php include_once 'connection.php'; ?>
<?php
 if(isset($_GET['id']))
 {
	 $main_id=$_GET['id'];
	 $sql_update=mysqli_query($con,"UPDATE message set status='1' where id='$main_id'");
 }

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/own_styles.css">
    <title>Hello, world!</title>
  </head>
  <body>
  
    <div class="container mt-5">
	  <div class="row">
	  <table class="table">
		  <thead class="thead-dark">
			<tr>
			  <th scope="col">S.no</th>
			  <th scope="col">Name</th>
			  <th scope="col">Message</th>
			  <th scope="col">Date</th>
			  <!-- <th scope="col">Delete</th> -->
			</tr>
		  </thead>
		  <tbody>
		  
		  <?php
		  $Sr_no=1;
		  $sql_get=mysqli_query($con,"SELECT *FROM Message WHERE status=1");
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
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>