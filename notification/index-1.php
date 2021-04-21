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
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.10.12/dist/sweetalert2.min.css">
  <link href="../img/logo-trans.png" rel="shortcut icon" type="image/x-icon">
  <meta name="theme-color" content="#4e73df">


    <link rel="stylesheet" type="text/css" href="own_styles.css">
    <title>EDU Materials - Send Notifications</title>
  </head>
  <body>
        
     
    <div class="container" id="centre">
       <div class="row">
        <div class="col-sm-4"></div>
      <div class="col-sm-4">
         
          <form method="post">
            <div class="form-group">
            <label for="exampleInputEmail1">Subject</label>
            <input type="text" class="form-control"  name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="What is this about ?" autocomplete="off">
            <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Message</label>
              <textarea class="form-control" name="msg" id="exampleFormControlTextarea1" rows="8" placeholder="Say something.."></textarea>
            </div>
            
            <button type="submit" name="send" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-danger">Reset</button>
          </form>
        
      </div>
      <div class="col-sm-4"></div>
    </div>
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/sweetalert2@9.10.12/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/sweetalert2@9.10.12/dist/sweetalert2.min.js"></script>

  </body>
</html>