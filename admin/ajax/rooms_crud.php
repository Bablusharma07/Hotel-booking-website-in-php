<?php

    require('../inc/db_config.php');
    require('../inc/essential.php');
    adminLogin();

 if(isset($_POST['add_rooms']))
 {
     $features = filteration(json_decode($_POST['features']));
     $facilities = filteration(json_decode($_POST['facilities']));

     $frm_data = filteration($_POST);
     $flag = 0;

    $q1 = "INSERT INTO `rooms`(`name`, `area`, `price`, `quantity`, `adult`, `children`, `desc`) VALUES (?,?,?,?,?,?,?)";
    $values = [$frm_data['name'],$frm_data['area'],$frm_data['price'],$frm_data['quantity'],
               $frm_data['adult'],$frm_data['children'],$frm_data['desc']];
   
    if(insert($q1,$values,'siiiiis')){
     $flag = 1;
    }

     $room_id = mysqli_insert_id($con);

     $q2 = "INSERT INTO `rooms_facilities`(`rooms_id`, `facilities_id`) VALUES (?,?)";
     if($stmt = mysqli_prepare($con,$q2)){
        foreach($facilities as $f){
           mysqli_stmt_bind_param($stmt,'ii',$room_id,$f);
           mysqli_stmt_execute($stmt);
         }
          mysqli_stmt_close($stmt);
     }
       else{
        $flag = 0;
        die("Query cannot be prepare-insert");
     }

     $q3 = "INSERT INTO `rooms_features`(`rooms_id`, `features_id`) VALUES (?,?)";
     if($stmt = mysqli_prepare($con,$q3)){
        foreach($features as $f){
            mysqli_stmt_bind_param($stmt,'ii',$room_id,$f);
            mysqli_stmt_execute($stmt);
        }
         mysqli_stmt_close($stmt);
       
     }else{
        $flag = 0;
        die("Query cannot be prepare-insert");
     }

     if($flag){
            echo 1;
      }else{
            echo 0;
     }
   
 }

if(isset($_POST['get_all_rooms']))
 {
   $res = selectAll('rooms');
   $i=1;

   $data ="";

   while($row = mysqli_fetch_assoc($res))
    {
      if($row['status']==1){
         $status = "<button onclick='toggle_status($row[id],0)' class='btn btn-success btn-sm shadow-none'>active</button>";
      }
       else{
         $status = "<button onclick='toggle_status($row[id],1)' class='btn btn-warning btn-sm shadow-none'>inactive</button>";
       }
      $data .="
          <tr class='align-middle'>  
            <td>$i</td>
            <td>$row[name]</td>
            <td>$row[area] sq. ft.</td>  
            <td>
             <span class='badge rounded-pill bg-light text-dark'>
              Adult:$row[adult]
             </span><br>
             <span class='badge rounded-pill bg-light text-dark'>
             Children:$row[children]
            </span>
            </td>
            <td>₹$row[price]</td>  
            <td>$row[quantity]</td> 
            <td>$status</td> 
            <td>
            <button type='submit' onclick='edit_details($row[id])' class='btn btn-primary shadow-none' data-toggle='modal' data-target='#edit-room'>
            <i class='bi bi-pencil-square'></i>
            </button>
            </td>
           
          </tr> 
          ";
         $i++;
       
     

    echo $data;
   }
      
 }

 if(isset($_POST['get_room']))
 {
   $frm_data = filteration($_POST);

   $res1 = select("SELECT * FROM `rooms` WHERE `id`=?", [$frm_data['get_room']],'i');
   $res2 = select("SELECT * FROM `rooms_facilities` WHERE `rooms_id`=?", [$frm_data['get_room']],'i');
   $res3 = select("SELECT * FROM `rooms_features` WHERE `rooms_id`=?", [$frm_data['get_room']],'i');

   $roomsdata = mysqli_fetch_assoc($res1);
   $facilities = [];
   $features = [];

   if(mysqli_num_rows($res2)>0){
      while($row = mysqli_fetch_assoc($res2)){
         array_push($facilities,$row['facilities_id']);
      }
   }

   if(mysqli_num_rows($res3)>0){
      while($row = mysqli_fetch_assoc($res3)){
         array_push($features, $row['features_id']);
      }
   }

   $data = ["roomsdata"=> $roomsdata, "facilities"=>$facilities, "features"=>  $features];
   $data = json_encode($data);

   echo $data;
 }

 if(isset($_POST['edit_rooms']))
 {
   $facilities = filteration(json_decode($_POST['facilities']));
   $features = filteration(json_decode($_POST['features']));


   $frm_data = filteration($_POST);
   $flag = 0;

   $q1 = "UPDATE `rooms` SET `name`=?,`area`=?,`price`=?,`quantity`=?,`adult`=?,`children`=?,`desc`=? WHERE `id`=?";
   $values = [$frm_data['name'],$frm_data['area'],$frm_data['price'],$frm_data['quantity'],
              $frm_data['adult'],$frm_data['children'],$frm_data['desc'],$frm_data['rooms_id']];
   
   if(update($q1,$values,'siiiiisi')){
    $flag = 1;
   }
     $del_facilities = delete("DELETE FROM `rooms_facilities` WHERE `rooms_id`=?", [$frm_data['rooms_id']],'i');
     $del_features = delete("DELETE FROM `rooms_features` WHERE `rooms_id`=?", [$frm_data['rooms_id']],'i');

   if(!($del_facilities &&  $del_features)){
      $flag = 0;
   }

   $q2 = "INSERT INTO `rooms_facilities`(`rooms_id`, `facilities_id`) VALUES (?,?)";
   if($stmt = mysqli_prepare($con,$q2)){
      foreach($facilities as $f){
         mysqli_stmt_bind_param($stmt,'ii',$frm_data['rooms_id'],$f);
         mysqli_stmt_execute($stmt);
       }
        $flag = 1;
        mysqli_stmt_close($stmt);
   }
     else{
      $flag = 0;
      die("Query cannot be prepare-insert");
   }

   $q3 = "INSERT INTO `rooms_features`(`rooms_id`, `features_id`) VALUES (?,?)";
   if($stmt = mysqli_prepare($con,$q3)){
      foreach($features as $f){
          mysqli_stmt_bind_param($stmt,'ii',$frm_data['rooms_id'],$f);
          mysqli_stmt_execute($stmt);
      }
       $flag = 1;
       mysqli_stmt_close($stmt);
     
   }else{
      $flag = 0;
      die("Query cannot be prepare-insert");
   }

   if($flag){
          echo 1;
    }else{
          echo 0;
   }
 }

 if(isset($_POST['toggle_status']))
 {
   $frm_data = filteration($_POST);

   $q ="UPDATE `rooms` SET `status`=? WHERE `id`=?";
   $v = [$frm_data['value'],$frm_data['toggle_status']];

   if(update($q,$v,'ii')){
      echo 1;
   }else{
      echo 0;
   }

 }
?>