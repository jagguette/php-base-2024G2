<?php 
    include "../controllers/Gastos-JosueR.php";

    class GastosCreteServices{    

        function saveGastos($datos){
            include "../config/config.php";
            
            if(isset($datos["ced"])){//verificar la existencia de envio de datos
                $objDB = new gastosCreateController();

                $data = array(
                    "fch"=> $datos["fch"],
                    "con"=> $datos["con"],
                    "idco"=> $datos["idco"],
                    "idcd"=> $datos["idcd"],
                    "idc"=> $datos["idc"],
                    "val"=> $datos["val"]
                );

                $ejecucion = $objDB->saveGastosController($data);
                if($ejecucion){ // Todo se ejecuto correctamente
                    echo json_encode(array("data"=>null, "error"=>"0", "msg"=>$errorResponse[0] ));                    
                }else{ // Algo paso mal
                    echo json_encode(array("data"=>null, "error"=>"10", "msg"=>$errorResponse[10] ));
                }
            }else{
                echo json_encode(array("data"=>null, "error"=>"5", "msg"=>$errorResponse[5] ));
            }
        }

    }

?>