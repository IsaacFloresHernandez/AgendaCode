<?php 
$idContacto = $datos[0]['id_contacto'];
$nombre = $datos[0]['nombre'];
$paterno = $datos[0]['paterno']; 
$materno = $datos[0]['materno']; 
$telefono = $datos[0]['telefono']; 
$email = $datos[0]['email'];
$id_categoria = $datos[0]['id_categoria'];
$fecha = $datos[0]['fecha'];
?>
<?php
$mysqli = new mysqli('localhost', 'root', '', 'agenda');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Datatable</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/menu2.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/bootstrap.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('datatable/dataTables.bootstrap4.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('fontawesome/css/all.css') ?>">
	<script src="<?php echo base_url('js/jquery-3.5.1.min.js') ?>"></script>
	<script src="<?php echo base_url('bootstrap/popper.min.js') ?>"></script>
	<script src="<?php echo base_url('bootstrap/bootstrap.min.js') ?>"></script>
	<script src="<?php echo base_url('datatable/jquery.dataTables.min.js') ?>"></script>
	<script src="<?php echo base_url('datatable/dataTables.bootstrap4.min.js') ?>"></script>	
</head>
<body>
	
<div class="container">
        <nav class="menu">
            <ul class="main-menu">
                <li class="active"><i class="fa fa-home"><a href="<?php echo base_url(); ?>/"></i>Home</li> </a>
                <li class="with-submenu">
                   <a href="<?php echo base_url(); ?>/Contactos"><i class="fa fa-briefcase" ></i>Contactos <i class="fa fa-caret-down"></i></a>
                    
                <a href="<?php echo base_url(); ?>/Categorias"><li><i class="fa fa-user"></i>Categorias</li></a>
                
            </ul>
        </nav>
		<hr>
		<div class="row">
			<div >
				<div class="card-header">
					Tabla Categorias
				</div>
				<div class="card-body">
					<button class="bt btn-danger">
						<i class="fas fa-id-card-alt fa-6x"></i>
					</button>
					<h2>Actualizar categorias</h2>
					<hr>
					<form method="POST" action="<?php echo base_url().'/ActualizarCont' ?>">
						<input type="text" id="idContacto" name="idContacto" hidden="idContacto" value="<?php echo $idContacto ?>">
						<label> Nombre </label>
						<input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $nombre ?>">
						<label> Apellido Paterno </label>
						<input type="text" name="paterno" id="paterno" class="form-control" value="<?php echo $paterno ?>">
						<label> Apellido Materno </label>
						<input type="text" name="materno" id="materno" class="form-control" value="<?php echo $materno ?>">
						<label> Telefono </label>
						<input type="text" name="telefono" id="telefono" class="form-control" value="<?php echo $telefono ?>">
						<label> E-mail </label>
						<input type="text" name="email" id="email" class="form-control" value="<?php echo $email ?>">
						<label> Fecha </label>
						<input type="DATE" name="fecha" id="fecha" class="form-control" value="<?php echo $fecha ?>">
						<label>Categoria</label>
						<select name="id_categoria" id="id_categoria" class="form-control">
							<?php
							$query = $mysqli -> query ("SELECT id_categoria, Categoria FROM t_categorias");
							while ($valores = mysqli_fetch_array($query)) {?>
								<option value="<?php echo $valores[0]?>"><?php echo $valores[1]?></option>
							<?php }?>
						</select>
						<button class="btn btn-warning">Guardar</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>