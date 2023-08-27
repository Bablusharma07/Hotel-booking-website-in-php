
<?php
  $contact_q = "SELECT * FROM `contacts` WHERE `sr_no`=?";
  $values =[1];
  $contact_r = mysqli_fetch_assoc(select($contact_q,$values,'i'));
  // print_r($contact_r);
 ?>
 

<nav id="nav-bar" class="navbar navbar-expand-lg navbar-dark bg-dark px-lg-3 py-lg-2 shadow-sm sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand me-5 fw-bold fs-3 h_font" href="index.php">MSD Hotel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="Rooms.php">Rooms</a>
        </li>

        <li class="nav-item">
          <a class="nav-link me-2" href="Facilities.php">Facilities</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="Contact.php">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="About.php">About Us</a>
        </li>
      </ul>
      <form class="d-flex">
        <button type="button" class="btn btn-outline-success shadow-none me-lg-2 me-3" data-bs-toggle="modal" data-bs-target="#loginModal">
            Login
            <button type="button" class="btn btn-outline-success shadow-none me-lg-2 me-3" data-bs-toggle="modal" data-bs-target="#registerModal">
            Register
        </button>
      </form>
    </div>
  </div>

 
</nav><br>


 
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
        <form action="">
      <div class="modal-header">
        <h5 class="modal-title d-flex align-items-center">
        <i class="bi bi-person-circle fs-3 me-2"></i>  User Login</h5>
        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="mb-3">
    <label class="form-label">Email address:</label>
    <input type="email" class="form-control shadow-none ">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <label class="form-label">Password:</label>
    <input type="password" class="form-control shadow-none">
      </div>
      <div class="d-flex align-items-center justify-content-between me-lg-3 me-3">
      <button type="submit" class="btn btn-primary ms-3 mb-3">Login</button>
      <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forgot Password?</a>
      </div>
      
      </form>
    </div>
  </div>
</div>




