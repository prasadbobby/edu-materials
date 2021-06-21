<?php
  ob_start();
  session_start();
  ob_end_clean();

    if (isset($_SESSION["user_id"])) {
      $session_id=$_SESSION['user_id'];

    } else {
      ob_start();
      header("location:login.php");
      ob_end_clean();
    }
?>

                                                  <!-- 
                                                  . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . .
                                                  .   ☯ Source Code chusi em chesthav cheppu moosukuni login ayyi                   .
                                                      JNTUK materials download chesko ☯ ..:} 😜😁!                         .      .
                                                  .                                       .
                                                  .                                                                                 .
                                                  .                      uuuuuuu                                                    .
                                                  .                  uu$$$$$$$$$$$uu                                                .
                                                  .               uu$$$$$$$$$$$$$$$$$uu                                             .
                                                  .              u$$$$$$$$$$$$$$$$$$$$$u                                            .
                                                  .             u$$$$$$$$$$$$$$$$$$$$$$$u                                           .
                                                  .            u$$$$$$$$$$$$$$$$$$$$$$$$$u                   K E E P  C A L M       .
                                                  .            u$$$$$$$$$$$$$$$$$$$$$$$$$u                                          .
                                                  .            u$$$$$$"   "$$$"   "$$$$$$u                        A N D             .
                                                  .            "$$$$"      u$u       $$$$"                                          .
                                                  .             $$$u  😁   u$u  😁  u$$$                         U S E             .
                                                  .             $$$u      u$$$u      u$$$                                           .
                                                  .              "$$$$uu$$$   $$$uu$$$$"                         T H I S            .
                                                  .               "$$$$$$$"   "$$$$$$$"                                             .
                                                  .                 u$$$$$$$u$$$$$$$u                    E D U - M A T E R I A L S  .
                                                  .                  u$"$"$"$"$"$"$u                                                .
                                                  .       uuu        $$u$ $ $ $ $u$$       uuu                                      .
                                                  .      u$$$$        $$$$$u$u$u$$$       u$$$$                                     .
                                                  .       $$$$$uu      "$$$$$$$$$"     uu$$$$$$                                     .
                                                  .     u$$$$$$$$$$$uu    """""    uuuu$$$$$$$$$$                                   .
                                                  .     $$$$"""$$$$$$$$$$uuu   uu$$$$$$$$$"""$$$"                                   .
                                                  .      """      ""$$$$$$$$$$$uu ""$"""                                            .
                                                  .                uuuu ""$$$$$$$$$$uuu                                             .
                                                  .       u$$$uuu$$$$$$$$$uu ""$$$$$$$$$$$uuu$$$                                    .
                                                  .       $$$$$$$$$$""""           ""$$$$$$$$$$$"              EDU-Materials        .
                                                  .        "$$$$$"                      ""$$$$""           admin@edumaterials.tech  .
                                                  .          $$$"                         $$$$"                                     .
                                                  .                                                                                 .
                                                  .    This site is only for students and techy minds. So, my dear techies          .
                                                  .     don't try to check the vulnerabilities :).                                  .-->


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="refresh" content="7200; URL='./logout.php'" />
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="theme-color" content="#4e73df">
  <title> EDU Materials</title>
  <link href="images/logo-trans.png" rel="shortcut icon" type="image/x-icon">
  <!-- Custom fonts-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">


  <!-- Custom styles-->
  <link href="css-edu/edu-2.min.css" rel="stylesheet">

<!-- <p></p> -->

  <script src="https://apis.google.com/js/platform.js?onload=onLoad" async defer></script>
    
</head>
<style type="text/css">

