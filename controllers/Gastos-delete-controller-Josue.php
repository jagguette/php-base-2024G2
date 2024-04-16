<?php
session_start();
require_once( "../models/models_admin.php");

class DBOperations extends DBConfig {

	function dbOperaciones($sql){
		$this->config();
		$this->conexion(); 
		  
  		$records = $this->Operaciones($sql);		 		  		  		  

  		$this->close();		
		return $records;				
	}
}

/**
* IMPLEMENTACION DE ACCESO A CONSULTAS PARA PROTEGER MAS LA VISTA
*/
class gastosDeleteController extends DBOperations
{
	function deleteClientes($data){
        $ejecucion = $this->dbOperaciones("DELETE FROM gastos WHERE cod= ".$data["cod"]);
		return $ejecucion;												   		
	}
	
}//fin CLASE



?>
