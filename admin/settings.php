
<?php
require('inc/essential.php');
adminLogin();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel-Settings</title>
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
    <h3 class="mb-3 fw-bold  h_font">SETTINGS</h3>

<!-- general card section-->
<div class="card border-0 shadow-sm mb-4">
 <div class="card-body">
    <div class="d-flex align-items-center justify-content-between mb-3">
    <h5 class="card-title fw-bold">General Settings</h5>
    <button type="button" class="btn btn-dark shadow-none" data-toggle="modal" data-target="#general-s">
    <i class="bi bi-pencil-square"></i> Edit
    </button>
   
    </div>
    <h6 class="card-subtitle mb-1 fw-bold">Site Title</h6>
    <p class="card-text" id="site_title"></p>
    <h6 class="card-subtitle mb-1 fw-bold">About Us</h6>
    <p class="card-text" id="site_about"></p>
  </div>
</div>

<!-- general modal section-->
<div class="modal fade" id="general-s" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form>
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title fw-bold" id="exampleModalLabel">General Settings</h4>
       
      </div>
      <div class="modal-body">
      <div class="mb-2">
         <label class="form-label fw-bold">Site title</label>
         <input name="site_title" id="site_title_inp" type="text" class="form-control shadow-none" required>
         </div>
         <div class="mb-2">
         <label class="form-label fw-bold">About us</label>
         <textarea name="site_about" id="site_about_inp" class="form-control shadow-none" id="exampleFormControlTextarea1" rows="5" required>
         </textarea>
         </div>
      </div>
      <div class="modal-footer">
        <button type="button" onclick="site_title.value = general_data.site_title, site_about.value = general_data.site_about" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" onclick="upd_general(site_title.value,site_about.value)" class="btn btn-success">Save</button>
      </div>
    </div>
    </form>
  </div>
</div>

<!--shutdown section-->
<div class="card border-0 shadow-sm m mb-4">
  <div class="card-body ">
      <div class="d-flex align-items-center justify-content-between mb-3">
      <h5 class="card-title fw-bold m-0">Shutdown Website</h5>
        <div class="form-check form-switch">
          <form >
          <input onchange="upd_shutdown(this.value)" class="form-check-input" type="checkbox" id="shutdown_toggle">
          </form>
        </div>
        
      </div>
      <p class="card-text">
        No customers will be allowed to book hotel room, when shutdown mode is turned on.
      </p>
  </div>
</div>

<!--contacts card section-->
<div class="card  mb-4 shadow-sm border-0">
 <div class="card-body">
    <div class="d-flex align-items-center justify-content-between mb-3">
    <h5 class="card-title fw-bold">Contact Settings</h5>
    <button type="submit"  class="btn btn-dark shadow-none" data-toggle="modal" data-target="#contacts">
    <i class="bi bi-pencil-square"></i> Edit
    </button>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="mb-4">
        <h6 class="card-subtitle mb-1 fw-bold">Address</h6>
        <p class="card-text" id="address"></p>
        </div>

        <div class="mb-4">
        <h6 class="card-subtitle mb-1 fw-bold">Google Map</h6>
        <p class="card-text" id="gmap"></p>
        </div>

        <div class="mb-4">
        <h6 class="card-subtitle mb-2 fw-bold">Phone Numbers</h6>
        <p class="card-text mb-1">
        <i class="bi bi-telephone-fill"></i>
        <span id="pn1"></span>
        </p>
        <p class="card-text">
        <i class="bi bi-telephone-fill"></i>
        <span id="pn2"></span>
        </p>
        </div>

        <div class="mb-4">
        <h6 class="card-subtitle mb-1 fw-bold">E-mail</h6>
        <p class="card-text" id="email"></p>
        </div>
      </div>
      
      <div class="col-lg-6">
        <div class="mb-4">
        <h6 class="card-subtitle mb-2 fw-bold">Social Links</h6>
        <p class="card-text mb-2">
        <i class="bi bi-facebook"></i> 
        <span id="fb"></span>
        </p>
        <p class="card-text mb-2">
        <i class="bi bi-instagram"></i> 
        <span id="insta"></span>
        </p>
        <p class="card-text ">
        <i class="bi bi-twitter"></i> 
        <span id="tw"></span>
        </p>
        </div>
        <div class="mb-4">
        <h6 class="card-subtitle mb-2 fw-bold">iFrame</h6>
        <iframe id="iframe" class="border p-2 w-100" loading="lazy"></iframe>
       
        </div>
        </div>
        

    </div>
  
 </div>
