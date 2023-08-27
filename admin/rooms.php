<?php
require('inc/essential.php');
require('inc/db_config.php');
adminLogin();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel -Users Details</title>
  <link rel="stylesheet" href="inc/common.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <?php require('inc/links.php');?>


</head>
<body class="bg-light">
<?php require('inc/header.php');?>
<!--Add room card section-->
 <div class="conatainer-fluid" id="main-content">
  <div class="row">
   <div class="col-lg-10 ms-auto p-4 overflow-hidden">
    <h3 class="mb-3 fw-bold h_font">ROOMS</h3>
      <div class="card border-0 shadow-sm mb-4">
       <div class="card-body">
        <div class="text-end mb-4">
         <button type="submit" class="btn btn-dark shadow-none" data-toggle="modal" data-target="#addroom">
          <i class="bi bi-plus-square-fill"></i> Add
         </button>
        </div>

 <div class="table-responsive-lg" style="height:450px; overflow-y: scroll;">
   <table class="table table-hover border text-center">
     <thead>
       <tr class="bg-dark text-light">
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Area</th>
        <th scope="col">Guests</th>
        <th scope="col">Price</th>
        <th scope="col">Quantity</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>
       </tr>
     </thead>
        <tbody id="rooms_data">
                
        </tbody>
    </table>
     </div>
    </div>
   </div>
  </div>
 </div>
