<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buscar_mod extends CI_Model {
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	public function buscar($data)
	 
	{
		$this->db->like('titulovideo',$data['nombre']);
		$query =$this->db->get('videos');
		return $query->result();
	}
	
}