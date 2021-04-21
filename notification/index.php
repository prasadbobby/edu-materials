<?php

// include('../includes/header.php'); 
?>
<?php

include_once 'connection.php';
date_default_timezone_set("Asia/Calcutta");

if(isset($_POST['send']))
{
  $name=$_POST['name'];
    $msg=$_POST['msg'];
  $date=date('y.m.d h:i:s');
  $sql_insert=mysqli_query($con,"INSERT INTO message(name,message,date) VALUES('$name','$msg','$date')");
  if($sql_insert)
  {
    echo "<script> alert ('message send successfully');</script>";
  }
  else
  {
    echo mysqli_error($con);
    exit;
  }
}

?>

<!Doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.10.12/dist/sweetalert2.min.css">
  <link href="../img/logo-trans.png" rel="shortcut icon" type="image/x-icon">
  <meta name="theme-color" content="#4e73df">
  <style>

#count{
	border-radius:50%;
	position:relative;
	top:-10px;
	left:-10px;
}

#centre{
	position:absolute;
	top:50%;
	left:50%;
	transform:translate(-50%,-50%);
}

</style>

    <link rel="stylesheet" type="text/css" href="own_styles.css">
    <title>EDU Materials - Send Notifications</title>
  </head>
  <body>


<div class="container">

<!-- Outer Row -->
<div class="row justify-content-center">

  <div class="col-xl-6 col-lg-6 col-md-6">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Send a Notfication..!</h1>
                
              </div>
 
                <form class="user" method="POST" action="" name="form1" enctype="multipart/form-data">
                <?php
							date_default_timezone_set("Asia/Kolkata");
							$time= date("Y-m-d h:i:sa");
							if (isset($_POST["submit"])) {
								$title  = $_POST["title"];
								$msg    = $_POST["msg"]; 
								if ($title == "" | $msg =="" ) {
									echo "<span style='color: red;'><b>Error !</b> Feild mustn't be empty</span>";
								}else{
									$sql = mysqli_query($con, "insert into newmessages values('','','$_POST[rusername]','$_POST[title]','$_POST[msg]','0','$time') ");
									echo "<span style='color: green; margin-bottom: 10px;'><b>Success !</b>Message send successfully</span>";
									if(!$sql){
										echo "<span style='color: red; margin-bottom: 10px;'><b>Warning !</b>Message can't be sent</span>";	
									}
								}	
							}
						?>
                    
                <div class="form-group">
                    <label for="exampleInputEmail1">Select</label>
                    <select class="custom-select" name="rusername">
                    <?php 
                                             $res= mysqli_query($con, "select * from user");
                                                
                                                while($row=mysqli_fetch_array($res)){
                                                    ?><option value="<?php echo $row["name"]?>">
                                                    <?php  echo $row["name"]. " (".$row["email"].")"; ?>
                                                    </option><?php
                                                } 
                                           ?>
                    <option value="All">All</option>       
                     </select>
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Subject</label>
                    <input type="text" name="title" class="form-control" placeholder="What is this about..?" autocomplete="off">
                    </div>
                    <div class="form-group">
              <label for="exampleFormControlTextarea1">Message</label>

                    <textarea class="form-control" name="msg" rows="8" placeholder="Say something.."></textarea>
                    </div>
                            
            
                    <button type="submit" name="submit" class="btn btn-primary btn-user btn-block font-weight-bold" style="border-radius: 50px"> Submit </button>
                    <hr>
                    <button type="reset" name="reset" class="btn btn-danger btn-user btn-block" style="border-radius: 50px"> Reset </button>
                    <hr>
                </form>


            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>

</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/sweetalert2@9.10.12/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/sweetalert2@9.10.12/dist/sweetalert2.min.js"></script>

  </body>
</html>
<?php
// include('../includes/scripts.php'); 
?>