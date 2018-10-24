<?php namespace AppData\Controller;
use AppData\Model\Login;
class LoginController
{
    private $login;
<<<<<<< HEAD
    
=======

>>>>>>> 6b9c16fc3c1ecf23d192e67cb52263ede2df98e0
    function __construct(){
      $this->login=new Login();

    }
    function index() {

    }
<<<<<<< HEAD
    function __destruct() {

    }
    public function verify()
	{
   		if(isset($_POST))
		{
    		$this->login->set("usuario",$_POST["usuario"]);
			$this->login->set("contraseña",$_POST["contraseña"]);

			$datos=$this->login->verify();

			if(mysqli_num_rows($datos)>0)
			{
				$datos=mysqli_fetch_assoc($datos);
				if ($datos['id_tipo_usuario']== 1) 
					{
						$_SESSION["id_usuario"]=$datos["id_usuario"];
						$_SESSION["nombre"]=$datos["nombre"]." ".$datos["apellido_paterno"]." ".$datos["apellido_materno"];
						$_SESSION["id_tipo_usuario"]=$datos["id_tipo_usuario"];
						?>
						<script type="text/javascript">
						window.location="<?php echo URL.'Home'?>";
						</script>
						<?php
					}
					else if ($datos['id_tipo_usuario']== 2) 
					{
						$_SESSION["id_usuario"]=$datos["id_usuario"];
						$_SESSION["nombre"]=$datos["nombre"]." ".$datos["apellido_paterno"]." ".$datos["apellido_materno"];
						$_SESSION["id_tipo_usuario"]=$datos["id_tipo_usuario"];
						
						?>
						<script type="text/javascript">
							window.location="<?php echo URL.'Home'?>";
						</script>
						<?php							
					}
					else if ($datos['id_tipo_usuario']== 3) 
					{
						$_SESSION["id_usuario"]=$datos["id_usuario"];
						$_SESSION["nombre"]=$datos["nombre"]." ".$datos["apellido_paterno"]." ".$datos["apellido_materno"];
						$_SESSION["id_tipo_usuario"]=$datos["id_tipo_usuario"];
						
						?>
						<script type="text/javascript">
							window.location="<?php echo URL.'Home'?>";
						</script>
						<?php							
					}
			}
			else
				{
					?>
						<script type="text/javascript">
							alert("usuario no registrado");window.location.href="<?php echo URL.'Login' ?>";
						</script>
					<?php	
				}

		}
    }

	function logout()
		{
			session_destroy();
				?>	

=======
    public function verify(){
   	/*if(isset($_POST)){
    	$this->login->set("usuario",$_POST["usuario"]);
			$this->login->set("contraseña",$_POST["contraseña"]);
			$datos=$this->login->verify();
			if(mysqli_num_rows($datos) > 0) {
				$datos=mysqli_fetch_assoc($datos);
				$_SESSION["nombre"]=$datos["nombre"]." ".$datos["ap_p"]." ".$datos["ap_p"];
			}else{
					$_SESSION["error_login"]="los datos no coinciden cn nuestros registros";
				}?>
>>>>>>> 6b9c16fc3c1ecf23d192e67cb52263ede2df98e0
				<script type="text/javascript">
				window.location.href="<?php echo URL ?>";
				</script>
				<?php
<<<<<<< HEAD
		}

	public function registrar(){
      $datos[0]=$this->login->getsex();
      $datos[1]=$this->login->gettip();
     return $datos;

    }
	public function guardar()
		{
			if(isset($_POST))
			{
				$this->login->set("nombre",$_POST["nombre"]);	
				$this->login->set("apellido_paterno",$_POST["apellido_paterno"]);
				$this->login->set("apellido_materno",$_POST["apellido_materno"]);
				$this->login->set("edad",$_POST["edad"]);
				$this->login->set("id_sexo",$_POST["id_sexo"]);
				$this->login->set("id_usuario",$_POST["id_usuario"]);
				$this->login->set("nickname",$_POST['nickname']);
        		$this->login->set("password",$_POST['password']);
				$this->login->guardar();
				?>


        <script type="text/javascript">
		//window.location.href = "<?php echo URL ?>Login";
		swal({
    title: "Registro Exitoso",
    text: "Desea iniciar secion ahora",
    type: "success",
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
        
        //alert("entro")
		
        </script>
        <?php

				
			}	
		}

		
=======
		}*/
    if(isset($_POST))
    		{
        		$this->login->set("usuario",$_POST["usuario"]);
    			$this->login->set("contraseña",$_POST["contraseña"]);

    			$datos=$this->login->verify();

    			if(mysqli_num_rows($datos)>0)
    			{
    				$datos=mysqli_fetch_assoc($datos);
    				if ($datos['id_tipo_usuario']== 1)
    					{
    						$_SESSION["id_usuario"]=$datos["id_usuario"];
    						$_SESSION["nombre"]=$datos["nombre"]." ".$datos["ap_p"]." ".$datos["ap_m"];
    						$_SESSION["id_tipo_usuario"]=$datos["id_tipo_usuario"];
    						?>
    						<script type="text/javascript">
    							window.location="<?php echo URL.'Home'?>";
    						</script>
    						<?php
    					}
    					else if ($datos['id_tipo_usuario']== 2)
    					{
    						$_SESSION["id_usuario"]=$datos["id_usuario"];
    						$_SESSION["nombre"]=$datos["nombre"]." ".$datos["ap_p"]." ".$datos["ap_m"];
    						$_SESSION["id_tipo_usuario"]=$datos["id_tipo_usuario"];

    						?>
    						<script type="text/javascript">
    							window.location="<?php echo URL.'Home'?>";
    						</script>
    						<?php
    					}
    					else if ($datos['id_tipo_usuario']== 3)
    					{
    						$_SESSION["id_usuario"]=$datos["id_usuario"];
    						$_SESSION["nombre"]=$datos["nombre"]." ".$datos["ap_p"]." ".$datos["ap_m"];
    						$_SESSION["id_tipo_usuario"]=$datos["id_tipo_usuario"];

    						?>
    						<script type="text/javascript">
    							window.location="<?php echo URL.'Home'?>";
    						</script>
    						<?php
    					}
    			}
    			else
    				{
    					?>
    						<script type="text/javascript">
    							alert("usuario no registrado");window.location.href="<?php echo URL.'Login' ?>";
    						</script>
    					<?php
    				}

    		}

    }
    public function logout(){
			session_destroy();
      ?>
      <script type="text/javascript">
      window.location.href="<?php echo URL ?>";
      </script>
      <?php
		}
    public function registrar(){
      $datos[0]=$this->login->getSex();
      $datos[1]=$this->login->getUser();
      return $datos;

      //var_dump($datos);

    }
    public function guardar(){

      if(isset($_POST)){
        $this->login->set("nombre",$_POST['nombre']);
        $this->login->set("ap_p",$_POST['ap_p']);
        $this->login->set("ap_m",$_POST['ap_m']);
        $this->login->set("edad",$_POST['edad']);
        $this->login->set("id_sexo",$_POST['id_sexo']);
        $this->login->set("id_tipo_usuario",$_POST['id_tipo_usuario']);
        $this->login->set("nickname",$_POST['nickname']);
        $this->login->set("password",$_POST['password']);
        $this->login->guardar();

        ?>
        <script type="text/javascript">
        //window.location.href = "<?php echo URL ?>Login";
        //alert("entro")
        $(document).ready(function(){
          swal({
            title: "Usuario registrado",
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
        <?php

      }
    }
		function __destruct(){

		}
>>>>>>> 6b9c16fc3c1ecf23d192e67cb52263ede2df98e0
}
?>
