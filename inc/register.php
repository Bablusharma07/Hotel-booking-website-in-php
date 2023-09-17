

<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog modal-lg">
    <div class="modal-content">
     <form id="register-form" action="">
      <div class="modal-header">
        <h5 class="modal-title d-flex align-items-center">
        <i class="bi bi-person-lines-fill fs-3 me-2"></i>  User Registration</h5>
        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
       <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
        Note: Your Details must match with your Id (Aadhaar card,Passport,Voter Id etc.) that will be required during check-in.</span>
        <div class="container-fluid">
         <div class="row">
          <div class="col-md-6 p-2 mb-1">
            <label class="form-label">Name:</label>
            <input type="text" name="name" class="form-control shadow-none " required>
          </div>

         <div class="col-md-6 p-2 mb-1">
            <label class="form-label">Email:</label>
            <input type="email" name="email" class="form-control shadow-none " required>
         </div>

         <div class="col-md-6 p-2 mb-1">
            <label class="form-label">Phone No:</label>
            <input type="number" name="phone" class="form-control shadow-none " required>
         </div>

         <div class="col-md-6 p-2 mb-1">
            <label class="form-label">Picture:</label>
            <input type="file" name="image" accept=".jpg, .jpeg, .png, .webp" class="form-control shadow-none " required>
         </div>

         <div class="col-md-12 p-2 mb-1">
            <label class="form-label">Address:</label>
            <textarea class="form-control shadow-none"  name="address"  id="exampleFormControlTextarea1" rows="1" required></textarea>
         </div>

         <div class="col-md-6 p-2 mb-1">
            <label class="form-label">Pincode:</label>
            <input type="number" name="pincode" class="form-control shadow-none " required>
         </div>

         <div class="col-md-6 p-2 mb-1">
            <label class="form-label">Date Of Birth:</label>
            <input type="date" name="dob" class="form-control shadow-none " required>
         </div>

         <div class="col-md-6 p-2 mb-1">
            <label class="form-label">Password:</label>
            <input type="password" name="pass" class="form-control shadow-none " required>
         </div>

         <div class="col-md-6 p-2 mb-1">
            <label class="form-label">Confirm password:</label>
            <input type="cpassword" name="cpass" class="form-control shadow-none " required>
         </div>

         <div class="d-flex align-items-center justify-content-center me-lg-2 me-3">
            <button type="submit" class="btn btn-primary ms-3 mb-3">Register</button>
         </div>
         
        </div>
       </div>
     </form>
    </div>
  </div>
</div>
