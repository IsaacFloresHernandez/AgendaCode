<?php 
    $idCategoria = $datos[0]['id_categoria'];
    $categoria = $datos[0]['categoria']; 
    $descripcion = $datos[0]['descripcion'];
    $fecha = $datos[0]['fecha'];
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Datatable</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/menu2.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/bootstrap.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('datatable/dataTables.bootstrap4.min.css') ?>">
	<script src="<?php echo base_url('js/jquery-3.5.1.min.js') ?>"></script>
	<script src="<?php echo base_url('bootstrap/popper.min.js') ?>"></script>
	<script src="<?php echo base_url('bootstrap/bootstrap.min.js') ?>"></script>
	<script src="<?php echo base_url('datatable/jquery.dataTables.min.js') ?>"></script>
	<script src="<?php echo base_url('datatable/dataTables.bootstrap4.min.js') ?>"></script>	
    <link rel="stylesheet" href="css/menu2.css">
</head>
<body >
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
					<h2>Actualizar categorias</h2>
					<hr>
					<form method="POST" action="<?php echo base_url().'/ActualizarCat' ?>">
						<input type="text" id="idCategoria" name="idCategoria" hidden="idCategoria" value="<?php echo $idCategoria ?>">
						<label for="categoria">Categoria</label>
						<input type="text" name="categoria" id="categoria" class="form-control" value="<?php echo $categoria ?>">
						<label for="descripcion">Descripción</label>
						<input type="text" name="descripcion" id="descripcion" class="form-control" value="<?php echo $descripcion ?>">
						<label for="fecha">Fecha</label>
						<input type="DATE" name="fecha" id="fecha" class="form-control" value="<?php echo $fecha ?>"><br>
						<button class="btn btn-warning">Guardar</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>