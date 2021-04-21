
<?php
include('includes/header.php'); 
include('includes/navbar.php'); 

?>

<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		
		
		.click,
		.toggle{
			position: absolute;
			width: 50px;
			height: 50px;
			top: 20px;
			right: 10px;
			outline: none;
			z-index: 10;
			cursor: pointer;

			box-shadow: 0px 10px 25px rgba(0,0,0,.5);
		}
		.click{
			opacity: 0;
		}
		.toggle{
			pointer-events: none;
			border-radius: 50%;
			background: #fff;
			transition: 0.5s;
		   	text-align: center;
			line-height: 50px;
			font-size: 36px;
			box-shadow: 0 1px 10px rgba(0,0,0,.5);
		}
		.click:checked ~ .toggle{
			box-shadow: 0 0 0 500px #4e73df;
			transform: rotate(225deg);
		}
		
		.details{
			padding: 15px;
			box-sizing: border-box;
			z-index: 11;
			/*margin-top: -90px;*/
			/*pointer-events: none;*/
			position: absolute;
			top: 70%;
			left: 50%;
			transform: translate(-50%,-50%);
			/*transition: 0.5s;*/
			/*opacity: 0;*/
			visibility: hidden;
			width: 100%;
			height: 100%;

		}
		.extra{
			padding: 15px;
			box-sizing: border-box;
			z-index: 11;
			/*margin-top: 10px;*/
			pointer-events: none;
			/*transition: 0.5s;*/
			/*opacity: 0;*/
			visibility: visible;
			width: 100%;
			height: 100%;

		}
		.click:checked ~ .extra{
			visibility: hidden;
			opacity: 1;
			
		}
		.click:checked ~ .details{
			opacity: 1;
			visibility: visible;
			transition: 0.5s;
			z-index: 100;
			transition-delay: 0.3s;
		}
		.details h2{
			/*margin-bottom: 5px;*/
			color: #fff;
			/*transition: 0.5s;*/
		}
		.link{
         font-weight: 500;
         font-size: 12px;
      }
      .link:after{
         content: '';
         position: absolute;
         display: block;
         width: 0;
         height: 2px;
         transition: width .3s;
         background: #fff;

      }
      .link:hover::after{
         width: 77%;
         transition: width .3s;
      }
      .link:hover{
      	color: #fff;
      	text-decoration: none;
      }
      svg{
         transition: 0.5s;
         transform: translateX(5px);
      }
      .link:hover svg{
         transform: translateX(20px);
      }
      a{
      	color: #fff;
      }
	</style>
</head>
<body>

