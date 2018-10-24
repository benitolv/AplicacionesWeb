<<<<<<< HEAD

<br><br><br><div class="container" style="border: solid .5px #216db0; height: 55%;
  left: 50%;
  top: -5%;
  width: 50%;  border-radius: 10px;">
    <div class="row justify-content-center"><br>
        <div class="col-sm-8">
            <h4 class="row justify-content-center">Registrate en TESVB </h4><span class="glyphicon glyphicon-pencil"></span>
          <form action="<?php 	echo URL ?>login/guardar" method="post" id="form-reg">
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			                		<input type="text" name="nombre"  class="form-control input-sm" placeholder="Nombre">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" name="apellido_paterno"  class="form-control input-sm" placeholder="Apellido Paterno">
			    					</div>
			    				</div>
			    			</div>
			    			<div class="row">
			    			<div class="col-xs-6 col-sm-6 col-md-6">
			    				<input type="text" name="apellido_materno"  class="form-control input-sm" placeholder="Apellido Materno">
			    			</div><div class="col-xs-6 col-sm-6 col-md-6">
			               			 <input type="number" name="edad"  class="form-control input-sm" placeholder="Edad">
			    					</div>
			    			</div><br>
			    			<div class="row">
			    				
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<select class="form-control" placeholder="sexo" name="id_sexo">
			    							<option value="">Selecciona Sexo...</option>
											<?php 
					if (isset($datos)) 
					{
						while($fila = mysqli_fetch_assoc($datos[0])) { ?>
						<option value="<?php echo $fila['id_sexo'] ?> "> <?php echo $fila['descripcion']?> </option>	
						<?php } 
					} 
					?> 
			    					
										</select>
			    					</div>
			    				</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<select class="form-control" placeholder="Tipo" name="id_usuario">
			    							<option value="">Selecciona Tipo de Usuario...</option>
											 <?php 
								if (isset($datos)) 
								{
									while($fila = mysqli_fetch_assoc($datos[1])) { ?>
									<option value="<?php echo $fila['id_tipo_usuario'] ?> "> <?php echo $fila['tipo']?> </option>	
									<?php } 
								} 
								?> 
										</select>
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			               			 <input type="text" name="nickname"  class="form-control input-sm" placeholder="Nickname">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
=======
<form id="form-reg" class="" action="<?php echo URL ?>login/guardar" method="post">
<div class="container">
        <div class="row center-form justify-content-center">
        <div class=" center-form col-sm-8 " >
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    	<center>	<h3 class="panel-title">Bienvenido Por Favor Registrese</h3> </center>
			 			</div>
			 			<div class="panel-body">
			    		<form class="form-signin" role="form">
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-4">
			    					<div class="form-group">
                      <p> <h6>Nombre</h6></p>
			                <input type="text" name="nombre" id="nombre" class="form-control input-sm" placeholder="Nombre">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-4">
			    					<div class="form-group">
                      <p> <h6>Apellido paterno</h6></p>
			    						<input type="text" name="ap_p" id="ap_p" class="form-control input-sm" placeholder="Apellido paterno">
			    					</div>
			    				</div>
                  <div class="col-xs-6 col-sm-6 col-md-4">
                    <div class="form-group">
                      <p> <h6>Apellido materno</h6></p>
                      <input type="text" name="ap_m" id="ap_m" class="form-control input-sm" placeholder="Apellido matarno">
                    </div>
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-4">
                    <div class="form-group">
                      <p> <h6>Edad</h6></p>
                      <input type="int" name="edad" id="edad" class="form-control input-sm" placeholder="Edad">
                    </div>
                  </div>


  <div class="col-xs-6 col-sm-6 col-md-4">
			    			<div class="form-group">
                  <p> <h6>Sexo</h6></p>

                  <select class="form-control" name="id_sexo">
                    <option value="">Selecciona</option>
                      <?php
                      if (isset($datos)){
                        while ($fila = mysqli_fetch_assoc($datos[0])) { ?>
                          <option value="<?php echo $fila['id_sexo']?>"> <?php echo $fila["descripcion"] ?> </option>
                      <?php  }
                      } ?>

                  </select>

			    			</div>
  </div>
  <div class="col-xs-6 col-sm-6 col-md-4">
                <div class="form-group">
                  <p> <h6>Usuario</h6></p>

                  <select class="form-control" name="id_tipo_usuario">
                    <option value="">Selecciona</option>
                      <?php
                      if (isset($datos)){
                        while ($fila = mysqli_fetch_assoc($datos[1])) { ?>
                          <option value="<?php echo $fila['id_tipo_usuario']?>"> <?php echo $fila["descripcion"] ?> </option>
                      <?php  }
                    } ?>
                    </select>
                </div>
              </div>



			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
                      <p><h6>Nombre de usuario</h6></p>
			    						<input type="nickname" name="nickname" id="nickname" class="form-control input-sm" placeholder="Nickname">
			    					</div>
			    				</div>

			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
                      <p> <h6>Contraseña</h6></p>
