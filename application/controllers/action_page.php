<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Action_page extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('buscar_mod');
		
	}
	public function login(){
		$this->load->view('layout');
		$this->load->view('login');
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
				
			$video=array(
				'arrFan'=> $this->buscar_mod->get_fan(),
				'idContenido'=>$data['idContenido'],
				'linkVideo'=> $this->buscar_mod->get_link($data),
				'arrValoracion'=>$this->buscar_mod->get_valoracion($data)
				);
			$this->load->view('layout');
			$this->load->view('video',$video);
		}
	public function voto(){
		
		
		
		$datos= array( 
		'idContenido'=> $this->input->post('idContenido'),
		'idFan'=>$this->input->post('selFan'),
		'valoracion' => $this->input->post('selVoto')
		);

		$this->buscar_mod->votar($datos);
		$this->load->view('layout');
		$this->load->view('exito');

		}
	
}