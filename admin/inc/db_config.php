<?php
$hname = "localhost";
$uname = "root";
$pass = "";
$db = "bkwebsite";

 $con = mysqli_connect($hname, $uname,"",$db);

  if(!$con)
  {
    die("Connection Failed" .mysqli_connect_error());
  }

  function filteration($data){
   foreach($data as $key => $value){
      $value = trim($value);
      $value = stripslashes($value);
      $value = strip_tags($value);
      $value = htmlspecialchars($value);
      $data[$key] =$value;
   }
   return $data;
  }

  function selectAll($table)
 {
   $con = $GLOBALS ['con'];
   $res = mysqli_query($con, "SELECT * FROM  $table");
   return $res;
 }

function select($query,$values,$datatypes)
  {
   $con = $GLOBALS ['con'];
   if($stmt = mysqli_prepare($con,$query)){
   mysqli_stmt_bind_param($stmt,$datatypes,...$values);
   if( mysqli_stmt_execute($stmt)){
    $res = mysqli_stmt_get_result($stmt);
    mysqli_stmt_close($stmt);
    return $res;
   } else{
      mysqli_stmt_close($stmt);
      die("Query cannot be execuetd-Select");
      }
   }else{
      die("Query cannot be prepared-Select");
      }
  }

 function update($query,$values,$datatypes)
 {
  $con = $GLOBALS ['con'];
  if($stmt = mysqli_prepare($con,$query))
  {
  mysqli_stmt_bind_param($stmt,$datatypes,...$values);
  if( mysqli_stmt_execute($stmt)){
  $res = mysqli_stmt_affected_rows($stmt);
   mysqli_stmt_close($stmt);
   return $res;
  } 
  else{
     mysqli_stmt_close($stmt);
     die("Query cannot be execuetd-Update");
     }
  }
  else{
     die("Query cannot be prepared-Update");
     }
 }

function insert($query,$values,$datatypes)
{
 $con = $GLOBALS ['con'];
 if($stmt = mysqli_prepare($con,$query))
 {
 mysqli_stmt_bind_param($stmt,$datatypes,...$values);
 if( mysqli_stmt_execute($stmt)){
 $res = mysqli_stmt_affected_rows($stmt);
  mysqli_stmt_close($stmt);
  return $res;
 } 
 else{
    mysqli_stmt_close($stmt);
    die("Query cannot be execuetd-Insert");
    }
 }
 else{
    die("Query cannot be prepared-Insert");
    }
}

function delete($query,$values,$datatypes)
{
 $con = $GLOBALS ['con'];
 if($stmt = mysqli_prepare($con,$query))
 {
 mysqli_stmt_bind_param($stmt,$datatypes,...$values);
 if( mysqli_stmt_execute($stmt)){
 $res = mysqli_stmt_affected_rows($stmt);
  mysqli_stmt_close($stmt);
  return $res;
 } 
 else{
    mysqli_stmt_close($stmt);
    die("Query cannot be execuetd-Delete");
    }
 }
 else{
    die("Query cannot be prepared-Delete");
    }
}

?>