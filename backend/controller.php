<?php
    header('content-Type:application/json');

    require_once ("conectar.php");
    require_once ("models.php");

    $alquilar = new Alquiler();
    $body= json_decode(file_get_contents("php://input"),true);
    
    switch($_GET["op"]){

        case "GetAll":
            $datos=$alquilar->get_clientes();
            echo json_encode($datos);
        break;
        
        case "insert":
            $data = $alquilar->insert_clientes($body['ClienteID'],$body['Compania'],$body['Contacto'],$body['Direccion']);
            echo json_encode("los datos fueron guardados correctamente");
        break;
    }
?>