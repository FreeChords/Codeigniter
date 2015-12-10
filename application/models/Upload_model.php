<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//query de bandas para hacer un combo desplegable, despues insertar la banda seleccionada en el uinsertfq|
class Upload_model extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	function get_banda(){

    // armamos la consulta
    $query = $this->db-> query('SELECT idBanda,nombreBanda FROM banda');

    // si hay resultados
    if ($query->num_rows() > 0) {
        // almacenamos en una matriz bidimensional
        foreach($query->result() as $row)
           $arrDatos[htmlspecialchars($row->idBanda, ENT_QUOTES)] = htmlspecialchars($row->nombreBanda, ENT_QUOTES);

        $query->free_result();
        return $arrDatos;
     }
}
	function crearVideo($data){
		$this->db->insert('contenido',array('Banda_idBanda'=>$data['idBanda'], 'titulovideo'=>$data['nombre'],'linkVideo'=>$data['video']) );
	    //$this->load->view('exito');
	}
}


?>





