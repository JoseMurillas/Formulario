<?php
    require("../Modelo/Aspirante.php");
    require("../Modelo/ValidarEdad.php");
    require("../Modelo/Evaluacion.php");
    require("../Modelo/Puntaje.php");
    
    //Verifica que el metodo sea mediante GET de lo contrario avisa
    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        //Dependiendo del form, se va ejecutar ciertas funciones
        if($_GET['form'] == 1){
            //Este Form1 almacena los datos de usuario en variables
            $nombre = $_GET["nombre"];
            $apellido = $_GET["apellido"];
            $edad = $_GET["edad"];
            $documento = $_GET["documento"];
            $curso = $_GET["opciones"];
            
            //Utilizando la funcion hearder, se hace el envio de los datos almacenados y muestra el cuestionario
            header('Location: ../Vista/Cuestionario.php?nombre=' . $nombre . '&apellido=' . $apellido. '&edad=' . $edad . '&documento=' . $documento . '&curso=' . $curso);  

        }elseif($_GET['form'] == 2){
            //Este form2, traera los datos almacenados por el usuario e imprime
            $curso = $_GET['curso'];
            $edad = $_GET['edad'];
            //Se llama la clase evaluacion para almacenar las respuestas de las preguntas y se validad
            $evaluacion = new Evaluacion();
            $evaluacion->setPregunta1($_GET["pregunta1"]);
            $evaluacion->setPregunta2($_GET["pregunta2"]);
            $evaluacion->setPregunta3($_GET["pregunta3"]);
            $evaluacion->setPregunta4($_GET["pregunta4"]);
            $evaluacion->setPregunta5($_GET["diasSemana"]);
            $evaluacion->ValidarPreguntas();

            //Se llama la clase puntaje, la cual con el metodo constructor almacena la cantidad aciertos y el curso que el aspirante desea
            $puntaje = new Puntaje($evaluacion->Correcto(), $curso);
            //Se imprime los datos que fueron almacenados en form1
            echo "<h2>Informacion del Aspirante</h2>","Nombre: ",$_GET["nombre"],"<br>Apellido: ",$_GET["apellido"],"<br>Edad: ",$_GET["edad"],"<br>Documento: ",$_GET["documento"],"<br>Curso Aspira: ",$_GET["curso"],"<br>";
            echo "<h2>Validacion de edad</h2>";
            //Se llama la clase ValidarEdad donde se ingresa la edad del aspirante e invocando al metodo TipoCarrera, determinara que profesion puede ingresar
            $validarEdad= new ValidarEdad($edad);
            echo $validarEdad->TipoCarrera();
            echo "<h2>Validacion de curso</h2>",$puntaje->curso();
        }else{
            echo"Error en intercambio de formularios";
        }
    }else{
        echo"La solicitud HTTP ¡NO ES GET!";
    }

?>