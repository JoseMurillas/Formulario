<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cuestionario Ingreso</title>
        <link rel="stylesheet" href="cuestionario.css">
    </head>
    <body>
        <form action="../Controlador/LogicaNegocio.php" method="get">
            <h2>Responda el siguiente cuestionario y envielo con el boton que se encuentra en la parte inferior</h2>
            <br>
            Pregunta 1: Para usted el SENA es:
            <br>
            <input type="radio" name="pregunta1" value="opcion1"> Un rio de china <br>
            <input type="radio" name="pregunta1" value="opcion2">Una institucion de formacion <br>
            <input type="radio" name="pregunta1" value="opcion3">Un barrio de Santiago de Cali <br>
            <input type="radio" name="pregunta1" value="opcion4">Ninguna de las anteriores <br>
            <br>
            Pregunta 2: Que es una solucion de Software 
            <br>
            <input type="radio" name="pregunta2" value="opcion1">un pegante para computadores <br>
            <input type="radio" name="pregunta2" value="opcion2">un programa que soluciona algo <br>
            <input type="radio" name="pregunta2" value="opcion3">un programa pegajoso <br>
            <input type="radio" name="pregunta2" value="opcion4">ninguna <br>
            <br>
            <label for="texto">Pregunta 3: La suma de la raiz cuadrada de 144 y 81 es:</label>
            <br>
            <input type="text" name="pregunta3" placeholder="Ingrese su respuesta aqui"> <br>
            <br>
            Pregunta 4: Cual es la capital del pais Patagonia
            <br>
            <input type="radio" name="pregunta4" value="opcion1">Argentina <br>
            <input type="radio" name="pregunta4" value="opcion2">Quito <br>
            <input type="radio" name="pregunta4" value="opcion3">Buenos Aires <br>
            <input type="radio" name="pregunta4" value="opcion4">Patagonia no es un pais <br>
            <br>
            pregunta 5: De los siguientes seleccione el dia de hoy 
            <br>
            <select name="diasSemana" >
                <option value="1">Lunes</option>
                <option value="2">Martes</option>
                <option value="3">Miercoles</option>
                <option value="4">Jueves</option>
                <option value="5">Viernes</option>
                <option value="6">Sabado</option>
                <option value="0">Domingo</option>
            </select>
            <br><br>
            
            <input type="hidden" value="2" name="form"  >
            <input type="hidden" value="<?php echo $_GET['nombre']?>" name="nombre">
            <input type="hidden" value="<?php echo $_GET['apellido']?>" name="apellido">
            <input type="hidden" value="<?php echo $_GET['documento']?>" name="documento">
            <input type="hidden" value="<?php echo $_GET['edad']?>" name="edad">
            <input type="hidden" value="<?php echo $_GET['curso']?>" name="curso">
            <input type="submit" name="">
        </form>
        
    </body>
</html>