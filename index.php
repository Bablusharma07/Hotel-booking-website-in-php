<?php
require('admin/inc/db_config.php');
require('admin/inc/essential.php');


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bkwebsite</title>
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">
    <?php require('inc/links.php');?>

    <style>
        
        /* hide arrows
 
        Chrome, Safari, Edge, Opera */
       input::-webkit-outer-spin-button,
   input::-webkit-inner-spin-button {
   -webkit-appearance: none !important;
   margin: 0 !important;
}

input[type=number] {
  -moz-appearance: textfield !important;
}
     .availablity-form{
      margin-top: -50px;
      z-index: 2;
      position: relative;
     }
     @media screen and (max-width: 575px){
      .availablity-form{
      margin-top: 20px;

      padding: 0 33px;
      }
     }


    </style>
</head>
<body class=" bg-light">
  
<?php require('inc/header.php'); ?>

<!-- Swiper -->
 <div class="container-fluid px-lg-3">
<div class="swiper mySwiper">
    <div class="swiper-wrapper">
      
      <div class="swiper-slide">
        <img src="images/carousel/img1.png"  class="w-100 d-block" />
      </div>
      <div class="swiper-slide">
      <img src="images/carousel/img2.png"  class="w-100 d-block"/>
      </div>
      <div class="swiper-slide">
      <img src="images/carousel/img3.png"  class="w-100 d-block"/>
      </div>
      <div class="swiper-slide">
      <img src="images/carousel/img4.png" class="w-100 d-block" />
      </div>
      <div class="swiper-slide">
      <img src="images/carousel/img5.png" class="w-100 d-block" />
      </div>

    </div>
  </div>
</div>

<!--check-in-->
<div class="container availablity-form">
  <div class="row">
   <div class="col-lg-12 bg-white shadow p-4  rounded">
    <h5>Check Booking Availability</h5>
    <form action="">
      <div class="row align-items-end p-3">
        <div class="col-lg-2 mb-3 me-0">
        <label for="" class="form-label" style="font-weight: 500;">Check-in </label><br>
          <input type="date" class="from-control shadow-none">
        </div>
        <div class="col-lg-2 mb-3 me-5">
        <label for="" class="form-label" style="font-weight: 500;">Check-out </label><br>
          <input type="date" class="from-control shadow-none">
        </div>
        
        <div class="col-lg-3 mb-3 me-0 ">
        <label for="" class="form-label" style="font-weight: 500;">Adult</label>
        <select class="form-select form-select-sm shadow-none" aria-label=".form-select-sm example">
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
      </select>
        </div>

        <div class="col-lg-3 mb-3 me-0">
        <label for="" class="form-label" style="font-weight: 500;">Children</label>
        <select class="form-select form-select-sm shadow-none outline-dark" aria-label=".form-select-sm example">
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
        </div>
        <div class="col-lg-1 mb-lg-3 ">
          <button type="submit" class="btn btn-success text-white shadow-none">Save</button>

        </div>
      </div>
    </form>
      </div>
     </div>
   </div>

<?php require('inc/login.php');?>

<!---Ours rooms---->
<h3 class="mt-5 mb-4 pt-3 text-center fw-bold  h_font">Ours Rooms</h3>
<div class="container">
 <div class="row">
 <div class="col-lg-4 col-md-6 my-3">
  <div class="card boreder-0 shadow" style="max-width: 350px; margin: auto;">
  <img src="images/Rooms/IMG_3.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5>Double-Room</h5>
    <h6>₹800 per day</h6>
    <div class="features mb-4">
      <h6 class="mb-1">Features</h6> 
      <span class="badge rounded-pill bg-light text-dark  text-wrap">
      TV with cable
      </span>
      <span class="badge rounded-pill bg-light text-dark  text-wrap">
      Luggages storage
      </span>
      <span class="badge rounded-pill bg-light text-dark  text-wrap">
      Private bathroom
      </span>
    </div>
    <div class="facilities mb-4">
    <h6 class="mb-3">Facilities</h6> 
      <span class="badge rounded-pill bg-light text-dark  text-wrap">
        Wi-Fi
      </span>
      <span class="badge rounded-pill bg-light text-dark  text-wrap">
      coffee maker 
      </span>
      <span class="badge rounded-pill bg-light text-dark  text-wrap">
      Air conditioned room
      </span>
    </div>
    <div class="facilities mb-4">
    <h6 class="mb-3">Guests</h6> 
      <span class="badge rounded-pill bg-light text-dark  text-wrap">
        Adult
      </span>
      <span class="badge rounded-pill bg-light text-dark  text-wrap">
      Children
      </span>
    </div>

   <div class="rating mb-4">
    <h6 class="mb-1">Ratins</h6> 
    <i class="bi bi-star-fill text-warning"></i>
    <i class="bi bi-star-fill text-warning"></i>
    <i class="bi bi-star-fill text-warning "></i>
    <i class="bi bi-star-fill text-warning"></i>
    <i class="bi bi-star-fill text-warning"></i>
    </div>
    <div class="d-flex justify-content-evenly mb-2">
    <a href="#" class="btn btn-sm  btn-success text-white  shadow-none">Book Now</a>
    <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
    </div>
  </div>