<div class="container-fluid">


	<!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">E-Books</h1>
  </div>

	<div class="row">
                  
		
  <!-- Total Materials  -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-light shadow h-100 py-2"style="overflow: hidden;" >
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Materials</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">Python</div>
              
            </div>

              <input type="checkbox" name="" class="click">
				<div class="toggle">+</div>
         <img class="img-fluid px-3 px-sm-4 mt-3 mb-4 extra" style="width: 15rem;" src="./e-books/python.png" alt=""/>

            
            <div class="details">
					<h2>Python E-Books</h2>
					<ul style="float: left; left: 0; position: absolute;">
					<li><a href="java.pdf" class="link">Python E-Book by Bobby</a></li>
					<li><a href="java.pdf" class="link">Python E-Book by Bobby</a></li>
					<li><a href="java.pdf" class="link">Python E-Book by Bobby</a></li>
					<li><a href="java.pdf" class="link">Python E-Book by Bobby</a></li>
					<li><a href="java.pdf" class="link">Python E-Book by Bobby</a></li>
					<li><a href="java.pdf" class="link">Python E-Book by Bobby</a></li>
					<li><a href="java.pdf" class="link">Python E-Book by Bobby</a></li>
					</ul>
				</div>
          </div>



        </div>
      </div>
    </div> 		
    <!-- Total Materials  -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-light shadow h-100 py-2"style="overflow: hidden;" >
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Materials</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">Java</div>
              
            </div>

              <input type="checkbox" name="" class="click">
				<div class="toggle">+</div>
         <img class="img-fluid px-3 px-sm-4 mt-3 mb-4 extra" style="width: 12.5rem;" src="./e-books/java.png" alt=""/>

            
            <div class="details">
					<h2>Python E-Books</h2>
					<ul style="float: left; left: 0; position: absolute;">
					<li><a href="java.pdf" class="link">Python E-Book by Bobby</a></li>
					<li><a href="java.pdf" class="link">Python E-Book by Bobby</a></li>
					<li><a href="java.pdf" class="link">Python E-Book by Bobby</a></li>
					</ul>
				</div>
          </div>



        </div>
      </div>
    </div> 

    <!-- Total Materials  -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-light shadow h-100 py-2"style="overflow: hidden;" >
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Materials</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">Python</div>
              
            </div>

              <input type="checkbox" name="" class="click">
				<div class="toggle">+</div>
         <img class="img-fluid px-3 px-sm-4 mt-3 mb-4 extra" style="width: 15rem;" src="./e-books/python.png" alt=""/>

            
            <div class="details">
					<h2>Python E-Books</h2>
					<ul style="float: left; left: 0; position: absolute;">
					<li><a href="java.pdf" class="link">Python E-Book by Bobby</a></li>
					<li><a href="java.pdf" class="link">Python E-Book by Bobby</a></li>
					<li><a href="java.pdf" class="link">Python E-Book by Bobby</a></li>
					</ul>
				</div>
          </div>



        </div>
      </div>
    </div> 

    <!-- Total Materials  -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-light shadow h-100 py-2"style="overflow: hidden;" >
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Materials</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">Python</div>
              
            </div>

              <input type="checkbox" name="" class="click">
				<div class="toggle">+</div>
         <img class="img-fluid px-3 px-sm-4 mt-3 mb-4 extra" style="width: 15rem;" src="./e-books/python.png" alt=""/>

            
            <div class="details">
					<h2>Python E-Books</h2>
					<ul style="float: left; left: 0; position: absolute;">
					<li><a href="java.pdf" class="link">Python E-Book by Bobby</a></li>
					<li><a href="java.pdf" class="link">Python E-Book by Bobby</a></li>
					<li><a href="java.pdf" class="link">Python E-Book by Bobby</a></li>
					</ul>
				</div>
          </div>



        </div>
      </div>
    </div> 

    <!-- Total Materials  -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-light shadow h-100 py-2"style="overflow: hidden;" >
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Materials</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">Python</div>
              
            </div>

              <input type="checkbox" name="" class="click">
				<div class="toggle">+</div>
         <img class="img-fluid px-3 px-sm-4 mt-3 mb-4 extra" style="width: 15rem;" src="./e-books/python.png" alt=""/>

            
            <div class="details">
					<h2>Python E-Books</h2>
					<ul style="float: left; left: 0; position: absolute;">
					<li><a href="java.pdf" class="link">Python E-Book by Bobby</a></li>
					<li><a href="java.pdf" class="link">Python E-Book by Bobby</a></li>
					<li><a href="java.pdf" class="link">Python E-Book by Bobby</a></li>
					</ul>
				</div>
          </div>



        </div>
      </div>
    </div> 


		
    <!-- Total Materials  -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-light shadow h-100 py-2"style="overflow: hidden;" >
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Materials</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">Python</div>
              
            </div>

              <input type="checkbox" name="" class="click">
				<div class="toggle">+</div>
         <img class="img-fluid px-3 px-sm-4 mt-3 mb-4 extra" style="width: 15rem;" src="./e-books/python.png" alt=""/>

            
            <div class="details">
					<h2>Python E-Books</h2>
					<ul style="float: left; left: 0; position: absolute;">
					<li><a href="java.pdf" class="link">Python E-Book by Bobby</a></li>
					<li><a href="java.pdf" class="link">Python E-Book by Bobby</a></li>
					<li><a href="java.pdf" class="link">Python E-Book by Bobby</a></li>
					</ul>
				</div>
          </div>



        </div>
      </div>
    </div> 


</div>
</div>
              



  <?php
include('includes/scripts.php');
include('includes/footer.php');
?>



