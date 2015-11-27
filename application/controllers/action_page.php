<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Action_page extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('buscar_mod');
	}

	public function buscando(){

	 $data=array('nombre'=>$this->input->post('nombre'));
	 $this->buscar_mod->buscar($data);
	 $this->load->view('busqueda',$data);

	}}
	
