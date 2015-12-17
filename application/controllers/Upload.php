<?php  if( ! defined('BASEPATH'))  exit('No direct script access allowed');

class Upload extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('Upload_model');

	}
	
	public function index()
	{
		$this->load->view('layout');
		$this->load->view('formulario');
		
		
	}
	public function form()
	{	
	 //obtenemos el array de profesiones y lo preparamos para enviar
		$datos['arrBanda'] = $this->Upload_model->get_banda();
    
	 //cargamos  la interfaz y le enviamos los datos
		
		$this->load->view('layout');
		$this->load->view('formulario', $datos);
	}
	public function datainput(){

	
		$data= array(
		'idBanda' => $this->input->post('idBanda'),
		'nombre' => $this->input->post('nombre'),
		'video'  => $this->input->post('video') 
		);

		$this->Upload_model->crearVideo($data);
		$this->load->view('layout');
		$this->load->view('exito');
		
	}
}

?>
