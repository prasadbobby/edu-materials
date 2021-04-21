  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/edu.min.js"></script>

  

 <script type="text/javascript">
 $(document).ready(function () {
     $('body').bind('cut copy paste', function (e) {
         e.preventDefault();
     });
    
 //     $("body").on("contextmenu",function(e){
 //         return false;
 //     });
 });
</script>
 <!-- <script type="text/javascript">

  const contextMenu = document.getElementById('context-menu');
  const outClick = document.getElementById('out-click')

  const width = contextMenu.offsetWidth, height = contextMenu.offsetHeight;
  contextMenu.classList.remove('show');


  document.addEventListener('contextmenu', event => {
    event.preventDefault();

    const padding = 20;
    let x = event.clientX, y = event.clientY;

    //prevent overflowing on x
    if(x < padding) x = padding;
    let maxX = window.innerWidth - width - padding

    if(x > maxX) x = maxX;


      //prevent overflowing on y

    if (y < padding) y = padding;

    let maxY = window.innerHeight - height - padding
    if (y > maxY) y = maxY;

    contextMenu.style.left = `${ x }px`;
    contextMenu.style.top = `${ y }px`;

    contextMenu.classList.add('show');


  document.addEventListener('click', event => {
    event.preventDefault();
    contextMenu.classList.remove('show');
    // outClick.style.display = "none";
  });


  });



</script> -->
<!-- <script type="text/javascript">
  const cm = document.querySelector(".custom-cm");

function showContextMenu(show = true) {
  cm.style.display = show ? "block" : "none";
}

window.addEventListener("contextmenu", e => {
  e.preventDefault();

  showContextMenu();
  cm.style.top = e.y + cm.offsetHeight > window.innerHeight ? window.innerHeight - cm.offsetHeight : e.y;
  cm.style.left = e.x + cm.offsetWidth > window.innerWidth ? window.innerWidth - cm.offsetWidth : e.x;
});

window.addEventListener("click", () => {
  showContextMenu(false);
});

</script> -->
<script type="text/javascript">
   
  function onClose() {
    contextMenu.classList.remove('show')
  }

</script>

<script type="text/javascript">
  window.addEventListener("contextmenu",function(event){
  event.preventDefault();
  var contextElement = document.getElementById("context-menu");
  contextElement.style.top = event.offsetY + "px";
  contextElement.style.left = event.offsetX + "px";
  contextElement.classList.add("active");
});
window.addEventListener("click",function(){
  document.getElementById("context-menu").classList.remove("active");
});

</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://www.jdoodle.com/assets/jdoodle-pym.min.js" type="text/javascript"></script>
<!-- <script type="text/javascript">
  setTimeout(function(){
    $('.load-start').fadeToggle();
  }, 1500);
</script> -->
<script type="text/javascript">
  $(window).on("load", function(){
    $(".load-start").fadeOut("slow");
  });
</script>














  <!--- <?php


// $connection = mysqli_connect("localhost","root","","adminpanel");

// if(isset($_POST['registerbtn']))
// {
//     $username = $_POST['username'];
//     $email = $_POST['email'];
//     $password = $_POST['password'];
//     $confirm_password = $_POST['confirmpassword'];

//     if($password === $confirm_password)
//     {
//         $query = "INSERT INTO register (username,email,password) VALUES ('$username','$email','$password')";
//         $query_run = mysqli_query($connection, $query);
    
//         if($query_run)
//         {
//             echo "done";
//             $_SESSION['success'] =  "Admin is Added Successfully";
//             header('Location: register.php');
//         }
//         else 
//         {
//             echo "not done";
//             $_SESSION['status'] =  "Admin is Not Added";
//             header('Location: register.php');
//         }
//     }
//     else 
//     {
//         echo "pass no match";
//         $_SESSION['status'] =  "Password and Confirm Password Does not Match";
//         header('Location: register.php');
//     }

// }

?> -->