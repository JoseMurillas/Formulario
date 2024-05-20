<?php    
    /**
     * Evaluacion
     * Clase donde alamcena y vefirica las respuestas del aspirante
     */
    class Evaluacion { 
        //Esta clase 
        private $Acertadas = 0;
        private $Pregunta1;
        private $Pregunta2;
        private $Pregunta3;
        private $Pregunta4;
        private $Pregunta5;
        
        
        /**
         * setPregunta1
         *
         * @param  mixed $Pregunta1
         * @return void
         * 
         * 
         */
        public function setPregunta1($Pregunta1) {
            $this->Pregunta1 = $Pregunta1;
        }
        
        /**
         * setPregunta2
         *
         * @param  mixed $Pregunta2
         * @return void
         */        
        public function setPregunta2($Pregunta2) {
            $this->Pregunta2 = $Pregunta2;
        }
        
        /**
         * setPregunta3
         *
         * @param  mixed $Pregunta3
         * @return void
         */
        public function setPregunta3($Pregunta3) {
            $this->Pregunta3 = $Pregunta3;
        }
        
        /**
         * setPregunta4
         *
         * @param  mixed $Pregunta4
         * @return void
         */
        public function setPregunta4($Pregunta4) {
            $this->Pregunta4 = $Pregunta4;
        }
        
        /**
         * setPregunta5
         *
         * @param  mixed $Pregunta5
         * @return void
         */
        public function setPregunta5($Pregunta5) {
            $this->Pregunta5 = $Pregunta5;
        }

        
        /**
         * ValidarPreguntas
         *
         * @return void
         * Metodo donde valida las 5 preguntas y las almacena en un acumulador
         */
        public function ValidarPreguntas() {
            if ($this->Pregunta1 == "opcion2") {
                $this->Acertadas += 1;
            }
            if ($this->Pregunta2 == "opcion2") {
                $this->Acertadas += 1;
            }
            if ($this->Pregunta3 == "21") {
                $this->Acertadas += 1;
            }
            if ($this->Pregunta4 == "opcion4") {
                $this->Acertadas += 1;
            }
            if ($this->Pregunta5 ==date("w") ) {
                $this->Acertadas += 1;
            }
        }        
        /**
         * Correcto
         *
         * @return 
         * Metodo donde retorna la cantidad de respuestas acertadas
         */
        public function Correcto(){
            return $this->Acertadas;
        }
    }

?>