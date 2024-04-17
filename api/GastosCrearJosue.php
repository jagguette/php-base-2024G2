<?php
    include "../app/Gastos-create-services-Josue.php";
    include "../config/config.php";
    
    $objAPI = new gastosCreateServices();

    $method = $_SERVER['REQUEST_METHOD'];
    header("Content-Type: Application/json");
    if ($method == 'POST') {
        $_POST = json_decode(file_get_contents("php://input") , true);
        echo json_encode(array("data"=>null, "error"=>"0", "msg"=>$errorResponse[0] ));
        $objAPI->saveGastos($_POST);
    }else{
        echo json_encode(array("data"=>null, "error"=>"3", "msg"=>$errorResponse[3] ));
    }
  
?>