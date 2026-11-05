<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASCII for first four characters </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class = "todo">
    <h1>LOGIN</h1><hr>
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
    <div class = "mitad izquierda">
    <form method = "POST" action ="">
        <br>
        <label for = "num2">&emsp;&emsp; Ingrese usuario:</label>
        <input type = "text"  name = "num2" id= "num2" class="input-alto" required>
        <br><br>
        <label for = "num3">&emsp;&emsp; Contraseña:</label>
        <input  type="password" minlength="6"  name = "num3" id= "num3" class="input-alto" required>
        <br><br>
        <button class="buton"  type = "submit" name = "buscar" style="width: 100px">Buscar</button>
        <br>
    </form>
        <?php
            echo"<div class ='mensaje'>";
            if($_SERVER["REQUEST_METHOD"]==="POST" && isset($_POST["buscar"])){
                $Nom=$_POST['num2'];
                $Con=$_POST['num3'];
                $encontrado = 0;
                $user=null;
                if (isset($_SESSION['usuarios'])) {
                    foreach ($_SESSION['usuarios'] as $u) {  
                        if ($u["Name"] === $Nom && password_verify($Con, $u["Contraseña"])) {
                            $user=$u;
                            $encontrado = 1;
                        break;
                        }
                    }
                }
            if($encontrado>=1){
                echo"<h3>Usuario encontrado<br></h3>";
                echo"Nombre: ".$user["NombreC"]."<br>";
                echo"Nombre de usuario: ".$user["Name"]."<br>";
                echo"Contraseña:<br><span>".$user["Contraseña"]."</span><br>";
                echo"Contraseña real:".$Con."<br>";
                if (password_verify($Con, $user["Contraseña"])) {
                    echo "<h3>Bienvenido al sistema</h3></div>";
                } else {
                    echo "Contraseña incorrecta</div>";
                }
            }else{
                echo"Usuario no visto</div>";
            }
        }
        ?>
        <br>
        <a class="boton" href="registro.php">
            registro
        </a>
        <br>
        <label></label>
        <br>
    </div>
</body>
</html>
