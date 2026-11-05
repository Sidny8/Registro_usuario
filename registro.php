<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASCII for first four characters </title>
    <link rel="stylesheet" href="style/Problema1.css">
</head>
<body>
    <h1>REGISTRO DE USUARIO</h1><hr>
    <div class= contenedor>
    <style>
        .input-alto {
        height: 15px;
        padding: 8px;
        font-size: 16px;
        width: 120px;
        border: rgb(63, 53, 30) 3px solid;
        background-color:#fff;
        border-radius: 25%;
        text-align: center;
    }</style>
    <div class = "mitad izquierda">
    <form action="datos.php" method = "POST">
        <br><br><br>
        <label for = "num1">&emsp;&emsp; Ingrese su nombre: &emsp;</label>
        <input type = "text"  name = "num1" id= "num1" class="input-alto" required>
        <br><br><br>
        <label for = "num2">&emsp;&emsp; Ingrese su nombre de usuario: &emsp;</label>
        <input type = "text"  name = "num2" id= "num2" class="input-alto" required>
        <br><br><br>
        <label for = "num3">&emsp;&emsp; Contraseña:</label>
        <input  type="password" minlength="6"  name = "num3" id= "num3" class="input-alto" required>
        <br><br><br>
        <label for = "num4">&emsp;&emsp; Comprobar Contraseña:</label>
        <input  type="password" minlength="6" name = "num4" id= "num4" class="input-alto" required>
        <br><br><br>
        <button type = "submit" name = "calcular" style="width: 100px">Registrar</button>
        <br><br>
    </form>
   <?php
    if (isset($_GET['mensaje']) && $_GET['mensaje'] === 'registrado') {
        echo 'Usuario registrado!';
    }else{
        echo 'Contraseña diferente';
    }
    ?>

    </div>
    <div class= "linea"></div>
    <div class = "mitad derecha">
    <a class="boton" href="login.php">
        login
    </a>
    </div>
</body>
</html>
