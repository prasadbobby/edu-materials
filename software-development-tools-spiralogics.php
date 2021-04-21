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
         width: 17%;
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
      <h6 class="m-0 font-weight-bold text-primary">Spiralogics Application Architecture</h6>
   </div>
   <div class="card-body">
      <div class="text-center">
         <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="./software-images/spiralogics.png" alt="">
      </div>
      <p><a href="https://www.gotosaa.com/" target="_blank" style="font-weight: 800;">Spiralogics Application Architecture</a> (SAA) is a cloud-based software development tool. It allows users to build and customize their applications online and deploy them. It also allows users to choose from a set of prebuilt applications or customize them it from scratch.</p>
      <h5>Features:</h5>
      <ul>
      	<li>Create customized pages</li>
      	<li>Built-in HTML editor</li>
      	<li>Interactive Dashboard builder</li>
      	<li>Preview Changes before publishing the application</li>
      	<li>Predefined processes like Save, Delete, Accept, Reject, and Email</li>
         <li>Allows customization of look and feel of page components</li>
         <li>Create custom processes not already defined</li>
      </ul>
      <h5>Download Link:</h5>
      <a target="_blank" rel="nofollow" href="https://www.gotosaa.com/" class="link" style="text-decoration: none;">https://www.gotosaa.com/<svg class="link-arrow-image" width="11px" height="8px" viewBox="0 0 11 8" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g class="group-path" transform="translate(-138.000000, -586.000000)" fill="#0052CC"><path d="M145.2803,586.507862 L144.2193,587.568863 L145.9393,589.287862 L138.7503,589.287862 C138.3363,589.287862 138.0003,589.623862 138.0003,590.037862 C138.0003,590.451862 138.3363,590.787862 138.7503,590.787862 L145.9393,590.787862 L144.2193,592.507862 L145.2803,593.568863 L148.8103,590.037862 L145.2803,586.507862 Z" id="Fill-1"></path></g></g></svg></a>
   </div>
</div>
<?php
   include('includes/scripts.php');
   ?>