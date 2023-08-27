

let carousel_form = document.getElementById('carousel_form');
let carousel_picture_inp = document.getElementById('carousel_picture_inp');

 carousel_form.addEventListener('submit',function(e){
  e.preventDefault();
  add_image();
 });

function add_image()
{
  let data = new FormData();
  data.append('picture', carousel_picture_inp.files[0]);
  data.append('add_image','');

  let xhr = new XMLHttpRequest();
  xhr.open('POST','ajax/carousel_crud.php',true);

  xhr.onload = function(){
    var myModal = document.getElementById('carousel-s')
    var modal = bootstrap.Modal.getInstance(myModal) // Returns a Bootstrap modal instance
     modal.hide();
    // console.log(this.responseText);
  
   if(this.responseText =='inv_img'){
      alert('error', 'Only jpg and png images are allowed!');
    }
    else if(this.responseText =='inv_size'){
      alert('error', 'Image should be less than 2MB!');
    }
     else if(this.responseText =='upd_failed'){
      alert('error', 'Image upload failed. Server Down!');
    }
    else{
      alert('success','New image added!');
      carousel_picture_inp.value='';

    }
  }
  xhr.send(data);
}

function get_carousel()
{
  let xhr = new XMLHttpRequest();
  xhr.open('POST','ajax/carousel_crud.php',true);
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

  xhr.onload = function(){
    document.getElementById('carousel_data').innerHTML = this.responseText;
   
  }
  xhr.send('get_carousel');
}

function rem_carousel(val)
{
  let xhr = new XMLHttpRequest();
  xhr.open('POST','ajax/carousel_crud.php',true);
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

  xhr.onload = function(){
    if(this.responseText==1){
      alert('success','Image Removed!');
       get_carousel();
    }
     else{
       alert('error','Server Down');
    }
  }
   xhr.send('rem_carousel='+val);
}


window.onload = function(){

  get_carousel();

  
}