</div>
  </div>
  
<div class="col-lg-4 col-md-6 my-3">
  <div class="card boreder-0 shadow" style="max-width: 350px; margin: auto;">
  <img src="images/Rooms/IMG_1.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5>Suite-Room</h5>
    <h6>₹800 per day</h6>
    <div class="features mb-4">
      <h6 class="mb-1">Features</h6> 
      <span class="badge rounded-pill bg-light text-dark  text-wrap">
      TV with cable
      </span>
      <span class="badge rounded-pill bg-light text-dark  text-wrap">
      Luggages storage
      </span>
      <span class="badge rounded-pill bg-light text-dark  text-wrap">
      Private bathroom
      </span>
    </div>
    <div class="features mb-4">
    <h6 class="mb-1">Facilities</h6> 
      <span class="badge rounded-pill bg-light text-dark  text-wrap">
        Wi-Fi
      </span>
      <span class="badge rounded-pill bg-light text-dark  text-wrap">
      coffee maker 
      </span>
      <span class="badge rounded-pill bg-light text-dark  text-wrap">
      Air conditioned room
      </span>
    </div>
    <div class="facilities mb-4">
    <h6 class="mb-3">Guests</h6> 
      <span class="badge rounded-pill bg-light text-dark  text-wrap">
        Adult
      </span>
      <span class="badge rounded-pill bg-light text-dark  text-wrap">
      Children
      </span>
    </div>

   <div class="rating mb-4">
    <h6 class="mb-1">Ratins</h6> 
    <i class="bi bi-star-fill text-warning"></i>
    <i class="bi bi-star-fill text-warning"></i>
    <i class="bi bi-star-fill text-warning "></i>
    <i class="bi bi-star-fill text-warning"></i>
    <i class="bi bi-star-fill text-warning"></i>
    </div>
    <div class="d-flex justify-content-evenly mb-2">
    <a href="#" class="btn btn-sm  btn-success text-white  shadow-none">Book Now</a>
    <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
    </div>
  </div>
</div>
  </div>

<div class="col-lg-4 col-md-6 my-3">
  <div class="card boreder-0 shadow" style="max-width: 350px; margin: auto;">
  <img src="images/Rooms/IMG_2.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5>Single-Room</h5>
    <h6>₹800 per day</h6>
    <div class="features mb-4">
      <h6 class="mb-1">Features</h6> 
      <span class="badge rounded-pill bg-light text-dark  text-wrap">
      TV with cable
      </span>
      <span class="badge rounded-pill bg-light text-dark  text-wrap">
      Luggages storage
      </span>
      <span class="badge rounded-pill bg-light text-dark  text-wrap">
      Private bathroom
      </span>
    </div>
    <div class="features mb-4">
    <h6 class="mb-1">Facilities</h6> 
      <span class="badge rounded-pill bg-light text-dark  text-wrap">
        Wi-Fi
      </span>
      <span class="badge rounded-pill bg-light text-dark  text-wrap">
      coffee maker 
      </span>
      <span class="badge rounded-pill bg-light text-dark  text-wrap">
      Air conditioned room
      </span>
    </div>
    <div class="facilities mb-4">
    <h6 class="mb-3">Guests</h6> 
      <span class="badge rounded-pill bg-light text-dark  text-wrap">
        Adult
      </span>
      <span class="badge rounded-pill bg-light text-dark  text-wrap">
      Children
      </span>
    </div>

   <div class="rating mb-4">
    <h6 class="mb-1">Ratins</h6> 
    <i class="bi bi-star-fill text-warning"></i>
    <i class="bi bi-star-fill text-warning"></i>
    <i class="bi bi-star-fill text-warning "></i>
    <i class="bi bi-star-fill text-warning"></i>
    <i class="bi bi-star-fill text-warning"></i>
    </div>
    <div class="d-flex justify-content-evenly mb-2">
    <a href="#" class="btn btn-sm  btn-success text-white  shadow-none">Book Now</a>
    <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
    </div>
  </div>
</div>
  </div>
  <div class="col-lg-12 text-center mt-5">
    <a href="#" class="btn btn-sm btn-outline-dark rounded-5 fw-bold h_font shadow-none ">Moor Rooms >>>></a>
  </div>
</div>
</div>

<!--Our facilities-->
<h3 class="mt-5 mb-4 pt-3 text-center fw-bold  h_font">Ours Facilities</h3>
<div class="container ">
  <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
  <div class="col-lg-2 cil-md-2 text-center bg-white rounded shadow py-3 my-3">
    <img src="images/features/download.png" width="65px">
    <h5 class="mt-3">WiFi</h5>
  </div>
  <div class="col-lg-2 cil-md-2 text-center bg-white rounded shadow py-3 my-3">
    <img src="images/features/star.jpg" width="65px">
    <h5 class="mt-3">WiFi</h5>
  </div>
  <div class="col-lg-2 cil-md-2 text-center bg-white rounded shadow py-3 my-3">
    <img src="images/features/download.png" width="65px">
    <h5 class="mt-3">WiFi</h5>
  </div>
  <div class="col-lg-2 cil-md-2 text-center bg-white rounded shadow py-3 my-3">
    <img src="images/features/download.png" width="65px">
    <h5 class="mt-3">WiFi</h5>
  </div>
  <div class="col-lg-2 cil-md-2 text-center bg-white rounded shadow py-3 my-3">
    <img src="images/features/download.png" width="65px">
    <h5 class="mt-3">WiFi</h5>
  </div>
  <div class="col-lg-12 text-center mt-5">
      <a href="#" class="btn btn-sm btn-outline-dark rounded-5 fw-bold h_font shadow-none ">Moor Rooms >>>></a>
      </div>
    </div>
