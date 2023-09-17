<?php

require('../admin/inc/db_config.php');
require('../admin/inc/essential.php');


if(isset($_POST['register']))
{
    $data = filteration($_POST);

    if($data['pass'] != $data['cpass']){
        echo "pass_mismatach";
        exit;
    }
    // check user exists or not
     $u_exist = select("SELECT * FROM `users_cred` WHERE `email` = ?, AND `phone` = ?, LIMIT 1", [$data['email'],$data['phone']],"ss");
     if(mysqli_num_rows($u_exist)!=0){
        $u_exist_fetch = mysqli_fetch_assoc($u_exist);
        echo ( $u_exist_fetch['email'] == $data['email']) ? 'email_already_taken' : 'Phone_already_taken';
     }
}

// upload user image to server
$img = uploadUserImage($_FILES['image']);
if($img == 'inv_img'){
    echo 'inv_img';
    exit;
}
else if($img == 'upload_failed'){
    echo 'upload_failed';
    exit;
}
// send confirmation link to user's email

?>