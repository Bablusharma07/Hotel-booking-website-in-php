<?php
require ('admin/inc/db_config.php');
require ('admin/inc/essential.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="common.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    
    <?php require('inc/links.php');?>
    <style>
       .box:hover{
            transform: scale(1.03);
            transition: all 0.3s;
        }
    </style>
   
    
</head>
<body  class="bg-light">
<?php require('inc/header.php');?>

<div class="my-5 px-4 mt-2">
    <h2 class="fw-bold text-center h_font">About Us</h2>
    <div class=" h_line bg-dark "></div>
    <p class="text-center mt-3">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit.<br>
         Mollitia, dolor necessitatibus non voluptatem explicabo quo nam est soluta quis placeat!
    </p>
</div>
<div class="container">
    <div class="row justify-content-between align-items-center">
        <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
         <h3 class="mb-4">Lorem ipsum dolor sit</h3>
         <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
             Cum veritatis magnam quibusdam eaque alias iure illo dicta, facere magni error!
         </p>
        </div>
        <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
            <img src="images/about/ms-dhoni.jpg"   width="60%" height="50%">
        </div>
    </div>
</div>

<div class="container mt-4">
    <div class="row">
        <div class="col-lg-3 col-md-6 mb-4 px-4">
            <div class="bg-white rounded p-4 shadow border-top border-4 border-dark text-center box">
           <img src="images/about/hotel.svg" width="70px">
           <h4 class="mt-3">80+ Rooms</h4>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 px-3">
            <div class="bg-white rounded p-4 shadow border-top border-4 border-dark text-center box">
           <img src="images/about/staff.svg" width="70px">
           <h4 class="mt-3">100+ Staffs</h4>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 px-3">
            <div class="bg-white rounded p-4 shadow border-top border-4 border-dark text-center box">
           <img src="images/about/customers.svg" width="70px">
           <h4 class="mt-3">150+ Customers</h4>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 px-3">
            <div class="bg-white rounded p-4 shadow border-top border-4 border-dark text-center box">
           <img src="images/about/rating.svg" width="70px">
           <h4 class="mt-3">175+ Ratings</h4>
            </div>
        </div>
    </div>
</div>

<!--Team management section-->
<h3 class="my-5 fw-bold h_font text-center">MANAGEMENT TEAM</h3>
<div class="container px-4 ">
<div class="swiper mySwiper mb-5">
 <div class="swiper-wrapper ">
  <?php
     $about_r = selectAll('team_details');
      $path = ABOUT_IMG_PATH;
        while($row=mysqli_fetch_assoc($about_r)){
          echo<<<data
            <div class="swiper-slide bg-white text-center overflow-hidden rounded">
              <img src="$path$row[picture]" class="w-100">
              <h5 class="mt-2">$row[name]</h5>
            </div>
          data;
       }
    ?>
     
    </div>
    <div class="swiper-pagination "></div>
  </div>

 </div>

<?php require('inc/footer.php');?>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 4,
      spaceBetween: 40,
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints: {
        320: {
         sildesPerView: 1,
        },
        640: {
         sildesPerView: 1,
        },
        768: {
         sildesPerView: 2,
        },
        1024: {
         sildesPerView: 3,
        },
      }
    });
  </script>

</body>
</html>