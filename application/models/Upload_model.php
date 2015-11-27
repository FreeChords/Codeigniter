<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Upload_model extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	function crearVideo($data){
		$this->db->insert('videos',array('titulovideo'=>$data['nombre'],'linkVideo'=>$data['video']) );
	}
}


?>