<?php
//UNA CLASE QUE NO SE ESTA USANDO.
    class Aspirante{
        private $nombre;
        private $apellido;
        private $edad;
        private $documento;
        private $curso; 
        
        //Setter y Getter para cada atributo
        function setNombre($nom){
            $this->nombre=$nom;
        }
        function getNombre(){
            return $this->nombre;
        }

        function setApellido($ape){
            $this->apellido=$ape;
        }
        function getApellido(){
            return $this->apellido;
        }

        function setEdad($ed){
            $this->edad=$ed;
        }
        function getEdad(){
            return $this->edad;
        }

        function setDocumento($doc){
            $this->documento=$doc;
        }
        function getDocumento(){
            return $this->documento;
        }

        function setCurso($cur){
            $this->curso=$cur;
        }
        function getCurso(){
            return $this->curso;
        }
    }
?>
