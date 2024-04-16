<?php

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
class gastosCreateController extends DBOperations
{
	
	function saveGastosController($data){
		//$hash = password_hash($contra, PASSWORD_DEFAULT);
        $ejecucion = true;
		/*$this->dbOperaciones("
				INSERT INTO gastos(
				 fecha, 
				 concepto,
				 id_cuentaorigen,
				 id_clientedestino,
				 id_categoria, 
				 valor) 
                values(
					'".$data["fch"]."',
					'".$data["con"]."',
					".$data["idco"].",
					".$data["idcd"].",
					".$data["idc"].",
					".$data["val"]." ) "
				);*/
		return $ejecucion;												   		
	}
	
}//fin CLASE



?>
