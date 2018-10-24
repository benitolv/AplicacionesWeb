<<<<<<< HEAD
<!--<script type="text/javascript">
  $(document).ready(function(){
    swal({
      title: "No has iniciado sesion",
      text: "Deseas iniciar sesion ahora",
      type: "warning",
      closeOnConfirm: true,
      closeOnCancel: true,
      showCancelButton: true,
      confirmButtonClass: "btn-primary",
      CancelButtonClass: "btn-danger",

  }, function(isConfirm){ window.location.href='<?php echo URL ?>Login';

}
);
  }) 
</script>-->
<br><br><br><br>

<div class="container" style="border: solid .5px black;  border-radius: 10px;">
  
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="public/img/tesvb1.PNG" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="public/img/tesvb1.PNG" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="public/img/tesvb3.PNG" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a><script type="text/javascript" src="<?php echo URL ?>Public/js/sweetalert.min.js"></script>
      </div>

  
</div>
=======
<h4><p>
  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
  Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
  Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
  Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
</p></h4>

<!--mensaje de alerta -->
<!--<script type="text/javascript">
$(document).ready(function(){
  swal({
    title: "Good job!",
    text: "You clicked the button!",
    icon: "success",
    button: "Aww yiss!",
  });
})
</script>-->

<!--alerta de no has iniciado sesion -->
<script type="text/javascript">
$(document).ready(function(){
  swal({
    title: "Aun no has iniciado sesion",
    text: "Ingrese ahora",
    type: "warning",
    closeOnConfirm: false,
    closeOnCancel: true,
    showCancelButton: true,
    confirmButtonClass: "btn-danger",
  },
  function(isConfirm){
    if(isConfirm)
    window.location.href = "<?php echo URL ?>login";
  }
);
})
</script>
>>>>>>> 6b9c16fc3c1ecf23d192e67cb52263ede2df98e0
