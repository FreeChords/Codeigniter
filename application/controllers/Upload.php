<?php  if( ! defined('BASEPATH'))  exit('No direct script access allowed');

class Upload extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('form');

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
	
}

?>
	