</div>
<!--Our facilities-->
<h3 class="mt-5 mb-4 pt-3 text-center fw-bold  h_font">TESTOMONIALS</h3>
<div class="container">
   <!-- Swiper -->
   
   <div class="swiper swiper-testimonials">
    <div class="swiper-wrapper mb-5">

      <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center mb-3">
        <img src="images/features/star.jpg" width="30px" />
        <h6 class="m-0 ms-2">Random user1</h6>
        </div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
          Harum fugiat at ad est doloribus neque?</p>
          <div class="rating">
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning "></i>
          <i class="bi bi-star-fill text-warning"></i>
          </div>
         </div>

         <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center mb-3">
        <img src="images/features/star.jpg" width="30px" />
        <h6 class="m-0 ms-2">Random user1</h6>
        </div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
          Harum fugiat at ad est doloribus neque?</p>
          <div class="rating">
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning "></i>
          <i class="bi bi-star-fill text-warning"></i>
          </div>
         </div>

         <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center mb-3">
        <img src="images/features/star.jpg" width="30px" />
        <h6 class="m-0 ms-2">Random user1</h6>
        </div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
          Harum fugiat at ad est doloribus neque?</p>
          <div class="rating">
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning "></i>
          <i class="bi bi-star-fill text-warning"></i>
          </div>
         </div>

         <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center mb-3">
        <img src="images/features/star.jpg" width="30px" />
        <h6 class="m-0 ms-2">Random user1</h6>
        </div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
          Harum fugiat at ad est doloribus neque?</p>
          <div class="rating">
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning "></i>
          <i class="bi bi-star-fill text-warning"></i>
          </div>
         </div>

      </div>
    <div class="swiper-pagination"></div>
  </div>
 </div>
 <div class="col-lg-12 text-center mt-5">
    <a href="#" class="btn btn-sm btn-outline-dark rounded-5 fw-bold h_font shadow-none ">Know more >>>></a>
    </div>

 <!--Reach us-->

 <h3 class="mt-5 mb-4 pt-3 text-center fw-bold  h_font">Reach Us</h3>
 <div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-8 p-3 mb-lg-0 mb-3 bg-white rounded">
    <iframe class="w-100 rounded" height="330px"  src="<?php echo $contact_r['iframe']?>"  loading="lazy"></iframe>
    </div>
    <div class="col-md-4 col-md-4">
      <div class="bg-white p-4 rounded">
        <h5>Call Us</h5>
         <a href="tel:+<?php echo $contact_r['pn1']?>" class="d-inline-block mb-3 text-decoration-none text-dark">
         <i class="bi bi-telephone-fill"></i> +<?php echo $contact_r['pn1']?>
        </a>
        <br>
        <?php
        if($contact_r['pn2']!=''){
          echo<<<data
            <a href="tel: +$contact_r[pn2]" class="d-inline-block text-decoration-none text-dark">
             <i class="bi bi-telephone-fill"></i> +$contact_r[pn2]
            </a> 
          data;
        }
        ?>
       
      </div>
      <br>
      <div class="bg-white p-4 rounded">
        <h5>Follow Us</h5>
        <?php
         if($contact_r['tw']!=''){
           echo<<<data
             <a href="$contact_r[tw]" class="d-inline-block mb-3 ">
              <span class="badge bg-light text-dark fs-6 p-2">
               <i class="bi bi-twitter"></i> Twitter
              </span>
             </a>
            <br>
           data;
          }
        ?>
       
        <a href="<?php echo $contact_r['fb']?>" class="d-inline-block mb-3 ">
          <span class="badge bg-light text-dark fs-6 p-2">
           <i class="bi bi-facebook"></i> Facebook
          </span>
        </a>
        <br>

        <a href="<?php echo $contact_r['insta']?>" class="d-inline-block mb-3 ">
          <span class="badge bg-light text-dark fs-6 p-2">
           <i class="bi bi-instagram"></i> Instagram
          </span>
        </a>
      </div>
    </div>
  </div>
 </div>

 <!--Footer-->

 <?php require('inc/footer.php');?>

<?php require('inc/register.php');?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(" .mySwiper", {
        spaceBetween: 30,
        effect: "fade",
        loop: true,
        autoplay: {
        delay: 3500,
        disableOnInteraction: false,
      }
    });
    var swiper = new Swiper(".swiper-testimonials", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      slidesPerView: "3",
      loops: true,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper-pagination",
      },
      
    });
  </script>
</body>
</html>