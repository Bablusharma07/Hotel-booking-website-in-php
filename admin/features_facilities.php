<?php
require('inc/essential.php');
require('inc/db_config.php');
adminLogin();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel -Users Details</title>
  <link rel="stylesheet" href="inc/common.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <?php require('inc/links.php');?>


</head>
<body class="bg-light">
<?php require('inc/header.php');?>
<!--features card section-->
 <div class="conatainer-fluid" id="main-content">
  <div class="row">
   <div class="col-lg-10 ms-auto p-4 overflow-hidden">
    <h3 class="mb-3 fw-bold h_font">FEATURES</h3>
      <div class="card border-0 shadow-sm mb-4">
       <div class="card-body">
        <div class="d-flex align-items-center justify-content-between mb-3">
         <h5 class="card-title fw-bold m-0"> Add Features</h5>
         <button type="submit" class="btn btn-dark shadow-none" data-toggle="modal" data-target="#features-s">
          <i class="bi bi-plus-square-fill"></i> Add
         </button>
        </div>

 <div class="table-responsive-md-4" style="height:450px; overflow-y: scroll;">
   <table class="table table-hover border">
     <thead>
       <tr class="bg-dark text-light">
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Action</th>
       </tr>
     </thead>
        <tbody id="features_data">
                
        </tbody>
    </table>
     </div>
    </div>
   </div>
  </div>
 </div>
</div>

    <!-- features modal section-->
 <div class="modal fade" id="features-s" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form id="features_form">
     <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title fw-bold" id="exampleModalLabel">Add features</h4>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label class="form-label fw-bold">Name</label>
            <input type="text" name="features_name" class="form-control shadow-none" required>
            </div>
        
           </div>
         <div class="modal-footer">
          <button type="reset" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <button type="submit"   class="btn btn-success">Add</button>
        </div>
     </div>
    </form>
   </div>
 </div>

 

    <!--facilities card section-->
 <div class="conatainer-fluid" id="main-content">
  <div class="row">
   <div class="col-lg-10 ms-auto p-4 overflow-hidden">
    <h3 class="mb-3 fw-bold h_font">FACILITIES</h3>
      <div class="card border-0 shadow-sm mb-4">
       <div class="card-body">
        <div class="d-flex align-items-center justify-content-between mb-3">
         <h5 class="card-title fw-bold m-0"> Add Facilities</h5>
         <button type="submit" class="btn btn-dark shadow-none" data-toggle="modal" data-target="#facility-s">
          <i class="bi bi-plus-square-fill"></i> Add
         </button>
        </div>

 <div class="table-responsive-md-4" style="height:450px; overflow-y: scroll;">
   <table class="table table-hover border">
     <thead class="sticky-top">
       <tr class="bg-dark text-light">
        <th scope="col">#</th>
        <th scope="col">Icons</th>
        <th scope="col">Name</th>
        <th scope="col" width="65%">Dsecription</th>
        <th scope="col">Action</th>
       </tr>
     </thead>
        <tbody id="facilities_data">
                
        </tbody>
    </table>
     </div>
    </div>
   </div>
  </div>
 </div>
</div>

    <!-- facilitiees modal section-->
 <div class="modal fade" id="facility-s" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form id="facility_form">
     <div class="modal-content">
        <div class="modal-header">
         <h4 class="modal-title fw-bold" id="exampleModalLabel">Add Facilities</h4>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label class="form-label fw-bold">Name</label>
            <input type="text" name="facility_name" class="form-control shadow-none" required>
           </div>
            
          <div class="mb-3">
            <label class="form-label fw-bold">Icon</label>
            <input type="file" name="facility_icon" class="form-control shadow-none" accept=".svg" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="facility_desc" class="form-control shadow-none" rows="3"></textarea>
          </div>
        
           </div>
          <div class="modal-footer">
          <button type="reset" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <button type="submit"   class="btn btn-success">Add</button>
        </div>
     </div>
    </form>
   </div>
 </div>

    



   <?php require('inc/script.php');?>
   <script src="script/features_facilities.js"></script>
   
  </body>
</html> 