<?php
    /**echo "Metodo HTTP: ".$_SERVER['REQUEST_METHOD'];*/
    
    switch($_SERVER['REQUEST_METHOD']){
        case 'POST':
            $_POST = json_decode(file_get_contents('php://input'),true);
            echo "Guardar Usuario, informacion" . json_encode($_POST);
        break;
        case 'GET':
             if (isset($_GET['id']))
                 echo "retornar el usuario con el CI/NIT: " . $_GET['id'];
             else 
                 echo "retornar todos los usuarios";
        break;
        case 'PUT':
            $_PUT = json_decode(file_get_contents('php://input'),true);
            echo "Actualizar el usuario con el CI/NIT : " .$_GET['id'];
            echo ", info a aactualizar: " .json_encode($_PUT);
        break;
        case 'DELETE':
            echo "Eliminar usuario con CI/NIT:" .$_GET('id');
            break;
    }

 ?>     