>>>>>>> 6b9c16fc3c1ecf23d192e67cb52263ede2df98e0
			    						<input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password">
			    					</div>
			    				</div>

<<<<<<< HEAD
			    			</div>
			    			<input id="registar" type="submit" value="Registrar" class="btn btn-outline-success" style="position: relative; left: 30%; padding: 15px;">

			    		</form>
        </div>

    </div>

</div>
<script type="text/javascript">
=======
                <div class="center-form col-xs-4 col-sm-4 col-md-4">

			    			    <center> <input type="submit" value="Registrar" class="btn btn-info btn-block" id="registar"> </center>

                </div>

			    		</form>
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>

    </form>

    <script type="text/javascript">
>>>>>>> 6b9c16fc3c1ecf23d192e67cb52263ede2df98e0

    $("#registar").click(function()
      {
        $("#form-reg").submit();
      });

      //validaciones del formulario
    	jQuery.validator.addMethod("texto", function(value)
    	{
    		return /^[a-záéóóúàèìíòùäëïöüñ.\s]+$/i.test(value);
    	});

      $("#form-reg").validate({
        errorClass:"invalid",
		rules:
		{
			nombre:
			{
				required:true,
				texto:true,
			},
<<<<<<< HEAD
			apellido_paterno:
=======
			ap_p:
>>>>>>> 6b9c16fc3c1ecf23d192e67cb52263ede2df98e0
			{
				required:true,
				texto:true,
			},
<<<<<<< HEAD
			apellido_materno:
=======
			ap_m:
>>>>>>> 6b9c16fc3c1ecf23d192e67cb52263ede2df98e0
			{
				required:true,
				texto:true,
			},
			edad:
			{
				required:true,
<<<<<<< HEAD
				number:true,
=======
				texto:true,
>>>>>>> 6b9c16fc3c1ecf23d192e67cb52263ede2df98e0
			},
			id_sexo:
			{
				required:true,
        int:true,
			},
<<<<<<< HEAD
			id_usuario:
=======
			id_tipo_usuario:
>>>>>>> 6b9c16fc3c1ecf23d192e67cb52263ede2df98e0
			{
				required:true,

			},
      nickname:
			{
				required:true,

			},
      password:
			{
				required:true,

			},
		},
		messages:
		{
			nombre:
			{
				required:"Nombre obligatorio",
				texto:"Solo puede introducir texto"
			},
<<<<<<< HEAD
			apellido_paterno:
=======
			ap_p:
>>>>>>> 6b9c16fc3c1ecf23d192e67cb52263ede2df98e0
			{
				required:"Apellido paterno obligatorio",
				texto:"Solo puede introducir texto"
			},
<<<<<<< HEAD
			apellido_materno:
=======
			ap_m:
>>>>>>> 6b9c16fc3c1ecf23d192e67cb52263ede2df98e0
			{
				required:"Apellido materno obligatorio",
				texto:"Solo puede introducir texto"
			},
			edad:
			{
				required:"Edad obligatoria",

			},
			id_sexo:
			{
				required:"Sexo obligatorio",
			},
<<<<<<< HEAD
			id_usuario:
=======
			id_tipo_usuario:
>>>>>>> 6b9c16fc3c1ecf23d192e67cb52263ede2df98e0
			{
				required:"Tipo de usuario obligatoria",

			},
      nickname:
      {
        required:"Nombre de usuario obligatoria",

      },
      password:
      {
        required:"Contraseña obligatoria",

      },
		},
  });

<<<<<<< HEAD
    </script>
=======





</script>
>>>>>>> 6b9c16fc3c1ecf23d192e67cb52263ede2df98e0
