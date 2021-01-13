<?php

     #echo "metodo HTTP: ".$_SERVER['REQUEST_METHOD'] ;
     switch($_SERVER['REQUEST_METHOD']){
        case 'POST':
            $_POST = json_decode(file_get_contents('php://input'),true);
            echo "Guardar Usuario" . $_POST['nombre'];
        break;
        case 'GET':
            echo "parametro GET: ".$_GET['id'];
            //echo "obtener Usuario/os";
        break;
        case 'PUT':
            $_PUT = json_decode(file_get_contents('php://input'),true);
            echo "Actualizar";
        break;
        case 'DELETE':
            echo "Eliminar";
            break;
    }

 ?>     