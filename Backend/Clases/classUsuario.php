<?php

    class usuario{
        private $nombre;
        private $CI_NIT;
        private $telefono;
        private $direccion;

        public function _constructor($nombre, $CI_NIT,$direccion, $telefono){
            $this->nombre = $nombre;
            $this->CI_NIT = $CI_NIT;
            $this->telefono = $telefono;
            $this->direccion = $direccion;
        }
        public function getNombre(){
            return $this->nombre;
        }

        public function setNombre($nombre){
            $this->nombre;
            return $this;

        }
        public function _toString(){
            return $this->nombre ."";
        }

        public function obdtUsuario(){

        }
        public function guardUsuario(){

        }
        public function eliminarUsuario(){

        }
        public function actualizarUsuario(){

        }
       


    }