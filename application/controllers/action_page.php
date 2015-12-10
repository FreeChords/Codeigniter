<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Action_page extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('buscar_mod');
	}

	 public function index(){
	 	$this->load->view('layout');
$datos['arrBanda'] = $this->buscar_mod->get_banda();
    
// cargamos  la interfaz y le enviamos los datos
$this->load->view('busqueda', $datos);
	 	
	 }

	public function buscarBanda(){
			$data=array(
				'idBanda'=>$this->input->post('idBanda')
			);
			$datos['arrContenido'] = $this->buscar_mod->get_contenido($data);
			$this->load->view('layout');
    		$this->load->view('mostrarcontenido', $datos);
    		//$this->buscar_mod->link($datos);
			//$this->buscar_mod->get_contenido($data);
			//$this->buscarcontenido();
			

	}

	public function buscarContenido(){
			$data=array(
				'idContenido'=>$this->input->post('idContenido')
			);
			$video['linkVideo']= $this->buscar_mod->get_link($data);
			$this->load->view('layout');
			$this->load->view('video',$video);

}
	
}