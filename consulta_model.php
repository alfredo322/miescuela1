<?php

class Consulta_model extends CI_Model
{
	
	public function verReg()
	{
		$sql=$this->db->query('select * from maestra1k');
		if($sql->num_rows()>0){
			foreach ($sql->result() as $fila) :
				$data[]=$fila;
			endforeach;
		}
		return $data;
	}
	public function guardar()
	{
		$data=array(
			'Nombres'=>$_POST ['Nombres'],
			'Apellidos'=>$_POST ['Apellidos'],
			'Edad'=>$_POST ['Edad'],
			'Fecha_nacimiento'=>$_POST ['Fecha'],
			'Numero_celulares'=>$_POST['Numero_celulares']
			);

		$this->db->insert('maestra1k',$data);
	}
	public function editar_m()
	{
		$sql='select*from maestra1k where Id_estudiante=?';
		$sql=$this->db->query($sql,$_GET["ID_ESTUDIANTE"]);
		return $sql->result();
	}
	public function actualizar_m()
	{
		$data=array(
			'Nombres'=>$_POST ['Nombres'],
			'Apellidos'=>$_POST ['Apellidos'],
			'Edad'=>$_POST ['Edad'],
			'Fecha_nacimiento'=>$_POST ['Fecha_nacimiento'],
			'Numero_celulares'=>$_POST ['Numero_celulares']
			);
		$this->db->where('Id_estudiante',$_POST['Id_estudiante']);
		$this->db->update('maestra1k',$data);
	}
	public function borrar_m()
	{
		$Id_estudiante=$_GET['ID_ESTUDIANTE'];
		$this->db->delete('maestra1k',array('Id_estudiante'=>$Id_estudiante));

	}
	public function informacion_m()
	{	
		//$sql=$this->db->query('select Nombres,Apellidos from maestra1k');
		$Id_estudiante=$_GET['ID_ESTUDIANTE'];
		$sql='select*from maestra1k where Id_estudiante=?';
		$sql=$this->db->query($sql,$Id_estudiante);
		if($sql->num_rows()>0){
			foreach ($sql->result() as $fila) :
				$data[]=$fila;
			endforeach;
		}
		return $data;
	}
}
?>