<?php  if( ! defined('BASEPATH'))  exit('No direct script access allowed');

class Valorar extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('Upload_model');

	}
	
	public function index()
	{
		$this->load->view('layout');
		$this->load->view('valorar.php');
		
		
	}
}