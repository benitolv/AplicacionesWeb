<?php namespace AppData\Controller;
	use AppData\Model\Usuario;
	class usuarioController
	{
		private $usuario;
		function __construct()
		{
			$this->usuario=new Usuario();
		}
		function Index()
		{
			return($this->usuario->getAll());
		}
		function ver($id)
		{
			$this->usuario->set("id_usuario",$id);
			$datos=$this->usuario->getOne();
			return $datos;
		}
		function crear()
		{
				if (!empty($_POST))
				{
					$id_usuario=$_POST["id_usuario"];
					$nombre=$_POST["nombre"];
					$apellidos=$_POST["apellidos"];
					$usuario=$_POST["usuario"];
					$password=$_POST["password"];

					$this->usuario->set("id_usuario",$id_usuario);
					$this->usuario->set("nombre",$nombre);
					$this->usuario->set("apellidos",$apellidos);
					$this->usuario->set("usuario",$usuario);
					$this->usuario->set("password",$password);
					$this->usuario->add();
					?>
						<script type="text/javascript">
							window.location="<?php echo URL.'usuario'?>";
						</script>
					<?php
				}
		}
		function editar($id)
		{
			if (!empty($_POST))
			{
				$id_usuario=$_POST["id_usuario"];
				$nombre=$_POST["nombre"];
				$apellidos=$_POST["apellidos"];
				$usuario=$_POST["usuario"];
				$password=$_POST["password"];

				$this->usuario->set("id_usuario",$id_usuario);
				$this->usuario->set("nombre",$nombre);
				$this->usuario->set("apellidos",$apellidos);
				$this->usuario->set("usuario",$usuario);
				$this->usuario->set("password",$password);
				$this->usuario->update();

				echo '<script type="text/javascript">
				var id=$("#agregar").data("id");
				var data_url="'.URL.'usuario/ver/"+id;
				window.location=data_url;
				</script>';
			}
			else
			{
				$this->usuario->set("id_usuario",$id);
				$datos=$this->usuario->getOne();
				return $datos;
			}
		}
		function eliminar($id)
		{
			$this->usuario->set("id_usuario",$id);
			$datos=$this->usuario->delete();
		}
		function __destruct()
		{

		}
	}
?>
