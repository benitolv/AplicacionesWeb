<?php namespace AppData\Model;
	/**
	* Clase de usuarios (modelo)
	*/
	class Usuario
	{
		private $id_usuario;
		private $apellidos;
		private $usuario;
		private $nombre;
		private $password;
		private $id_tipo;
		private $conexion;

		function __construct()
		{
			$this->conexion=new conexion();
		}
		public function set($atributo,$valor)
		{
				$this->$atributo=$valor;
		}
		public function get($atributo)
		{
				return $this->$atributo;
		}
		/*
		*Metodos para las operaciones de la base de datos insertando los datos de diferente manera y se mandan a los metodos de la clase conexion hecho para ejecutar querys con retornos o no retornos.
		*/
		public function getAll()
		{
				$sql="select * from usuarios";
				$datos=$this->conexion->queryResultados($sql);
				return $datos;
		}

		public function add()
		{
				$sql="insert into usuarios values(null,'{$this->nombre}','{$this->apellidos}','{$this->usuario}','{$this->password}',2)";
				$this->conexion->querySimple($sql);
		}

		public function delete()
		{
				$sql="delete from usuarios where id_usuario='{$this->id_usuario}'";
				$this->conexion->querySimple($sql);
		}

		public function update()
		{
				$sql="update usuarios set usuario='{$this->usuario}',nombre='{$this->nombre}',password='{$this->password}',apellidos='{$this->apellidos}' where id_usuario='{$this->id_usuario}'";
				$this->conexion->querySimple($sql);
		}

		public function getOne()
		{
				$sql="select * from usuarios where id_usuario='{$this->id_usuario}'";
				$datos=$this->conexion->queryResultados($sql);
				$row=mysqli_fetch_assoc($datos);
				return $row;
		}
	}
?>
