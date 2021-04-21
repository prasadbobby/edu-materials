<?php $conn=mysqli_connect('localhost','root','','testing'); 
session_start();
?>

<?php
  
  $sql_get=mysqli_query($conn,"SELECT * from newmessages where read1='0' and rusername LIKE BINARY '$_SESSION[name]%'");
  $count=mysqli_num_rows($sql_get);
  
  ?>

 <?php echo $count; ?>
<?php 
  // echo $count;
?>
<?php //echo "+"; ?>
