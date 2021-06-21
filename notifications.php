
<?php
session_start();

include("includes/header.php");
include("includes/navbar.php");



?>

           <?php
    //     }
       // echo ($_SESSION[name]);
        $conn=mysqli_connect('localhost','root','','edu-materials');
        mysqli_query($conn,"update newmessages set read1='1' where rusername LIKE BINARY '$_SESSION[name]%'");

     ?>
       <!--dashboard area-->
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
                                 $res=mysqli_query($conn,"select * from newmessages where rusername LIKE BINARY '$_SESSION[name]%' or rusername='All' order by id desc");

                                  while ($row = mysqli_fetch_array($res)){
                                    //    $res1=mysqli_query($con,"select * from lib_registration where user_id='$row[susername]'");
                                       // while ($row1 = mysqli_fetch_array($res1)){
                                       //     // $name = $row1["name"];
                                       // }
                                        echo "<tr>";
                                        // echo "<td>"; echo $name; echo "</td>";
                                        echo "<td>"; echo $Sr_no++; echo "</td>";
                                        echo "<td>"; echo $row["title"]; echo "</td>";
                                        echo "<td>"; echo $row["msg"]; echo "</td>";
                                        echo "<td>"; echo $row["time"]; echo "</td>";
                                        echo "</tr>"; 
                                  }
                             ?>
                         </tbody>
	   </table>
	    </div>
	</div>
  
  </div>
<?php
include('includes/scripts.php');
include('includes/footer.php');
?>