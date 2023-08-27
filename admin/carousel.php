<?php
require('inc/essential.php');
adminLogin();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel - Carousel</title>
  <link rel="stylesheet" href="inc/common.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <?php require('inc/links.php');?>


</head>
<body class="bg-light">
<?php require('inc/header.php');?>

<div class="conatainer-fluid" id="main-content">
 <div class="row">
  <div class="col-lg-10 ms-auto p-4 overflow-hidden">
    <h3 class="mb-3 fw-bold  h_font">CAROUSEL</h3>

<!-- Team management card section-->
<div class="card border-0 shadow-sm mb-4">
 <div class="card-body">
    <div class="d-flex align-items-center justify-content-between mb-3">
      <h5 class="card-title fw-bold m-0">Images</h5>
      <button type="submit" class="btn btn-dark shadow-none" data-toggle="modal" data-target="#carousel-s">
        <i class="bi bi-plus-square-fill"></i> Add
         </button>
    </div>

   <div class="row" id="carousel_data">
   
  </div>


<!-- Team management modal section-->
<div class="modal fade" id="carousel-s" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form id="carousel_form">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title fw-bold" id="exampleModalLabel">Add Images</h4>
      </div>
      <div class="modal-body">
         <div class="mb-3">
         <label class="form-label fw-bold">Picture</label>
         <input type="file" name="carousel_picture" id="carousel_picture_inp" class="form-control shadow-none" accept=".jpg, .png, .jpeg, .svg" required>
         </div>
        </div>
        <div class="modal-footer">
            <button type="button" onclick="carousel_picture.value=''"  class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit"  class="btn btn-success">Add</button>
         </div>
        </div>
        </form>
      </div>
    </div>

 </div>
</div>


   <?php require('inc/script.php');?>
   <script src="script/carousel.js"></script>
  </body>
</html> 