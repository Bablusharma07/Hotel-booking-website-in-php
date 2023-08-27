


<div class="container-fluid bg-info text-white mt-5 rounded">
  <div class="row">
    <div class="col-lg-4 p-4">
      <h3 class=" h_font fw-bold fs-3 mb-2">MSD Hotel</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Ut, minima reiciendis officiis ab aliquam magni maxime exercitationem atque nobis natus.</p>
    </div>
    <div class="col-lg-4 p-4">
      <h5 class="mb-3">Links</h5>
      <a href="index.php" class=" d-inline-block text-dark text-decoration-none mb-2">Home</a><br>
      <a href="Facilities.php" class=" d-inline-block text-dark text-decoration-none mb-2">Facilities</a><br>
      <a href="Rooms.php" class=" d-inline-block text-dark text-decoration-none mb-2">Rooms</a><br>
      <a href="Contact.php" class=" d-inline-block text-dark text-decoration-none mb-2">Contact Us</a><br>
      <a href="About.php" class="d-inline-block text-dark text-decoration-none mb-2">About Us</a>



    </div>
    <div class="col-lg-4 p-4">
       <h5>Follow Us</h5>
       <?php
       if($contact_r['tw']!=''){
        echo<<<data
        <a href="$contact_r[tw]" class="d-inline-block mb-2 text-dark text-decoration-none mb-2">
        <i class="bi bi-twitter"></i> Twitter
        </a>
        <br>

        data;
       }

       ?>
        
        <a href="<?php echo $contact_r['insta']?>" class="d-inline-block mb-2 text-dark text-decoration-none mb-2">
          <i class="bi bi-instagram"></i> Instagram
        </a>
        <br>
        <a href="<?php echo $contact_r['fb']?>" class="d-inline-block mb-2 text-dark text-decoration-none">
          <i class="bi bi-facebook"></i> Facebook
        </a>
        <br>
    </div>
  </div>
 </div>

<h6 class="text-center bg-dark text-white p-3 m-0">Design And Develop By BK</h6>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


<script>
  function setActive()
  {
    let navbar = document.getElementById('nav-bar');
    let a_tags = navbar.getElementByTagName('a');
    for(i=0;i<a_tags.lenght;i++){
      let file = a_tags[i].href.split('/').pop();
      let file_name = file.split('.')[0];

      if(document.location.href.indexOf(file_name)>=0){
        a_tags[i].classList.add('active');
      }
    }

  }
  setActive();
</script>

