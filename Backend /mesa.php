<?php
//conectando a la base de datos de php 
   $host="185.201.11.212";
   $contraseña="B!uwj$]M";
   $bd="u868164586_wallas";
   $usuario="u868164586_wallas";

   $cnx = new mysqli($host, $bd, $contraseña,$usuario);
   $errorCnx = false;
   if($cnx->connect_error){
       echo "error";
       $errorCnx = true;
   }else {
       echo "conexion correcta :) Maria Felix";
   }
   if($errorCnx == false){
       //crear la tabla usuario
       $tmp="create table mesaDBMariaFelix(
        id int(10) AUTO_INCREMENT,
       ubicacion varchar(25),
        tamaño varchar(40),
        PRIMARY KEY (id)
        
        )";
        if($cnx->query($tmp)){
            echo "<br> se creo la tabla ";
            //crear usuario admin 
           
        }else {
            echo "<br>no se creo la tabla";
        }
   }