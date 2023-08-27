<?php

    require('../inc/db_config.php');
    require('../inc/essential.php');
    adminLogin();



if(isset($_POST['add_features']))
{
  $frm_data = filteration($_POST);

  $q= "INSERT INTO `features`(`name`) VALUES (?)";
  $values = [$frm_data['name']];
  $res = insert($q,$values,'s');
  echo $res;
}

if(isset($_POST['get_features']))
{
  $res = selectAll('features');
  $i=1;
  while($row = mysqli_fetch_assoc($res))
  {
    echo <<<data
            <tr>
            <td>$i</td>
            <td>$row[name]</td>
            <td>
                <buttont type="button" onclick="rem_features($row[id])" class="btn btn-danger btn-sm shadow-none">
                  <i class="bi bi-trash-fill"></i> Delete</button>
                </div>
            </td>
            </tr>
         data;
        $i++;
   }

}

if(isset($_POST['rem_features']))
{
  $frm_data = filteration($_POST);
  $values = [$frm_data['rem_features']];

  $cheq_q = select('SELECT * FROM `rooms_features` WHERE `features_id`=?', [$frm_data['rem_features']],'i');
 if(mysqli_num_rows($cheq_q)==0){
  $q = "DELETE FROM `features` WHERE `id`=?";
  $res = delete($q,$values,'i');
   echo $res;
 }else{
  echo 'room_added';
}
  
}
  

if(isset($_POST['add_facility']))
{
  $frm_data = filteration($_POST);
  $img_r = uploadSVGImage($_FILES['icon'],FACILITY_FOLDER);

  if($img_r == 'inv_img'){
    echo $img_r;
  }
  else if($img_r == 'inv-size'){
    echo $img_r;
  }
  else if($img_r == 'upd_failed'){
    echo $img_r;
  }
  else{
    $q ="INSERT INTO `facilities`(`icon`, `name`,`description`) VALUES (?,?,?)";
    $values = [$img_r,$frm_data['name'],$frm_data['desc']];
    $res = insert($q,$values,'sss');
    echo $res;
  }
}

if(isset($_POST['get_facilities']))
 {

  $res = selectAll('facilities');
  $i=1;
  $path = FACILITY_IMG_PATH;
  while($row = mysqli_fetch_assoc($res))
  {
    echo<<<data
            <tr class="align-middle">
            <td>$i</td>
            <td><img src="$path$row[icon]" width="50px"></td>
            <td>$row[name]</td>
            <td>$row[description]</td>
              <td>
                  <buttont type="button" onclick="rem_facility($row[id])" class="btn btn-danger btn-sm shadow-none">
                    <i class="bi bi-trash-fill"></i> Delete</button>
                  </div>
              </td>
            </tr>
         data;
        $i++;
  }

 }

  if(isset($_POST['rem_facility']))
  {
    $frm_data = filteration($_POST);
    $values = [$frm_data['rem_facility']];

    $cheq_q = select('SELECT * FROM `rooms_facilities` WHERE `facilities_id`=?', [$frm_data['rem_facility']], 'i');
    if(mysqli_num_rows($cheq_q)==0){

    $pre_q = "SELECT * FROM `facilities` WHERE `id`=?";
    $res = select($pre_q,$values,'i');
    $img = mysqli_fetch_assoc($res);
  
    if(deleteImage($img['icon'],FACILITY_FOLDER)){
    $q = "DELETE FROM `facilities` WHERE `id`=?";
    $res = delete($q,$values,'i');
    echo $res;
    }
    else{
      echo 0;
    }
  }else{
    echo 'room_added';
  }
}
    
?>