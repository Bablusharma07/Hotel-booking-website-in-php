
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.7.0.min.js" 
integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>



  <script>
    function alert(type,msg){
      let bs_class = (type =='success')? 'alert-success' : 'alert-danger';
      let element = document.createElement('div');
      element.innerHTML = `
      <div class="alert ${bs_class} alert-dismissible  msg-alert"  role="alert" >
       <strong class="me-4">${msg}</strong> 
       <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    `;
     document.body.append(element);
    }


 /* function setActive()
    {
    let navbar = document.getElementById('dashboard-menu');
    let a_tags = navbar.getElementByTagName('a');
    for(i=0; i<a_tags.lenght; i++){
      let file = a_tags[i].href.split('/').pop();
      let file_name = file.split('.')[0];

      if(document.location.href.indexOf(file_name) >=0){
        a_tags[i].classList.add('active');
      }
    }

   }
    setActive();*/
    
  </script>