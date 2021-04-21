<!DOCTYPE html>
<html>
<head>
	<title>EDU Materials - Feedback</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
  <link href="../img/logo-trans.png" rel="shortcut icon" type="image/x-icon">
  <meta name="theme-color" content="#4e73df">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <style type="text/css">
    #success{
      width: 100%;
      text-align: center;
      color: #06bb06;
      margin-top: 10px;
      font-size: 15px;
    }
    /* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;

  </style>
</head>
<body>
  <div class="bg-wrap">
  
  <div class="gooey-rec one"></div>
  <div class="gooey-rec"></div>

	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">

<script type="text/javascript">
  document.write(unescape('%3Clottie-player%20src%3D%22https%3A//assets3.lottiefiles.com/packages/lf20_zJkn1j.json%22%20%20background%3D%22transparent%22%20%20speed%3D%221%22%20%20loop%20%20autoplay%3E%3C/lottie-player%3E'))
</script>
		</div>
		<div class="login-content">
			<form action="insert.php" method="POST" onsubmit="return formSubmit();" id="email-form">
				<img src="img/avatar.svg">
				<a href="../dashboard"><h2 class="title">EDU Materials</h2></a>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Name</h5>
           		   		<input type="text" class="input" id="name" autocomplete="off" name="name" required="">
           		   </div>
           		</div>
              <div class="input-div one">
                 <div class="i">
                    <i class="fas fa-phone"></i>
                 </div>
                 <div class="div">
                    <h5>Phone</h5>
                    <input type="number" class="input" id="name" autocomplete="off" name="phone" required="">
                 </div>
              </div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-envelope-open"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Email</h5>
           		    	<input type="email" class="input" id="email" autocomplete="off" name="email" required="">
            	   </div>
            	</div><div class="input-div pass">
                 <div class="i"> 
                    <i class="fas fa-paper-plane"></i>
                 </div>
                 <div class="div">
                    <h5>Feedback</h5>
                    <input type="text" class="input" id="body" autocomplete="off" name="comments" required="">
                 </div>
              </div>
            	
            	<input type="submit" value="Submit" class="btn" data-wait="Please wait..." class="submit-button w-button">
              <h3 id="success"></h3>
            </form>
        </div>
    </div>
  </div>
    <script type="text/javascript" src="js/main.js"></script>

    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script type="text/javascript">
    function formSubmit(){
      $.ajax({
        type:'POST',
        url:'insert.php',
        data:$('#email-form').serialize(),
        success:function(response){
          $('#success').html(response);
        }
      });
      var form=document.getElementById('email-form').reset();
      return false;
    }
</script>


 <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

</body>
</html>
