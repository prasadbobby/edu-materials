<?php
session_start();

?>

<html>
        <head>
                <meta name="google-signin-client_id" content="478138733320-akab5qmsgi9jjic6ps4vsei4vtb988th.apps.googleusercontent.com">
                <script src="https://apis.google.com/js/platform.js?onload=onLoad" async defer></script>
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link href="images/logo-trans.png" rel="shortcut icon" type="image/x-icon">


                <style type="text/css">
                   /* Source Code chusi em chesthav cheppu moosukuni login ayyi JNTUK materials download chesko */
                     *
                    {
                      margin: 0;
                      padding: 0;
                      box-sizing: border-box;
                    }
                    .g-signin2{

                    }
                    body
                    {
                      overflow: hidden;
                      height: 100vh;

                    }
                    section{
                      position: absolute;
                      background: url(images/google.jpg);
                      background-size: cover;
                      width: 200%;
                      height: 200%;
                      background-position: center;
                      transform: translate(-50%,-50%);
                      border-radius: 50%;
                      animation: animate 4s linear infinite;
                      pointer-events: none;
                    }
                    @keyframes animate{
                      0%{
                      transform: translate(-50%,-50%);
                      opacity: 1;
                      }
                      100%{
                      transform: translate(-50%,-1000%);
                      opacity: 0;
                      }
                    }
                  @media screen and (max-width: 900px){
                      .lot{
                         position: absolute;
                         top: 33%;
                         left: 45%;
                         transform: translate(-50%,-50%) rotate(-20deg);
                         border-radius: 50%;
                         width: 600px;
                         height: 600px;
                      }
                      .lot img
                      {
                        width: 100%;
                        height: 100%;
                      }
                      lottie-player{
                        position: absolute;
                        top: 33.6%;
                        left: 50%;
                        transform: translate(-50%,-50%);
                        z-index: -1;
                      }

                      .g-signin2{
                      position: absolute;
                      top: 50%;
                      left: 50%;
                      transform: translate(-50%,-50%);

                      
                    }
                    

                  }
                  @media screen and (min-width: 1200px){
                  .lot img
                      {
                        width: 0;
                        height: 0;
                      }
                    lottie-player{
                        position: absolute;
                        top: 37.5%;
                        left: 50%;
                        transform: translate(-50%,-50%);
                        z-index: -1;
                      }

                      .g-signin2{
                      position: absolute;
                      top: 50%;
                      left: 70%;
                      transform: translate(-50%,-50%);

                      
                    }

                    }

                    *,
                    *::before,
                    *::after{
                      padding: 0;
                      margin: 0;
                      box-sizing: inherit;
                    }

                    html{
                      box-sizing: border-box;
                    }

                    body{
                      min-height: 100vh;
                      font-family: sans-serif;
                      display: flex;
                      justify-content: center;
                      align-items: center;
                      color: #adafb6;
                    }

                    #button
                    {
                        position: absolute;
                        top: 50%;
                        left: 50%;
                        transform: translate(-50%,-50%);
                        border-radius: 60px;
                    }
                    .activate{
                      background: #5628ee;
                      padding: 12px;
                      display: flex;
                      border-radius: 22px;
                      color: #fff;
                      font-weight: 500;
                      cursor: pointer;
                      transition: .3s ease;
                      line-height: 20px;
                      text-decoration: none;
                    }

                    .activate span{
                      display: inline-block;
                      width: 20px;
                      height: 20px;
                      background: #fff;
                      border-radius: 50%;
                      position: relative;
                      overflow: hidden; 
                      margin-right: 4px;
                    }

                    .activate span svg{
                      position: absolute;
                      width: 12px;
                      height: 12px;
                      left: 50%;
                      top: 50%;
                      transform: translate(-50%, -50%);
                      z-index: 1;
                    }

                    .activate span svg:nth-child(1){
                      fill: #5628ee;
                      transition: .4s cubic-bezier(.175, .885, .32, 1.275);
                    }

                    .activate span svg:nth-child(2){
                      fill: #5628ee;
                      transform: translate(-50%, calc(-50% + 20px));
                      transition: .4s cubic-bezier(.175, .885, .32, 1.275);
                    }

                    .activate:hover{
                      box-shadow: 0 8px 24px rgba(86, 40, 238, .15);
                    }

                    .activate:hover span svg:nth-child(1){
                      transform: translate(-50%, calc(-50% - 20px));
                    }

                    .activate:hover span svg:nth-child(2){
                      transform: translate(-50%, -50%);
                    }

                    .activate:active{
                      transform: scale(.94);
                      box-shadow: 0 4px 16px rgba(62, 220 , 117, .18);
                    }

                    .activate p{
                      height: 20px;
                      width: 300px;
                      text-align: center;
                    }
                    @media screen and (max-width: 900px){
                      .activate p{
                      height: 20px;
                      width: 220px;
                      font-size: 11px;
                      text-align: center;
                      z-index: 10;
                    }
                    .activate{
                      background: #5628ee;
                      padding: 12px;
                      display: flex;
                      border-radius: 22px;
                      color: #fff;
                      font-weight: 500;
                      cursor: pointer;
                      transition: .3s ease;
                      line-height: 20px;
                      text-decoration: none;
                      z-index: 10
                    }
                  }
                </style>
        </head>
        <body>
   <!-- <div class="gooey-rec one" style="z-index: 100;"></div>
      <div class="gooey-rec" style="z-index: 100;"></div> -->
   <!-- <div class="lot">
      <img src="images/google.jpg">
      </div> -->
   <?php
      if(isset($_SESSION['USER_ID'])){
              ?>
   <a href="javascript:void(0)" onclick="logout()" class="activate">
      <span>
         <svg>
            <use xlink:href="#arrow">
         </svg>
         <svg>
            <use xlink:href="#check">
         </svg>
      </span>
      <p>Click here to Logout the Previous session.</p>
   </a>
   <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
      <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12" id="arrow">
         <path d="M2.7008908,5.37931459 L2.7008908,5.37931459 C2.9224607,5.60207651 3.2826628,5.60304283 3.50542472,5.38147293 C3.52232305,5.36466502 3.53814843,5.34681177 3.55280728,5.32801875 L5.34805194,3.02646954 L5.34805194,10.3480519 C5.34805194,10.7081129 5.63993903,11 6,11 L6,11 C6.36006097,11 6.65194806,10.7081129 6.65194806,10.3480519 L6.65194806,3.02646954 L8.44719272,5.32801875 C8.6404327,5.57575732 8.99791646,5.61993715 9.24565503,5.42669716 C9.26444805,5.41203831 9.28230129,5.39621293 9.2991092,5.37931459 L9.2991092,5.37931459 C9.55605877,5.12098268 9.57132199,4.70855346 9.33416991,4.43193577 L6.75918715,1.42843795 C6.39972025,1.00915046 5.76841509,0.960656296 5.34912761,1.32012319 C5.31030645,1.35340566 5.27409532,1.38961679 5.24081285,1.42843795 L2.66583009,4.43193577 C2.42867801,4.70855346 2.44394123,5.12098268 2.7008908,5.37931459 Z"></path>
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12" id="check">
         <path id="test" d="M4.76499011,6.7673683 L8.2641848,3.26100386 C8.61147835,2.91299871 9.15190114,2.91299871 9.49919469,3.26100386 C9.51164115,3.27347582 9.52370806,3.28637357 9.53537662,3.29967699 C9.83511755,3.64141434 9.81891834,4.17816549 9.49919469,4.49854425 L5.18121271,8.82537365 C4.94885368,9.05820878 4.58112654,9.05820878 4.34876751,8.82537365 L2.50080531,6.97362503 C2.48835885,6.96115307 2.47629194,6.94825532 2.46462338,6.93495189 C2.16488245,6.59321455 2.18108166,6.0564634 2.50080531,5.73608464 C2.84809886,5.3880795 3.38852165,5.3880795 3.7358152,5.73608464 L4.76499011,6.7673683 Z"></path>
      </symbol>
   </svg>
   <?php
      }else{
              ?>
   <div class="g-signin2" data-width="340" data-height="75" data-longtitle="true" data-onsuccess="gmailLogIn" id="button"></div>
   <?php
      }
      ?>
   <lottie-player src="https://assets9.lottiefiles.com/packages/lf20_5SVlky.json"  background="transparent" mode="bounce" speed="0.8"  style="width: 900px; height: 900px;"  loop autoplay></lottie-player>
   <script>
      function logout(){
          var auth2 = gapi.auth2.getAuthInstance();
          auth2.signOut();  
          jQuery.ajax({
                      url:'logout.php',
                      success:function(result){
                              window.location.href="index.php";
                      }
              });
          
      }
      
      function onLoad(){
             gapi.load('auth2',function (){
                    gapi.auth2.init();
      
             }); 
      }
      
      function gmailLogIn(userInfo){
              var userProfile=userInfo.getBasicProfile();
              
              jQuery.ajax({
                      url:'login_check.php',
                      type:'post',
                      data:'user_id='+userProfile.getId()+'&name='+userProfile.getName()+'&image='+userProfile.getImageUrl()+'&email='+userProfile.getEmail(),
                      success:function(result){
                        
                      // window.location.href="./dashboard";
                      setTimeout(function(){window.top.location="./dashboard"} , 4500);
      
                      }
              });
              const Toast = Swal.mixin({
                        toast: true,
                        position: 'top',
                        showConfirmButton: false,
                        timer: 4500,
                        timerProgressBar: true,
                        onOpen: (toast) => {
                          toast.addEventListener('mouseenter', Swal.stopTimer)
                          toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                      })
      
                      Toast.fire({
                        icon: 'success',
                        title: 'Signed in successfully'
                      })
              
      }
   </script>
   <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
   <script type="text/javascript">
      document.addEventListener("mousemove",function(e){
        var body = document.querySelector('body');
        var bubbles = document.createElement("section");
        var x = e.offsetX;
        var y = e.offsetY;
        bubbles.style.left = x+'px';
        bubbles.style.top = y+'px';
        var size = Math.random()*100;
        bubbles.style.width = 20+size+'px';
        bubbles.style.height = 20+size+'px';
        body.appendChild(bubbles);
      
        setTimeout(function(){
          bubbles.remove();
        },4000)
      })
   </script>
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
   <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</body>
</html>

