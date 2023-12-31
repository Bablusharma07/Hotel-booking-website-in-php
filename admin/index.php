<?php 

require('inc/essential.php');
require('inc/db_config.php');
   session_start();
   if((isset($_SESSION['adminLogin']) && $_SESSION['adminLogin']==true)){
    redirect('dashboard.php');
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Panel</title>
    <?php require('inc/links.php');?>
    <style>
        .login-form{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 380px;
        }
    </style>
</head>
<body class="bg-light">
    <div class="login-form text-center rounded bg-white shadow ">
        <form method="POST" action="">
            <h4 class="bg-dark text-white py-3">ADMIN LOGIN PANEL</h4>
            <div class="p-4">
             <div class="mb-3">
             <input name="admin_name" required type="name" class="form-control shadow-none text-center " placeholder="Admin Name">
             </div>
             <div class="mb-3">
             <input name="admin_pass" required type="password" id="password" class="form-control shadow-none text-center " 
              placeholder="Password" autocomplete="off">
             <div class="input-group">
              <i id="open" class="bi bi-eye-fill " style="margin-top:-30px; margin-left:307px; cursor:pointer"></i>
              <i id="closed" class="bi bi-eye-slash" style="margin-top:-30px; margin-left:307px; display:none; cursor:pointer"></i>
              </div>
             </div>
              <button name="login" type="login" class="btn btn-success text-white shadow-none">Login</button>
            </div>
        </form>
    </div>

    <?php
  if(isset($_POST['login']))
  {
   $frm_data = filteration($_POST);
   
   $query = "SELECT * FROM `admin_cred` WHERE `admin_name`=? AND `admin_pass`=?";
   $values = [$frm_data['admin_name'],$frm_data['admin_pass']];

    $res = select($query,$values,"ss");
    if($res->num_rows==1){
    $row = mysqli_fetch_assoc($res);
    $_SESSION['adminLogin'] = true;
    $_SESSION['adminId'] = $row['sr_no'];
    redirect('dashboard.php');
    }
    else{
      alert('error', 'Login Failed-Invalid Credentials!');
    }
  }
 ?>

<?php require('inc/script.php');?>

<script>
    $(document).ready(function(){

        $("#open").click(function(){
        $("#open").hide();
        $("#closed").show();
        $("#password").attr("type","text");

      });

    $("#closed").click(function(){
        $("#closed").hide();
        $("#open").show();
        $("#password").attr("type","password");

      });

    });
</script>
</body>
</html>