.load-start{position:fixed;}.load-start{z-index:999999;}[class~=loader]:before,[class~=loader]:after{content:"";}.load-start{width:100%;}.load-start{background:#ffffffad;}.load-start{height:100%;}[class~=loader]:before,[class~=loader]:after,[class~=loader]{position:absolute;}[class~=loader]:before,[class~=loader]:after{width:70px;}[class~=loader]:after,[class~=loader]:before{height:4.375pc;}[class~=loader]{top:50%;}[class~=loader]:after,[class~=loader]:before{display:block;}[class~=loader]:after,[class~=loader]:before{top:calc(50% - 35px);}[class~=loader]:before,[class~=loader]:after{left:calc(50% - 35px);}[class~=loader]:before{border-top-width:.03125in;}[class~=loader]{left:50%;}[class~=loader]:before{border-top-style:solid;}[class~=loader]:before{border-top-color:#00bfff;}[class~=loader]:before{border-image:none;}[class~=loader]{transform:translate(-50%,-50%);}[class~=loader]{width:1.041666667in;}[class~=loader]{height:1.041666667in;}[class~=loader]:before,[class~=loader]:after{border-radius:100%;}[class~=loader]{border-radius:50%;}[class~=loader]:before,[class~=loader]:after{animation-delay:.2s;}[class~=loader]{border-bottom-width:.1875pc;}[class~=loader]{border-bottom-style:solid;}[class~=loader]{border-bottom-color:#4e73df;}[class~=loader]{border-image:none;}[class~=loader]{animation:anim 1s linear infinite;}[class~=loader]:after{border-top-width:.03125in;}[class~=loader]:after{border-top-style:solid;}[class~=loader]:after{border-top-color:#00bfff;}[class~=loader]:after{border-image:none;}@keyframes anim{from{transform:translate(-50%,-50%) rotate(0deg);}to{transform:translate(-50%,-50%) rotate(360deg);}}


/*  #context-menu{
    background: #fff;
    box-shadow: 2px 2px 5px rgba(0,0,0,.2);
    border-radius: 15px;
    padding: 15px;
    position: fixed;
    user-select: none;
    display: none;
    flex-direction: column;
    min-width: 20px;
    min-height: 20px;
    z-index: 100000;
    font-family: 'Rubik', sans-serif;
  }
  #context-menu.show{
    display: flex;
  }
  .separator{
    height: 2px;
    margin: 7.5px 5px;
    border-radius: 1px;
    background-color: rgba(0,0,0,.15);
  }
  .menu-head{
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: rgba(0,0,0,.1);
    padding: 10px;
    margin: 5px;
    border-radius: 10px;
    margin-bottom: 3px;
    transition: .5s;

  }
  .head-text{
    font-weight: 700;
    margin-left: 6px;
    transition: .5s;

  }
  .head-text:hover{
    color: #000;
  }
  .logo-menu{
    width: 30px;
    border-radius: 50%;
    pointer-events: none;
    
  }
  .button-container{
    display: flex;
    flex-direction: column;
    border-radius: 10px;
    transition: .5s;
    
  }
  .btn-data{
    font-weight: 700;
    font-size: 15px;
    background: transparent;
    border-radius: 5px;
    border: none;
    outline: none;
    padding: 5px 50px;
    margin: 2px;
    transition: .5s;


  }
  .btn-data:hover{
    cursor: pointer;
    color: #fff;
    background-color: #045de9;
    background-image: linear-gradient(315deg, #045de9 0%, #09c6f9 74%);  
    transition: .5s;
    
  }
  .btn-data:active{
    border: none;
    outline: none;
  }
  #out-click {
  height: 100vh;
  width: 100vw;
  position: fixed;
  top: 0;
  left: 0;
  z-index: 1;
  display: none;
}
*/

#context-menu {
  position:fixed;
  z-index:10000;
  user-select: none;
  font-family: 'Rubik', sans-serif;
  width:220px;
  height: 250px;
  background:#fff;
  box-shadow: 2px 2px 5px rgba(0,0,0,.2);
  border-radius:5px;
  transform:scale(0);
  transform-origin:top left;
}
#context-menu.active {
  transform:scale(1);
  transition:transform 300ms ease-in-out;
}
.menu-head{
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: rgba(0,0,0,.1);
    padding: 10px;
    margin: 5px;
    border-radius: 10px;
    margin-bottom: 3px;
    transition: .5s;

  }
  .head-text{
    font-weight: 700;
    margin-left: 6px;
    transition: .5s;
    color: #000;

  }
  .head-text:hover{
    color: #000;
  }
  .logo-menu{
    width: 30px;
    border-radius: 50%;
    pointer-events: none;
    
  }
  .button-container{
    display: flex;
    flex-direction: column;
    border-radius: 10px;
    transition: .5s;
    
  }

#context-menu button {
      font-weight: 700;
    font-size: 15px;
    background: transparent;
    border-radius: 5px;
    border: none;
    outline: none;
    padding: 5px 50px;
    margin: 2px;
    transition: .5s;

}
#context-menu .btn-data:hover{
    cursor: pointer;
    color: #fff;
    background-color: #045de9;
    background-image: linear-gradient(315deg, #045de9 0%, #09c6f9 74%);  
    transition: .5s;
    
  }
#context-menu hr {
  margin:2px 0px;
  border-color:rgba(0,0,0,.2);
}

</style>

<body id="page-top">
<div id="context-menu">
  <div class="menu-head">
    <img src="images/edu.png" class="logo-menu">
    <span class="head-text">@EDU Materials</span>
  </div>
  <div class="button-container">
    <button onclick="window.history.back(); return false;" class="btn-data">Back</button>
    <button onclick="window.history.forward(); return false;" class="btn-data">Forward</button>
    <button onclick="location.reload()" class="btn-data">Reload</button>
    <button onclick="window.print()" class="btn-data">Print</button>
  <hr>
    <button onclick="onClose()" class="btn-data">Close</button>
    
  </div>
</div>

  <!-- <div id="custom-cm">
  <div class="custom-cm__item">Item #1</div>
  <div class="custom-cm__item">Item #2</div>
  <div class="custom-cm__item">Item #3</div>
  <div class="custom-cm__divider"></div>
  <div class="custom-cm__item">Item #4</div>
</div> -->
<!--   <div id="context-menu" class="show">
        <div class="menu-head">
    <img src="images/edu.png" class="logo-menu">
    <span class="head-text">@EDU Materials</span>
  </div>
  <div class="separator"></div>
  <div class="button-container">
    <button onclick="window.history.back(); return false;" class="btn-data">Back</button>
    <button onclick="window.history.forward(); return false;" class="btn-data">Forward</button>
    <button onclick="location.reload()" class="btn-data">Reload</button>
  <div class="separator"></div>
    <button onclick="onClose()" class="btn-data">Close</button>

  </div>

</div>
      <div id="out-click"></div> -->

  <div class="load-start">
  <div class="loader">
    
  </div> 
</div>
  
  
  <!-- Page Wrapper -->
  <div id="wrapper">