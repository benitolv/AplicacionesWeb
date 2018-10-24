<<<<<<< HEAD
<br><br><br>
<div class="container" style="border: solid .5px #216db0; height: 55%;
  left: 50%;
  top: -5%;
  width: 50%;  border-radius: 10px;">
    <div class="row justify-content-center"><br>
        <div class="col-sm-8"><br>
            <h4 class="row justify-content-center">Iniciar en TESVB </h4><span class="glyphicon glyphicon-pencil"></span>
          <form class="form-signin" method="post" action="<?php echo URL ?>login/verify" id="form_login">

          <div class="form-group ">
            <label for="exampleInputEmail1">Usuario</label>
=======
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-4">
            <h4 class="row justify-content-center">Inicia Sesion </h4><span class="glyphicon glyphicon-pencil"></span>
          <form class="form-signin" data-toggle="validate" method="post" action="<?php echo URL ?>login/verify" id="form-login">

          <div class="form-group ">
            <center> <label for="exampleInputEmail1">Usuario</label> </center>
>>>>>>> 6b9c16fc3c1ecf23d192e67cb52263ede2df98e0
            <input type="text" class="form-control" placeholder="Nombre de Usuario" id="usuario" name="usuario">

          </div>
          <div class="form-group">
<<<<<<< HEAD
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control"  id="exampleInputPassword1" placeholder="Password" id="contraseña" name="contraseña">
          </div>
          <div class="form-group form-check">

            
          </div>
          <button id="entrar" type="submit" class="btn btn-outline-primary" style="position: relative; left: 30%; padding: 15px;" >Acceder</button>

          <a  class="btn btn-outline-success" style="position: relative; left: 30%; padding: 15px;" href="<?php echo URL; ?>Login/registrar">Registrar</a>
=======
            <center> <label for="exampleInputPassword1">Contraseña</label> </center>
            <input type="password" class="form-control"  placeholder="Password" id="contraseña" name="contraseña">
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">


       <button type="submit" name="login-submit" tabindex="6" class="form-control btn btn-success" id="entrar">Entrar</button>

          </div>
          </div>
          </div>

>>>>>>> 6b9c16fc3c1ecf23d192e67cb52263ede2df98e0
        </form>
        </div>

    </div>

</div>
<<<<<<< HEAD
=======

>>>>>>> 6b9c16fc3c1ecf23d192e67cb52263ede2df98e0
<script type="text/javascript">

$("#entrar").click(function()
  {
    $("#form-login").submit();
  });

  //validaciones del formulario
  jQuery.validator.addMethod("texto", function(value)
  {
    return /^[a-záéóóúàèìíòùäëïöüñ.\s]+$/i.test(value);
  });

<<<<<<< HEAD
  $("#form_login").validate({
=======
  $("#form-login").validate({
>>>>>>> 6b9c16fc3c1ecf23d192e67cb52263ede2df98e0
    errorClass:"invalid",
rules:
{
  usuario:
  {
    required:true,

  },
  contraseña:
  {
    required:true,

  },

},
messages:
{
  usuario:
  {
    required:"Usuario obligatorio",

  },
  contraseña:
  {
    required:"contraseña obligatoria",

  },
},
});

</script>
<<<<<<< HEAD









=======
>>>>>>> 6b9c16fc3c1ecf23d192e67cb52263ede2df98e0
