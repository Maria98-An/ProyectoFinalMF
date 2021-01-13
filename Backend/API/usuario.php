<?php

     #echo "metodo HTTP: ".$_SERVER['REQUEST_METHOD'] ;
     switch($_SERVER['REQUEST_METHOD']){
        case 'POST':
            echo "Guardar";
        break;
        case 'GET':
            echo "obtener Usuario/os";
        break;
        case 'PUT':
            echo "Actualizar";
        break;
        case 'DELETE':
            echo "Eliminar";
            break;
    }

 ?>     