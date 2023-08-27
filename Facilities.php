<?php
require('admin/inc/db_config.php');
require('admin/inc/essential.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel_facilities</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">
    <link rel="stylesheet" href="common.css">
    
    <?php require('inc/links.php');?>
    <style>
        .pop:hover{
            transform: scale(1.03);
            transition: all 0.3s;
        }
    </style>
    
</head>
<body  class="bg-light">
<?php require('inc/header.php');?>

<div class="my-5 px-4 mt-2">
    <h2 class="fw-bold text-center h_font">Our Facilities</h2>
    <div class=" h_line bg-dark "></div>
    <p class="text-center mt-3">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit.<br>
         Mollitia, dolor necessitatibus non voluptatem explicabo quo nam est soluta quis placeat!
    </p>
</div>

<div class="container">
    <div class="row">
     <?php
        $res = selectAll('facilities');
        $path = FACILITY_IMG_PATH;

        while($row =mysqli_fetch_assoc($res))
        {
         echo<<<data
          <div class="col-lg-4 col-lg-md-6 mb-4 px-4">
           <div class="bg-white rounded shadow p-4 border-top border-dark border-4 pop">
            <div class="d-flex align-items-center mb-2">
                <img src="$path$row[icon]" width="37px" >
                <h5 class="m-0 ms-3">$row[name]</h5>
            </div>
                 <p>$row[description]</p>
            </div>
          </div>
         data;
        }

     ?>
    <!-- 
        <div class="col-lg-4 col-lg-md-6 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 pop">
                <div class="d-flex align-items-center mb-2">
                    <img src="images/Facilities/img_wifi.svg" width="37px" >
                    <h5 class="m-0 ms-3">WiFi</h5>

                </div>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta,
                     sit? Assumenda praesentium illum placeat enim?
                </p>
            </div>
            
        </div>
        <div class="col-lg-4 col-lg-md-6 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 pop">
                <div class="d-flex align-items-center mb-2">
                    <img src="images/Facilities/img_wifi.svg" width="37px" >
                    <h5 class="m-0 ms-3">WiFi</h5>

                </div>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta,
                     sit? Assumenda praesentium illum placeat enim?
                </p>
            </div>
            
        </div>
        <div class="col-lg-4 col-lg-md-6 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 pop">
                <div class="d-flex align-items-center mb-2">
                    <img src="images/Facilities/img_wifi.svg" width="37px" >
                    <h5 class="m-0 ms-3">WiFi</h5>

                </div>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta,
                     sit? Assumenda praesentium illum placeat enim?
                </p>
            </div>
            
        </div>
        <div class="col-lg-4 col-lg-md-6 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 pop">
                <div class="d-flex align-items-center mb-2">
                    <img src="images/Facilities/img_wifi.svg" width="37px" >
                    <h5 class="m-0 ms-3">WiFi</h5>

                </div>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta,
                     sit? Assumenda praesentium illum placeat enim?
                </p>
            </div>
            
        </div>
        <div class="col-lg-4 col-lg-md-6 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 pop">
                <div class="d-flex align-items-center mb-2">
                    <img src="images/Facilities/img_wifi.svg" width="37px" >
                    <h5 class="m-0 ms-3">WiFi</h5>

                </div>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta,
                     sit? Assumenda praesentium illum placeat enim?
                </p>
            </div>
            
        </div> -->

    </div>
</div>



<?php require('inc/footer.php');?>
</body>
</html>