</div>

<!-- contacts modal section-->
<div class="modal fade" id="contacts"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
   <form id="contacts_form">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title fw-bold">Contact Settings</h4>
      </div>
      
    <div class="modal-body">
     <div class="container-fluid p-0">
      <div class="row">
       <div class="col-md-6">
        <div class="mb-2">
         <label class="form-label fw-bold">Address</label>
         <input type="text" name="address" id="address_inp" class="form-control shadow-none" required>
        </div>

        <div class="mb-2">
         <label class="form-label fw-bold">Google Map Link</label>
         <input type="text" name="gmap" id="gmap_inp" class="form-control shadow-none" required>
        </div>

        <div class="mb-2">
         <label class="form-label fw-bold">Phone Number</label>
          <div class="input-group mb-3">
            <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
            <input type="number" name="pn1" id="pn1_inp" class="form-control shadow-none" required>
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
            <input type="number" name="pn2" id="pn2_inp" class="form-control shadow-none">
          </div>
        </div>

        <div class="mb-2">
         <label class="form-label fw-bold">E-mail</label>
         <input type="text" name="email" id="email_inp" class="form-control shadow-none" required>
        </div>

        </div>

      <div class="col-md-6">
        <div class="mb-3">
         <label class="form-label fw-bold">Social Links</label>
          <div class="input-group mb-3">
            <span class="input-group-text"><i class="bi bi-facebook"></i></i></span>
            <input type="text" name="fb" id="fb_inp" class="form-control shadow-none" required>
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text"><i class="bi bi-instagram"></i></span>
            <input type="text" name="insta" id="insta_inp" class="form-control shadow-none" required>
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text"><i class="bi bi-twitter"></i></span>
            <input type="text" name="tw" id="tw_inp" class="form-control shadow-none">
          </div>

          <div class="mb-2">
         <label class="form-label fw-bold">iFrame</label>
         <input type="text" name="iframe" id="iframe_inp" class="form-control shadow-none" required>
        </div>

        </div>
       </div>
      </div>
    </div>

         
      <div class="modal-footer">
        <button type="button" onclick="contacts_inp(contacts_data)" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-success">Save</button>
      </div>
    </div>
    </form>
  </div>
</div>
</div>

<!-- Team management card section-->
<div class="card border-0 shadow-sm mb-4">
 <div class="card-body">
    <div class="d-flex align-items-center justify-content-between mb-3">
      <h5 class="card-title fw-bold m-0">Management Team</h5>
       <button type="submit" class="btn btn-dark shadow-none" data-toggle="modal" data-target="#team-s">
        <i class="bi bi-plus-square-fill"></i> Add
         </button>
      </div>

   <div class="row" id="team_data">
   
  </div>

<!-- Team management modal section-->
<div class="modal fade" id="team-s" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form id="team_form">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title fw-bold" id="exampleModalLabel">Add Team Member</h4>
      </div>
      <div class="modal-body">
      <div class="mb-3">
         <label class="form-label fw-bold">Name</label>
         <input type="text" name="member_name" id="member_name_inp" class="form-control shadow-none" required>
         </div>
         <div class="mb-3">
         <label class="form-label fw-bold">Picture</label>
         <input type="file" name="member_picture" id="member_picture_inp" class="form-control shadow-none" accept=".jpg, .png, .jpeg, .svg" required>
         </div>
      </div>
      <div class="modal-footer">
        <button type="button" onclick="member_name.value='',member_picture.value=''"  class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit"  class="btn btn-success">Add</button>
      </div>
    </div>
    </form>
  </div>
</div>

 </div>
</div>


   <?php require('inc/script.php');?>
   <script src="script/settings.js"></script>
   

  </body>
</html> 