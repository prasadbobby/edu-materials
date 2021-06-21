<?php $conn=mysqli_connect('localhost','root','','edu-materials'); 
session_start();
?>

<?php
$sql_get1=mysqli_query($conn,"SELECT *from newmessages where read1=0 and rusername LIKE BINARY '$_SESSION[name]%'");
if(mysqli_num_rows($sql_get1)>0)
{
while($result =mysqli_fetch_assoc($sql_get1))
 {
echo '<a onclick="myFunc()" style="color: green; border: none;outline: none; text-transform:capitalize; font-weight:600;" class="dropdown-item text-primary" href="./notifications.php">'.$result['title'].'</a>';
echo '<div class="dropdown-divider"></div>';
 
 }
 }
else
{
 echo '<a style="border: none;outline: none;" class="dropdown-item text-primary font-weight-bold" href="./notifications.php" >
        &nbsp;&nbsp;Click here to see all Notifications</a>';
  }
  ?>


  