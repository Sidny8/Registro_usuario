<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRO </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class = "todo">

    <h1><img src="imagenes/key-set.png" >
    REGISTRO DE USUARIO
    <img src="imagenes/key-set.png" >
    </h1><hr>
    <div class= contenedor>
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
    }</style>
    <form action="datos.php" method = "POST">
        <br>
        <label for = "num1">&emsp; Ingrese su nombre: &emsp;</label>
        <input type = "text"  name = "num1" id= "num1" class="input-alto" required>
        <br><br>
        <label for = "num2">&emsp; Ingrese su usuario: &emsp; </label>
        <input type = "text"  name = "num2" id= "num2" class="input-alto" required>
        <br><br>
        <label for = "num3">&emsp;&emsp; Contraseña:&emsp;&emsp;&emsp;</label>
        <input  type="password" minlength="6"  name = "num3" id= "num3" class="input-alto" required>
        <br><br>
        <label for = "num4">&emsp; Confirmar contraseña:</label>
        <input  type="password" minlength="6" name = "num4" id= "num4" class="input-alto" required>
        <br><br>
        <button class="buton" type = "submit" name = "calcular" style="width: 100px">Registrar</button>
        <br><br>
    </form>
   <?php
    echo"<div class ='mensaje'>";
    if (isset($_GET['mensaje'])) {
        if ($_GET['mensaje'] === 'registrado') {
            echo "<img src='imagenes/comprobado.png'>Usuario registrado!";
        } else {
            echo 'Contraseña diferente<br>';
        }
    }
    ?>
    <br><br>
    <a class="boton" href="login.php">
        login
    </a>
    <br>
    <label></label>
    <br>
    </div>
</body>
</html>
