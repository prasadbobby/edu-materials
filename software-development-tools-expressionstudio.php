<?php
   include('includes/header.php'); 
   ?>
   <style type="text/css">
      .link{
         font-weight: 800;

      }
      .link:after{
         content: '';
         position: absolute;
         display: block;
         width: 0;
         height: 2px;
         transition: width .3s;
         background: #4e73df;

      }
      .link:hover::after{
         width: 30%;
         transition: width .3s;
      }
      svg{
         transition: 0.5s;
         transform: translateX(5px);
      }
      .link:hover svg{
         transform: translateX(20px);
      }
   </style>
<div class="col-xl-12 mb-4 center">
<!-- Illustrations -->
<div class="card shadow mb-4">
   <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Expression Studio</h6>
   </div>
   <div class="card-body">
      <div class="text-center">
         <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 18rem;" src="./software-images/expressionstudio.png" alt="">
      </div>
      <p><a href="http://www.microsoft.com/en-in/download/details.aspx?id=5915" target="_blank" style="font-weight: 800;">Expression Studio</a> is a set of a family of tools for professional designer's developers. It is a robust professional design tool which gives creative freedom to developers.</p>
      <h5>Features:</h5>
      <ul>
      	<li>It revolutionizes the speed of prototyping</li>
      	<li>It allows creation of effective UI with sample data</li>
      	<li>Fast, flexible, seamless workflow helps to excel the entire development process</li>
      	<li>These tools save time of creating web sites to deliver faster results</li>
         <li>Advanced visual diagnostics speed debugging</li>
         <li>It offers team Foundation Server integration</li>
         <li>Rich standards-based web design & technologies</li>
         <li>It provides precision layout control and supports a broad range of technologies.</li>
         <li>It helps to speeds up cross-browser debugging with advanced visual diagnostics</li>
      </ul>
      <h5>Download Link:</h5>
      <a target="_blank" rel="nofollow" href="http://www.microsoft.com/en-in/download/details.aspx?id=5915" class="link" style="text-decoration: none;">http://www.microsoft.com/en-in/download/details.aspx<svg class="link-arrow-image" width="11px" height="8px" viewBox="0 0 11 8" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g class="group-path" transform="translate(-138.000000, -586.000000)" fill="#0052CC"><path d="M145.2803,586.507862 L144.2193,587.568863 L145.9393,589.287862 L138.7503,589.287862 C138.3363,589.287862 138.0003,589.623862 138.0003,590.037862 C138.0003,590.451862 138.3363,590.787862 138.7503,590.787862 L145.9393,590.787862 L144.2193,592.507862 L145.2803,593.568863 L148.8103,590.037862 L145.2803,586.507862 Z" id="Fill-1"></path></g></g></svg></a>
   </div>
</div>
<?php
   include('includes/scripts.php');
   ?>