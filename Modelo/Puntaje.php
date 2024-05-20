<?php     
    /**
     * Puntaje
     */
    class Puntaje{
        private $correcta;
        private $cursoAspira;
        private $cursoSena = ['ADSI' => 5,'ARC' => 5,'TAI' => 4,'MEI' => 3,'TPS' => 3,'MEC' => 3];

        
        /**
         * __construct
         *
         * @param  mixed $correcta
         * @param  mixed $cursoAspira
         * @return void
         * Metodo constructor donde se inicializa las variables
         */
        public function __construct($correcta, $cursoAspira){
            $this->correcta = $correcta;
            $this->cursoAspira = $cursoAspira;
        }
        
                
        /**
         * curso
         *
         * @return 
         * Metodo curso, donde valida el curso que aspira el usuario y su puntaje
         */
        public function curso(){
            //Condicional donde verifica si los parametros tienen almacenado datos
            if (array_key_exists($this->cursoAspira, $this->cursoSena)) {
                //Condional donde verifica el curso aspirado por el usuario con la cantidad de puntos
                if($this->correcta >= $this->cursoSena[$this->cursoAspira]){
                    return "Su puntaje ".$this->correcta."<br> Ingresas: ".$this->cursoAspira;
                }else{
                    //Si no es suficiente puntaje, almacena los programas dependiendo del puntaje del aspirante
                    $listaCursos = [];
                    foreach($this->cursoSena as $cursos =>$minimo){
                        if($this->correcta >= $minimo){
                            $listaCursos[] = $cursos;
                        }
                    }
                }
                //Condicional donde verifica si esta null, ademas returna si no cumple con los requisitos o programas con el puntaje que tiene
                if (empty($listaCursos)) {
                    return "No cumples con los requisitos para ingresar a ningún curso.";
                } else {
                    return "Su puntaje ".$this->correcta."<br>Puedes ingresar a los siguientes cursos: " . implode(", ", $listaCursos);
                }
            }else{
                echo"El curso no existe" . $this->cursoAspira;
            }
        }
    }
?>
