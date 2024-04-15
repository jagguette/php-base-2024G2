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
* IMPLEMENTACION DE ACCESO A CONSULTAS PARA PROTEGER MAS LA VISTA   Josue Rodriguez Lopez
*/
class clientesCreateController extends DBOperations
{
	
	function saveGastos($data){
		//$hash = password_hash($contra, PASSWORD_DEFAULT);
        $ejecucion = $this->dbOperaciones("
				INSERT INTO gastos(
				 fecha, 
				 concepto,
				 id_cuentaorigen,
				 id_clientedestino,
				 id_categoria, 
				 valor) 
                values(".$data["fecha"].", '".$data["concepto"]."', '".$data["dir"]."', ".$data["tel"].", ".$data["wat"]." ) ");
		return $ejecucion;												   		
	}
	
}//fin CLASE



?>
