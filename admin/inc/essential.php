<?php
//Frontend upload process need this data
define('SITE_URL','http://127.0.0.1/bkwebsite/');
define('ABOUT_IMG_PATH',SITE_URL.'images/about/');
define('CAROUSEL_IMG_PATH',SITE_URL.'images/carousel/');
define('FACILITY_IMG_PATH',SITE_URL.'images/Facilities/');



//Backend upload process need this data
define('UPLOAD_IMAGE_PATH',$_SERVER['DOCUMENT_ROOT'].'/bkwebsite/images/');
define('ABOUT_FOLDER','about/');
define('CAROUSEL_FOLDER','carousel/');
define('FACILITY_FOLDER','Facilities/');



function adminLogin()
{
  session_start();
  if(!(isset($_SESSION['adminLogin']) && $_SESSION['adminLogin']==true)){
    echo "<script>
         window.location.href='index.php';
    </script>";
    exit;
  }
}

function redirect($url)
{
    echo "<script>
        window.location.href='$url';
    </script>";
    exit;
}

function alert($type,$msg)
{
  $bs_class = ($type == "success") ? "alert-success" : "alert-danger";
    echo <<<alert
    <div class="alert $bs_class alert-dismissible fade show msg-alert" role="alert" >
     <strong class="me-4">$msg</strong> 
     <button type="submit" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  alert;
}

function uploadImage($image,$folder)
{
  $valid_mime = ['image/jpg','image/jpeg','image/png'];
  $img_mime = $image['type'];

  if(!in_array($img_mime,$valid_mime)){
    return 'inv_img'; //invalid image mime or format
  }
   else if(($image['size']/(1024*1024))>2){
    return 'inv_size'; //invalid image size  greater than 2mb
  }
   else{
    $ext = pathinfo($image['name'],PATHINFO_EXTENSION);
    $rname = 'IMG_'.random_int(11111,99999).".$ext";

    $img_path = UPLOAD_IMAGE_PATH.$folder.$rname;
    if(move_uploaded_file($image['tmp_name'],$img_path)){
      return $rname;
    }
    else{
      return 'upd_failed';
    }

  }


}

function deleteImage($image, $folder)
{
  if(unlink(UPLOAD_IMAGE_PATH.$folder.$image)){
    return true;
  }
  else{
    return false;
  }

}


function uploadSVGImage($image,$folder)
{
  $valid_mime = ['image/svg+xml'];
  $img_mime = $image['type'];

  if(!in_array($img_mime,$valid_mime)){
    return 'inv_img'; //invalid image mime or format
  }
   else if(($image['size']/(1024*1024))>1){
    return 'inv_size'; //invalid image size  greater than 1mb
  }
   else{
    $ext = pathinfo($image['name'],PATHINFO_EXTENSION);
    $rname = 'IMG_'.random_int(11111,99999).".$ext";

    $img_path = UPLOAD_IMAGE_PATH.$folder.$rname;
    if(move_uploaded_file($image['tmp_name'],$img_path)){
      return $rname;
    }
    else{
      return 'upd_failed';
    }

  }


}

?>