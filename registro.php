<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRO </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- la clase 'todo' es para almacenar todo el codigo aqui-->
    <div class = "todo">

        <h1>    <!-- Titulo con iconos agregados, para que esten en la misma linea-->
            <img src="imagenes/key-set.png" >
                REGISTRO DE USUARIO
            <img src="imagenes/key-set.png" >
        </h1>
        <hr>    <!-- linea de separacion de importancia-->
        <style> 
            .input-alto {
            height: 15px;
            padding: 8px;
            font-size: 16px;
            width: 120px;
            border: none;
            background-color:#fff;
            border-radius: 25%;
            text-align: center;
        }</style><!-- estilos, ya que no funcionaba en css-->
    <form action="datos.php" method = "POST">
        <!-- action="datos.php" es para ir a la pestaña de elaboracion(se me hacia mas facil)-->
        <!-- method="POST" mandar los datos a otro lugar -->
        <br>
        <!-- PEDIDA DE DATOS TODO OBLIGATORIO-->
        <label for = "num1">&emsp; Ingrese su nombre: &emsp;</label>
        <input type = "text"  name = "num1" id= "num1" class="input-alto" required>
        <br><br>
        <label for = "num2">&emsp; Ingrese su usuario: &emsp; </label>
        <input type = "text"  name = "num2" id= "num2" class="input-alto" required>
        <br><br>
        <label for = "num3">&emsp;&emsp; Contraseña:&emsp;&emsp;&emsp;</label>
        <input  type="password" minlength="6"  name = "num3" id= "num3" class="input-alto" required>
            <!-- type password el tipo ideal para contraseña y el minlength para que sea minimo mayor o igual a 6-->
        <br><br>
        <label for = "num4">&emsp; Confirmar contraseña:</label>
        <input  type="password" minlength="6" name = "num4" id= "num4" class="input-alto" required>
        <br><br>
        <button class="buton" type = "submit" name = "calcular" style="width: 100px">Registrar</button>
        <br><br>
    </form>
   <?php
   //la clase de mensaje usada para darles diseño a la parte php
    echo"<div class ='mensaje'>";
        /*
        Despues de regresar de datos.php se hace una verificacion.
        El primer if (if(isset($_GET['mensaje']))) esta creado para comprobar que en primer lugar haya algo
                        usando el metodo GET que son para datos sin mucha importancia (No contiene la integridad del usuario)
        El segundo if es el que mira si el mensaje transportado por el metodo get es igual a registrado y si es asi, mandarle un mensaje positivo, y en caso de no ser asi, mandar que son diferentes.
    */
    if (isset($_GET['mensaje'])) {
        if ($_GET['mensaje'] === 'registrado') {
            echo "<img src='imagenes/comprobado.png'>Usuario registrado!";
        } else {
            echo 'Contraseña diferente<br>';
        }
    }
    ?>
    <br><br>
    <a class="boton" href="login.php">    <!-- Boton para ir a login.php usando 'a'-->
        login
    </a>
    <br>
    <label></label>
    <br>
    </div>
</body>
</html>
