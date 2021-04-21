<?php include_once './notification/connection.php'; ?>

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
<?php
 if(isset($_GET['id']))
 {
	 $main_id=$_GET['id'];
	 $sql_update=mysqli_query($con,"UPDATE message set status='1' where id='$main_id'");
 }

?>