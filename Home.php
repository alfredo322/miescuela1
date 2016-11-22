<?php
class Home extends CI_Controller
{
	public function index()
	{	
		$data = array('titulo' =>'Mi programa' ,'cuerpo'=>'Bienvenido a mi pagina web');
		$this->load->view('home_view',$data);
	}

	public function link()
	{
		echo "Hola Mundo";
	}
	public function mostrarInformacion()
	{
		$result=$this->db->get('maestra1K');
		$data=array('consulta'=>$result);
		$this->load->view('home_view',$data);
	}
	public function vReg()
	{	
		$this->load->model('consulta_model');
		$data['registros']=$this->consulta_model->verReg();
		$this->load->view('consulta_view',$data);
	}
	public function insertar()
	{
		$this->load->view('progra/formulario');
	}
	public function recibir()
	{
		$this->load->model('consulta_model');
		$this->consulta_model->guardar();
		$this->vReg();
	}

	public function editar_c()
	{
		$this->load->model('consulta_model');
		$data['registro']=$this->consulta_model->editar_m();
		$this->load->view('editar_view',$data);
	}
	public function actualizar_c()
	{
		$this->load->model('consulta_model');
		$this->consulta_model->actualizar_m();
		$this->vReg();
	}
	public function borrar_c()
	{
		$this->load->model('consulta_model');
		$this->consulta_model->borrar_m();
		$this->vReg();
	}
	public function informacion_c()
	{
		$this->load->model('consulta_model');
		$data['registros']=$this->consulta_model->informacion_m();
		$this->load->view('informacion_view',$data);
	}

}	

?>