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
		$this->load->view('layout');
		$this->load->view('formulario');
	}
	public function datainput(){
		$this->load->view('layout');
		$this->load->view('formulario');
		$data= array(
		'nombre' => $this->input->post('nombre'),
		'video'  => $this->input->post('video') 
		);
		$this->Upload_model->crearVideo($data);

	}
}

?>
	