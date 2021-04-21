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

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <link href="../img/logo-trans.png" rel="shortcut icon" type="image/x-icon">
  <meta name="theme-color" content="#4e73df">
    <title>EDU Materials - Send Notifications</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat'><link rel="stylesheet" href="./style.css">

</head>
<body>
<div class="section is-medium"> 

  <div class="container">

    <div class="columns">
      <div class="column is-6 is-offset-3">

        <div class="box">
          <header class="header">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQzlDPRr1xSW0lukY2EmVpAx5Ye1S8H5luUVOK2IqFdcsjCDQxK">
          </header>
          <div class="body">
    <form method="post">

            <button type="button" class="button is-primary is-save" name="send">Send</button>

              <div class="field">
                <label>Subject</label>
                <div class="control">
                  <input type="text" class="input" placeholder="What is this about?" name="name">
                </div>
              </div>
              <div class="field">
                <label>Message</label>
                <div class="control">
                  <textarea class="textarea" placeholder="Say something..." name="msg"></textarea>
                </div>
              </div>
            </form>
            <div class="success-block is-hidden">
              <div class="inner">
                <div class="dot"></div>
                <div class="caption">
                  <div class="wrap has-text-centered">
                    <i data-feather="check"></i>
                    <h3>Your message was sent !</h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="reset has-text-centered is-hidden">
      <button type="button" class="button is-medium">Reset</button>
    </div>

  </div>
</div>

<a href="https://cssninja.io" class="link-button">
  <img src="https://cssninja.io/storage/app/media/Icons/cssninja-icon.svg">
</a>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.7.3/feather.min.js'></script><script  src="./script.js"></script>

</body>
</html>
