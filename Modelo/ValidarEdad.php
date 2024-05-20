<?php 
    
    /**
     * ValidarEdad
     */
    class ValidarEdad{
        private $edad;
        
        /**
         * __construct
         *
         * @param  mixed $ed
         * @return void
         */
        public function __construct($ed){
            $this->edad = $ed;
        }
        
        /**
         * TipoCarrera
         *
         * @return void
         */
        public function TipoCarrera(){
            if($this->edad >= 15 and $this->edad <= 35){
                return "Profesional";
            }elseif($this->edad >= 36 and $this->edad <= 45){
                return "Tecnólogo";
            }elseif($this->edad >= 46 and $this->edad <= 55){
                return "Técnico";
            }elseif($this->edad >= 56){
                return "Complementario";
            }else{
                return "La edad no es suficiente";
            }
        }
    }
?>
