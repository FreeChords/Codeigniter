<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buscar_mod extends CI_Model {
	function __construct(){
		parent::__construct();
		$this->load->database('freechords');}
	
	 
  function get_valoracion($data){
     $sql= "SELECT Fan_idFan,valoracion FROM contenido_has_fan where Contenido_idContenido = ?";
         $query = $this->db->query($sql,array($data['idContenido']));

           // si hay resultados
          if ($query->num_rows() > 0) {
           // almacenamos en una matriz bidimensional
                 foreach($query->result() as $row)
                      $arrDatos[htmlspecialchars($row->Fan_idFan, ENT_QUOTES)]=htmlspecialchars($row->valoracion, ENT_QUOTES);
return $query->result();
         // $query->free_result();
           //return $arrDatos;
         }
  }

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
    $query = $this->db->query($sql,array($data));
    return $query->result();
}

 function get_fan(){
  // armamos la consulta
    $query = $this->db-> query('SELECT idFan,nombre FROM fan ');

    // si hay resultados
       if ($query->num_rows() > 0) {
          // almacenamos en una matriz bidimensional
            foreach($query->result() as $row)
              $arrDatos[htmlspecialchars($row->idFan, ENT_QUOTES)] = htmlspecialchars($row->nombre, ENT_QUOTES);
    $query->free_result();
      return $arrDatos;
     }


 }
  function votar($data){
   $this->db->insert('contenido_has_fan',array('Contenido_idContenido'=>$data['idContenido'], 'Fan_idFan'=>$data['idFan'],'valoracion'=>$data['valoracion']) );
  }
}