</div>

  <!-- Add Rooms modal section-->
 <div class="modal fade" id="addroom" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="false">
  <div class="modal-dialog modal-lg">
    <form id="rooms_form" autocomplete="off">
     <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title fw-bold" id="exampleModalLabel">Add Room</h4>
        </div>
        <div class="modal-body">
          <div class="row">

           <div class="col-md-6 mb-2">
            <label class="form-label fw-bold">Name</label>
            <input type="text" name="name" class="form-control shadow-none" required>
           </div>

           <div class="col-md-6 mb-2">
            <label class="form-label fw-bold">Area</label>
            <input type="number" min="1" name="area" class="form-control shadow-none" required>
           </div>

           <div class="col-md-6 mb-2">
            <label class="form-label fw-bold">Price</label>
            <input type="number" min="1" name="price" class="form-control shadow-none" required>
           </div>

           <div class="col-md-6 mb-2">
            <label class="form-label fw-bold">Quantity</label>
            <input type="number" min="1" name="quantity" class="form-control shadow-none" required>
           </div>

           <div class="col-md-6 mb-2">
            <label class="form-label fw-bold">Adult(Max.)</label>
            <input type="number" min="1" name="adult" class="form-control shadow-none" required>
           </div>

           <div class="col-md-6 mb-2">
            <label class="form-label fw-bold">Children(Max.)</label>
            <input type="number" min="1" name="children" class="form-control shadow-none" required>
           </div>

           <div class="col-12 mb-2">
            <label class="form-label fw-bold">Features</label>
             <div class="row">
             <?php
              $res = selectAll('features');
              while($opt= mysqli_fetch_assoc($res)){
                echo"
                 <div class='col-md-3 mb-1'>
                 <label>
                 <input type='checkbox'  name='features' value='$opt[id]' class='form-check-input shadow-none' >
                 $opt[name]
                 </label>
                 </div>
                ";
               }
              ?>
            </div>
           </div>
            
           <div class="col-12 mb-2">
            <label class="form-label fw-bold">Facilities</label>
             <div class="row">
             <?php
              $res = selectAll('facilities');
              while($opt= mysqli_fetch_assoc($res)){
                echo"
                 <div class='col-md-3 mb-1'>
                 <label>
                 <input type='checkbox'  name='facilities' value='$opt[id]' class='form-check-input shadow-none' >
                 $opt[name]
                 </label>
                 </div>
                ";
               }
              ?>
            </div>
           </div>
           
           <div class="col-md-12 mb-2">
            <label class="form-label fw-bold">Description</label>
            <textarea  name="desc" rows="4" class="form-control shadow-none" required></textarea>
           </div>

          </div>
         </div>
         <div class="modal-footer">
          <button type="reset" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <button type="submit"  class="btn btn-success">Add</button>
        </div>
     </div>
    </form>
   </div>
 </div>

 
  <!-- Edit Rooms modal section-->
  <div class="modal fade" id="edit-room" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="false">
  <div class="modal-dialog modal-lg">
    <form id="edit_room_form" autocomplete="off">
     <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title fw-bold" id="exampleModalLabel">Edit Room</h4>
        </div>
        <div class="modal-body">
          <div class="row">


           <div class="col-md-6 mb-2">
            <label class="form-label fw-bold">Name</label>
            <input type="text" name="name" class="form-control shadow-none" required>
           </div>

           <div class="col-md-6 mb-2">
            <label class="form-label fw-bold">Area</label>
            <input type="number" min="1" name="area" class="form-control shadow-none" required>
           </div>

           <div class="col-md-6 mb-2">
            <label class="form-label fw-bold">Price</label>
            <input type="number" min="1" name="price" class="form-control shadow-none" required>
           </div>

           <div class="col-md-6 mb-2">
            <label class="form-label fw-bold">Quantity</label>
            <input type="number" min="1" name="quantity" class="form-control shadow-none" required>
           </div>

           <div class="col-md-6 mb-2">
            <label class="form-label fw-bold">Adult(Max.)</label>
            <input type="number" min="1" name="adult" class="form-control shadow-none" required>
           </div>

           <div class="col-md-6 mb-2">
            <label class="form-label fw-bold">Children(Max.)</label>
            <input type="number" min="1" name="children" class="form-control shadow-none" required>
           </div>

           <div class="col-12 mb-2">
            <label class="form-label fw-bold">Features</label>
             <div class="row">
             <?php
              $res = selectAll('features');
              while($opt= mysqli_fetch_assoc($res)){
                echo"
                 <div class='col-md-3 mb-1'>
                 <label>
                 <input type='checkbox'  name='features' value='$opt[id]' class='form-check-input shadow-none' >
                 $opt[name]
                 </label>
                 </div>
                ";
               }
              ?>
            </div>
           </div>
            
           <div class="col-12 mb-2">
            <label class="form-label fw-bold">Facilities</label>
             <div class="row">
             <?php
              $res = selectAll('facilities');
              while($opt= mysqli_fetch_assoc($res)){
                echo"
                 <div class='col-md-3 mb-1'>
                 <label>
                 <input type='checkbox'  name='facilities' value='$opt[id]' class='form-check-input shadow-none' >
                 $opt[name]
                 </label>
                 </div>
                ";
               }
              ?>
            </div>
           </div>
           
           <div class="col-md-12 mb-2">
            <label class="form-label fw-bold">Description</label>
            <textarea  name="desc" rows="4" class="form-control shadow-none" required></textarea>
           </div>
           <input type="hidden" name="rooms_id" id="rooms_id">


          </div>
         </div>
         <div class="modal-footer">
          <button type="reset" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <button type="submit"  class="btn btn-success">Submit</button>
        </div>
     </div>
    </form>
   </div>
 </div>


 <?php require('inc/script.php');?>
   <script>

    let rooms_form = document.getElementById('rooms_form');


    rooms_form.addEventListener('submit',function(e){
    e.preventDefault();
    add_rooms();
    });

 function add_rooms()
 {
    let data = new FormData();
    data.append('add_rooms','');
    data.append('name', rooms_form.elements['name'].value);
    data.append('area', rooms_form.elements['area'].value);
    data.append('price', rooms_form.elements['price'].value);
    data.append('quantity', rooms_form.elements['quantity'].value);
    data.append('adult', rooms_form.elements['adult'].value);
    data.append('children', rooms_form.elements['children'].value);
    data.append('desc', rooms_form.elements['desc'].value);

    let features = [];
     rooms_form.elements['features'].forEach(el =>{
        if(el.checked){
            features.push(el.value);
        }
    });

    let facilities = [];
     rooms_form.elements['facilities'].forEach(el =>{
        if(el.checked){
            facilities.push(el.value);
        }
    });

    data.append('features',JSON.stringify(features));
    data.append('facilities',JSON.stringify(facilities));


    let xhr = new XMLHttpRequest();
    xhr.open('POST','ajax/rooms_crud.php',true);

        xhr.onload = function(){
        // var myModal = document.getElementById('addroom')
        // var modal = bootstrap.Modal.getInstance(myModal) // Returns a Bootstrap modal instance
        // modal.hide();
        // console.log(this.responseText);
    
    if(this.responseText ==1){
        alert('success','New room added!');
        rooms_form.reset();
         get_all_rooms();
        }
        else{
            alert('error', 'Server Down');

        }
    }
    xhr.send(data);
 }

 function get_all_rooms()
 {
  let xhr = new XMLHttpRequest();
  xhr.open('POST','ajax/rooms_crud.php',true);
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

  xhr.onload = function(){
  document.getElementById('rooms_data').innerHTML = this.responseText;

  }
  xhr.send('get_all_rooms');

 }

 let edit_room_form = document.getElementById('edit_room_form');

 function edit_details(id)
 {
  // console.log(id);
  let xhr = new XMLHttpRequest();
  xhr.open('POST','ajax/rooms_crud.php',true);
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

  xhr.onload = function(){
  let data = JSON.parse(this.responseText);

  edit_room_form.elements['name'].value = data.roomsdata.name;
  edit_room_form.elements['area'].value = data.roomsdata.area;
  edit_room_form.elements['price'].value = data.roomsdata.price;
  edit_room_form.elements['quantity'].value = data.roomsdata.quantity;
  edit_room_form.elements['adult'].value = data.roomsdata.adult;
  edit_room_form.elements['children'].value = data.roomsdata.children;
  edit_room_form.elements['desc'].value = data.roomsdata.desc;
  edit_room_form.elements['rooms_id'].value = data.roomsdata.id;

  edit_room_form.elements['facilities'].forEach(el =>{
        if(data.facilities.includes(Number(el.value))){
            el.checked = true;
        }
      });

  edit_room_form.elements['features'].forEach(el =>{
        if(data.features.includes(Number(el.value))){
            el.checked = true;
        }
      });



  }
  xhr.send('get_room='+id);
 }

 edit_room_form.addEventListener('submit',function(e){
    e.preventDefault();
    submit_edit_room();
    });

 function submit_edit_room()
 {
    let data = new FormData();
    data.append('edit_rooms','');
    data.append('rooms_id', edit_room_form.elements['rooms_id'].value);
    data.append('name', edit_room_form.elements['name'].value);
    data.append('area', edit_room_form.elements['area'].value);
    data.append('price', edit_room_form.elements['price'].value);
    data.append('quantity', edit_room_form.elements['quantity'].value);
    data.append('adult', edit_room_form.elements['adult'].value);
    data.append('children', rooms_form.elements['children'].value);
    data.append('desc', edit_room_form.elements['desc'].value);
    

    let features = [];
    edit_room_form.elements['features'].forEach(el =>{
        if(el.checked){
            features.push(el.value);
        }
    });

    let facilities = [];
    edit_room_form.elements['facilities'].forEach(el =>{
        if(el.checked){
            facilities.push(el.value);
        }
    });

    data.append('features',JSON.stringify(features));
    data.append('facilities',JSON.stringify(facilities));


    let xhr = new XMLHttpRequest();
    xhr.open('POST','ajax/rooms_crud.php',true);

        xhr.onload = function(){
        var myModal = document.getElementById('edit-room')
        var modal = bootstrap.Modal.getInstance(myModal) // Returns a Bootstrap modal instance
        modal.hide();
        // console.log(this.responseText);
    
    if(this.responseText ==1){
        alert('success','Room data edited!');
        edit_room_form.reset();
         get_all_rooms();
        }
        else{
            alert('error', 'Server Down');

        }
    }
    xhr.send(data);
 }

 function toggle_status(id,val)
 {
  let xhr = new XMLHttpRequest();
  xhr.open('POST','ajax/rooms_crud.php',true);
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

  xhr.onload = function(){
  if(this.responseText==1){
    alert('success', 'Status toggle!');
    get_all_rooms();
  }else{
    alert('error','server down1');
  }

  }
  xhr.send('toggle_status='+id+'&value='+val);

 }

 
 window.onload = function()
 {
  get_all_rooms();
 }
   </script>
  
  </body>
</html> 