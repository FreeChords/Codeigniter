<?php  if( ! defined('BASEPATH'))  exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('form');

	}
	
	public function verify()
	{
		$data=array(
			'nombre'=>$this->input->post('nombre'),
			//'clave'=>$this->input->post('clave')
			);
		
		$this->load->view('layout');
		$this->load->view('welcome_message',$data);
		
		
	}
}
?>
