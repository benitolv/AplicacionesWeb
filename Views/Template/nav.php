<<<<<<< HEAD
<?php
session_start();
?>
  <body>
  <nav class="navbar navbar-expand navbar-dark bg-dark">
    <a class="navbar-brand" href="<?php echo URL; ?>Home">Califas</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  <?php
  if(isset($_SESSION['id_usuario']))
  {
      if (isset($_SESSION['id_tipo_usuario']) AND $_SESSION['id_tipo_usuario']== 1)
      {
      echo $_SESSION['nombre'];
      ?>
      <script type="text/javascript">
      $(document).ready(function(){
        swal("Login!", "Login exitoso alumno!", "success")
      })
    </script>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

      <li class="nav-item dropdown" style="margin-left:1em;">
      <a class="nav-link dropdown-toggle  " data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Calificaciones</a>
      <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Ver</a>
      <a class="dropdown-item" href="#">Acentar</a>
      <a class="dropdown-item" href="#">Modificar</a>
      </li>

      <?php
      }

      else
      if (isset($_SESSION['id_tipo_usuario']) AND $_SESSION['id_tipo_usuario']== 2)
      {
      echo $_SESSION['nombre'];
      ?><script type="text/javascript">
      $(document).ready(function(){
        swal("Login!", "Login exitoso Docente!", "success")
      })
    </script>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

      <li class="nav-item dropdown" style="margin-left:1em;">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Materias</a>
      <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Asignar</a>
      </li></li>
      <?php
        }

=======

<?php
session_start();
?>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <a class="navbar-brand" href="#">EPO 41</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

      <?php
    if(isset($_SESSION['id_usuario']))
    {
        if (isset($_SESSION['id_tipo_usuario']) AND $_SESSION['id_tipo_usuario']== 1)
        {
        echo $_SESSION['nombre'];
        ?>



      <li class="nav-item dropdown" style="margin-left:1em;">
      <a class="nav-link dropdown-toggle  " data-toggle="dropdown" href="#" id="dropdown01" role="button" aria-haspopup="true" aria-expanded="false">Calificaciones</a>
      <div class="dropdown-menu" aria-labelledby="dropdown01">
      <a class="dropdown-item" href="#">Ver</a>
      <a class="dropdown-item" href="#">Acentar</a>
      <a class="dropdown-item" href="#">Modificar</a>
    </li>
      <?php
      }
      else
if (isset($_SESSION['id_tipo_usuario']) AND $_SESSION['id_tipo_usuario']== 2)
{
echo $_SESSION['nombre'];
?>


      <li class="nav-item dropdown" style="margin-left:1em;">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="dropdown02" role="button" aria-haspopup="true" aria-expanded="false">Materias</a>
      <div class="dropdown-menu" aria-labelledby="dropdown02">
      <a class="dropdown-item" href="#">Asignar</a>
      </li>
      <?php
      }
>>>>>>> 6b9c16fc3c1ecf23d192e67cb52263ede2df98e0
      else
      if (isset($_SESSION['id_tipo_usuario']) AND $_SESSION['id_tipo_usuario']== 3)
      {
      echo $_SESSION['nombre'];
<<<<<<< HEAD

      ?>
    <script type="text/javascript">
      $(document).ready(function(){
        swal("Login!", "Login exitoso Jefe!", "success")
      })
    </script>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown" style="margin-left:1em;">
      <a class="nav-link dropdown-toggle"  data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Reportes</a>
      <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Materia</a>
      <a class="dropdown-item" href="#">Grupo</a>
      <a class="dropdown-item" href="#">Aprobacion</a>
      </li>


<?php
      }
}
      ?>
    </ul>

<?php if (isset($_SESSION['id_tipo_usuario']))
{
 ?>
    <a class="btn btn-outline-danger"  href="<?php echo URL; ?>Login/logout">Salir</a>
<?php
 }
else
{
?>

    <a class="btn btn-outline-primary"  href="<?php echo URL; ?>Login">Login</a>


<?php } ?>
=======
      ?>

      <li class="nav-item dropdown" style="margin-left:1em;">
      <a class="nav-link dropdown-toggle"  data-toggle="dropdown" href="#" id="dropdown03" role="button" aria-haspopup="true" aria-expanded="false">Reportes</a>
      <div class="dropdown-menu" aria-labelledby="dropdown03">
      <a class="dropdown-item" href="#">Materia</a>
      <a class="dropdown-item" href="#">Grupo</a>
      <a class="dropdown-item" href="#">Aprobacion</a>



    <?php }
      }
      ?>
      </li>

   </ul>



    <form class="form-inline my-2 my-lg-0" style="margin-left:1em;">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
<!--de aqui para arriba tienes un desmadre-->

<!--adentro de este pones otras condiciones iguales para validar que tipo menu quieres para el usuario-->
<?php if (isset($_SESSION['id_tipo_usuario']))
{
?>
<form class="form-inline my-2 my-lg-0" style="margin-left:1em;">
  <a class="btn btn-outline-danger" href="<?php echo URL; ?>Login/logout">Salir</a>
</form>
<?php
}
else
//esta parte es el nav para los que no esten logueados
{
?>
<form class="form-inline my-2 my-lg-0" style="margin-left:1em;">
    <a class="btn btn-outline-primary" href="<?php echo URL; ?>Login">Login</a>
</form>
<form class="form-inline my-2 my-lg-0" style="margin-left:1em;">
  <a class="btn btn-outline-primary" href="<?php echo URL; ?>Login/Registrar">Registro</a>
</form>

<?php
}
?>

</div>
>>>>>>> 6b9c16fc3c1ecf23d192e67cb52263ede2df98e0
</div>
</nav>
