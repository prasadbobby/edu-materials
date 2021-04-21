<?php
   include('includes/header.php'); 
   include('includes/navbar.php'); 
   
   ?>

<!-- Begin Page Content -->
<div class="container-fluid">
   <!-- Page Heading -->
   <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">OS UNIT - III Preview</h1>
   </div>
   <div class="card shadow mb-4">
      <div class="card-header py-3">
         <h6 class="m-0 font-weight-bold text-primary">R16 CSE 3-1</h6>
         <a href="#" onClick="onClick()" class="d-sm-inline-block btn btn-sm btn-primary shadow-sm" style="float: right;margin-top: -18px;"><i
            class="fas fa-download fa-sm text-white-50"></i> Download</a>
      </div>
      <div class="card-body text-center">
         <!-- <embed src="java.pdf?#toolbar=0" type="application/pdf" width="80%" height="1200px"></embed> -->
         <div class="embed-responsive embed-responsive-1by1">
            <div>
               <iframe src="https://drive.google.com/file/d/1gdG-IeYFUJetVvzBdU3bDvZI7B1I7Co4/preview" width="80%" height="480"
                  frameborder="0" seamless="" allowfullscreen="allowfullscreen"></iframe>
               <div style="width: 80px; height: 80px; position: absolute;opacity: 0; background: #858796;border-radius: 50%; right: 0px; top: 0px;"><i class="fas fa-download" style="color: #fff; margin-top: 20px;"></i></div>
            </div>
         </div>
      </div>
   </div>
</div>


<script>

function onClick(){
   window.location.href ="https://drive.google.com/u/0/uc?id=1gdG-IeYFUJetVvzBdU3bDvZI7B1I7Co4&export=download"
}

</script>
<?php
   include('includes/preview-scripts.php');
   include('includes/footer.php');
   ?>