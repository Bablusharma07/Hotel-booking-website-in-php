<?php
require('admin/inc/db_config.php');
require('admin/inc/essential.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contacts</title>
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
    <h2 class="fw-bold text-center h_font">Contact Us</h2>
    <div class=" h_line bg-dark "></div>
     <p class="text-center mt-3">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit.<br>
        Mollitia, dolor necessitatibus non voluptatem explicabo quo nam est soluta quis placeat!
     </p>
</div>

<?php
  $contact_q = "SELECT * FROM `contacts` WHERE `sr_no`=?";
  $values =[1];
  $contact_r =mysqli_fetch_assoc(select($contact_q,$values,'i'));
  // print_r($contact_r);
 ?>

 <div class="container">
  <div class="row">
    <div class="col-lg-6 col-lg-md-6 mb-2 px-4">
     <div class="bg-white rounded shadow p-4 ">

      <iframe class="w-100 rounded" height="250px"  src="<?php echo $contact_r['iframe']?>" loading="lazy"></iframe>
        <h5 class="mt-3">Address</h5>

        <a href="<?php echo $contact_r['gmap']?>" target="_blank" class="d-inline-block text-decoration-none mb-1">
        <i class="bi bi-geo-alt-fill"></i> <?php echo $contact_r['address']?>
        </a>

        <h5 class="mt-2">Call Us</h5>
         <a href="tel: +<?php echo $contact_r['pn1']?>" class="d-inline-block mb-1 text-decoration-none text-dark">
         <i class="bi bi-telephone-fill"></i> +<?php echo $contact_r['pn1']?>
         </a>
        <?php
        if($contact_r['pn2']!=''){
            echo<<<data
             <a href="tel: +$contact_r[pn2]" class="d-inline-block text-decoration-none text-dark px-2">
             <i class="bi bi-telephone-fill"></i> +$contact_r[pn2]
             </a>
            data;
         }
        ?>
        
        <h5 class="mt-1">Email</h5>
        <a href="mailto: <?php echo $contact_r['email']?>" class="d-inline-block text-decoration-none text-dark mb-1">
        <i class="bi bi-envelope-at"></i> <?php echo $contact_r['email']?>
        </a>

        <h5 class="mt-2">Follow Us</h5>
        <?php
         if($contact_r['pn2']!=''){
            echo<<<data
            <a href="$contact_r[tw]" class="d-inline-block text-dark fs-5 me-3 mb-3 ">
            <i class="bi bi-twitter"></i> 
            </a>
            data;

         }
        ?>

        <a href="<?php echo $contact_r['insta']?>" class="d-inline-block text-dark fs-5 me-3 mb-3 ">
        <i class="bi bi-instagram"></i> 
        </a>
        
        <a href="<?php echo $contact_r['fb']?>" class="d-inline-block text-dark fs-5 me-3  ">
        <i class="bi bi-facebook"></i> 
        </a>

         </div>
        </div>

        <!--Send Msg section-->
        <div class="col-lg-6 col-lg-md-6 px-4">
            <div class="bg-white rounded shadow p-4  pop">
                <form method="POST">
                    <h5>Send Message</h5>

                    <div class="mt-4">
                    <label class="form-label" style="font-weight: 500;">Name</label>
                    <input type="text" name="name" class="form-control shadow-none" required >
                    </div>

                    <div class="mt-4">
                    <label class="form-label" style="font-weight: 500;">E-mail</label>
                    <input type="email" name="email" class="form-control shadow-none" required>
                    </div>

                    <div class="mt-4">
                    <label class="form-label" style="font-weight: 500;">Subject</label>
                    <input type="text" name="subject" class="form-control shadow-none" required >
                    </div>

                    <div class="mt-4">
                    <label class="form-label" style="font-weight: 500;">Message</label>
                    <textarea name="message" class="form-control shadow-none" required rows="5" style="resize: none;"> </textarea>
                    </div>

                    <button type="submit" name="send" class="btn btn-success mt-3 ">SEND</button>
                </form>
            </div>
         </div>
        </div>
    </div>

    <?php
     if(isset($_POST['send'])){
        $frm_data = filteration($_POST);

        $q = "INSERT INTO `user_details`(`name`, `email`, `subject`, `message`) VALUES (?,?,?,?)";
        $values = [$frm_data['name'],$frm_data['email'],$frm_data['subject'],$frm_data['message']];
        $res = insert($q,$values,'ssss');
        if($res==1){
            alert('success', 'Data inserted successfull!');
        }
        else{
            alert('error', 'Not inserted data!');
        }
     }
    ?>
       
<?php require('inc/footer.php');?>
</body>
</html>