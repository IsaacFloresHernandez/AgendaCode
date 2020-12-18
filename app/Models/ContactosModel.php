<?php namespace App\Models;

	use CodeIgniter\Model;

 	class ContactosModel extends Model{
 		public function listarContactos(){
 			$Contactos = $this->db->query('SELECT t_agenda.id_contacto, t_agenda.nombre, t_agenda.paterno, t_agenda.materno, t_agenda.telefono, t_agenda.email, t_agenda.id_categoria, t_agenda.fecha, t_categorias.categoria FROM t_agenda, t_categorias where t_categorias.id_categoria=t_agenda.id_categoria');
 			return $Contactos->getResult();
 		}
 		public function insertarContacto($datos){
 			$Contactos = $this->db->table('t_agenda');
 			$Contactos->insert($datos);

 			return $this->db->insertID();
 		}

 		public function obtenerContactos($data){
 			$Contactos = $this->db->table('t_agenda');
 			$Contactos->where($data);
 			return $Contactos->get()->getResultArray();
 		}

 		public function actualizarContacto($data, $idContacto){
 			$Contactos = $this->db->table('t_agenda');
 			$Contactos->set($data);
 			$Contactos->where('id_contacto',$idContacto);
 			return $Contactos->update();
 		}

 		public function eliminarContacto($data){
 			$Contactos = $this->db->table('t_agenda');
 			$Contactos->where($data);
 			return $Contactos->delete();
 		}
 	}