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
      <h6 class="m-0 font-weight-bold text-primary">HTML5 Builder</h6>
   </div>
   <div class="card-body">
      <div class="text-center">
         
      </div>
      <p><a href="https://www.embarcadero.com/products/rad-studio/start-for-free" target="_blank" style="font-weight: 800;">HTML5 Builder</a> is a software solution for building the web and mobile apps. It can develop an app using a single HTML5, CSS3, JavaScript and PHP codebase. It helps to target multiple mobile operating systems, devices and Web browsers.</p>
      <h5>Features:</h5>
      <ul>
      	<li>It is the fastest way to develop cross-platform Apps with flexible Cloud services</li>
      	<li>Increased speed of development with a single visual framework</li>
      	<li>Brings Designers and Developers in a Collaborative Workflow</li>
      	<li>Create Enterprise or ISV web and mobile apps</li>
         <li>Create location-based browser and mobile applications using geolocation components in HTML5 Builder</li>
         </ul>
      <h5>Download Link:</h5>
      <a target="_blank" rel="nofollow" href="https://www.embarcadero.com/products/rad-studio/start-for-free" class="link" style="text-decoration: none;">https://www.embarcadero.com/products/rad-studio/start-for-free<svg class="link-arrow-image" width="11px" height="8px" viewBox="0 0 11 8" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g class="group-path" transform="translate(-138.000000, -586.000000)" fill="#0052CC"><path d="M145.2803,586.507862 L144.2193,587.568863 L145.9393,589.287862 L138.7503,589.287862 C138.3363,589.287862 138.0003,589.623862 138.0003,590.037862 C138.0003,590.451862 138.3363,590.787862 138.7503,590.787862 L145.9393,590.787862 L144.2193,592.507862 L145.2803,593.568863 L148.8103,590.037862 L145.2803,586.507862 Z" id="Fill-1"></path></g></g></svg></a>
   </div>
</div>
<?php
   include('includes/scripts.php');
   ?>