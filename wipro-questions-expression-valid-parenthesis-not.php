<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>


<div class="card shadow mb-4">
      <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Wipro</h6>
          </div>
       <div class="card-body">
           <p>Read an expression and check whether expression contains valid Parenthesis or not.</p>
           
              <p class="mb-0">
                        Sample Input-1 :- <br>
                        ((A*B)+(C/D)-E)<br>
                        Sample Output-1 :- <br>
                        Valid</p><br>
              <p class="mb-0">
                        Sample Input-2 :- <br>
                        ((A*B)+(C/D-E)<br>
                        Sample Output 2:- <br>
                        Invalid</p>
           </div>
           <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Source Code</h6>
            </div>
            <div data-pym-src="https://www.jdoodle.com/embed/v0/22aK?arg=0"></div>

  </div>
</div>
 <?php
include('includes/scripts.php');
include('includes/footer.php');
?>