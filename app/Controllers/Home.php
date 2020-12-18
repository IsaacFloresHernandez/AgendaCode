<?php namespace App\Controllers;
use App\Models\CategoModel;
use App\Models\ContactosModel;
class Home extends BaseController
{
	public function index()
	{
		return view('vistas/principal');
	}

	public function categoria(){
		$Crud = new CategoModel();
		$datos = $Crud->listarCategoria();

		$mensaje = session('mensaje');

		$data = [
			"datos" => $datos,
			"mensaje" => $mensaje
		];
		return view('vistas/categorias', $data);
	}

	public function crear(){
		$datos = [
			"categoria" => $_POST['categoria'],
			"descripcion" => $_POST['descripcion'],
			"fecha" => $_POST['fecha']
		];
		$Crud = new CategoModel();
		$respuesta = $Crud->insertar($datos);

		if ($respuesta > 0){
			return redirect()->to(base_url().'/Categorias')->with('mensaje','1');
		}else{
			return redirect()->to(base_url().'/Categorias')->with('mensaje','0');
		}

	}

	public function actualizar(){
		$datos = [
			"categoria" => $_POST['categoria'],
			"descripcion" => $_POST['descripcion'],
			"fecha" => $_POST['fecha']
		];
		$idCategoria =  $_POST['idCategoria'];

		$Crud = new CategoModel();

		$respuesta = $Crud->actualizar($datos, $idCategoria);

		if ($respuesta){
			return redirect()->to(base_url().'/Categorias')->with('mensaje','2');
		}else{
			return redirect()->to(base_url().'/Categorias')->with('mensaje','3');
		}
	}
	public function obtenerCategoria($idCategoria){
		$data = ["id_categoria" => $idCategoria];
		$Crud = new CategoModel();
		$respuesta = $Crud->obtenerCategoria($data);

		$datos = ["datos"=>$respuesta];

		return view('vistas/actualizarcat', $datos);
	}

	public function eliminar($idCategoria){
		$Crud = new CategoModel();
		$data = ["id_categoria" => $idCategoria];

		$respuesta = $Crud->eliminar($data);

		if ($respuesta){
			return redirect()->to(base_url().'/Categorias')->with('mensaje','4');
		}else{
			return redirect()->to(base_url().'/Categorias')->with('mensaje','5');
		}
	}
	
	public function contactos(){
		$Crud = new ContactosModel();
		$datos = $Crud->listarContactos();

		$mensaje = session('mensaje');

		$data = [
			"datos" => $datos,
			"mensaje" => $mensaje
		];
		return view('vistas/contactos', $data);
	}
	public function crearcont(){
		$datos = [
			"nombre" => $_POST['nombre'],
			"paterno" => $_POST['paterno'],
			"materno" => $_POST['materno'], 
			"telefono" => $_POST['telefono'],
			"email" => $_POST['email'],
			"id_categoria" => $_POST['id_categoria'],
			"fecha" => $_POST['fecha']
		];
		$Crud = new ContactosModel();
		$respuesta = $Crud->insertarContacto($datos);

		if ($respuesta > 0){
			return redirect()->to(base_url().'/Contactos')->with('mensaje','1');
		}else{
			return redirect()->to(base_url().'/Contactos')->with('mensaje','0');
		}

	}

	public function actualizarcont(){
		$datos = [
			"nombre" => $_POST['nombre'],
			"paterno" => $_POST['paterno'],
			"materno" => $_POST['materno'],
			"telefono" => $_POST['telefono'],
			"email" => $_POST['email'],
			"id_categoria" => $_POST['id_categoria'],
			"fecha" => $_POST['fecha']
		];
		$idContacto =  $_POST['idContacto'];

		$Crud = new ContactosModel();

		$respuesta = $Crud->actualizarContacto($datos, $idContacto);

		if ($respuesta){
			return redirect()->to(base_url().'/Contactos')->with('mensaje','2');
		}else{
			return redirect()->to(base_url().'/Contactos')->with('mensaje','3');
		}
	}

	public function obtenerContacto($idContacto){
		$data = ["id_contacto" => $idContacto];
		$Crud = new ContactosModel();
		$respuesta = $Crud->obtenerContactos($data);

		$datos = ["datos"=>$respuesta];

		return view('vistas/actualizarcont', $datos);
	}

	public function eliminarContacto($idContacto){
		$Crud = new ContactosModel();
		$data = ["id_contacto" => $idContacto];

		$respuesta = $Crud->eliminarContacto($data);

		if ($respuesta){
			return redirect()->to(base_url().'/Contactos')->with('mensaje','4');
		}else{
			return redirect()->to(base_url().'/Contactos')->with('mensaje','5');
		}
	}

}