<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buscar_mod extends CI_Model {
	function __construct(){
		parent::__construct();
		$this->load->database('freechords');}
	
	 

	function  get_contenido($data){

		$sql= "SELECT idContenido,tituloVideo FROM contenido where Banda_idBanda = ?";
		$query = $this->db->query($sql,array($data['idBanda']));

  		  // si hay resultados
  		 if ($query->num_rows() > 0) {
  	      // almacenamos en una matriz bidimensional
		        foreach($query->result() as $row)
  			         $arrDatos[htmlspecialchars($row->idContenido, ENT_QUOTES)]=htmlspecialchars($row->tituloVideo, ENT_QUOTES);

         $query->free_result();
      	  return $arrDatos;
	}
}

	function get_banda(){

    // armamos la consulta
    $query = $this->db-> query('SELECT idBanda,nombreBanda FROM banda ');

    // si hay resultados
   		 if ($query->num_rows() > 0) {
    	    // almacenamos en una matriz bidimensional
    		    foreach($query->result() as $row)
   		        $arrDatos[htmlspecialchars($row->idBanda, ENT_QUOTES)] = htmlspecialchars($row->nombreBanda, ENT_QUOTES);
		$query->free_result();
      return $arrDatos;
     }
}
  function get_link($data){
    $sql= "SELECT linkVideo FROM contenido where idContenido = ?";
    $query = $this->db->query($sql,array($data['idContenido']));
    return $query->result();

  }
}