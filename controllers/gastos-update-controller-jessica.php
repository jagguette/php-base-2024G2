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
class gastosUpdateController extends DBOperations
{
	
	function updategastos($data){
		//$hash = password_hash($contra, PASSWORD_DEFAULT);
        $ejecucion = $this->dbOperaciones("
				UPDATE gastos 
                SET fecha=".$data["fch"].", 
                    concepto='".$data["con"]."', 
                    id_cuentaorigen=".$data["idco"].", 
                    id_clientedestino=".$data["idcd"].", 
                    id_categoria=".$data["idc"]."
					valor=".$data["val"]."
                WHERE cod=".$data["cod"]."
                ");
		return $ejecucion;												   		
	}
	
}//fin CLASE



?>
