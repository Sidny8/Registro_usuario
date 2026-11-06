<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Lo mismo que en registro.php-->
    <div class = "todo">
    <h1>
        <img src='imagenes/portapapeles.png'>
            LOGIN
        <img src='imagenes/portapapeles.png'>
    </h1>
    <hr>
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
                $find = 0;//Usado como detector
                $user=null;//arreglo vacio pero sin el [][]
                if (isset($_SESSION['usuarios'])) {//checar si existe el arreglo de 'usuarios'
                    foreach ($_SESSION['usuarios'] as $u) {//el arreglo se va a la variable $u que es la que se cambia de valor al recorrer el arreglo  
                        if ($u["Name"] === $Nom && password_verify($Con, $u["Contraseña"])) { //Comprobacion de valores
                            $user=$u;// el user que era un arreglo, ahora se le añade todo lo que tenia $u en ese momento
                            $find = 1;//el detector cambia a 1
                        break;//termina el detector
                        }
                    }
                }
            if($find>=1){//Si el detector sallio positivo(1), entra a sacar los datos para monstrarlos
                echo"<h3>Usuario encontrado<img src='imagenes/comprobado.png'><br></h3>";
                echo"Nombre: ".$user["NombreC"]."<br>";
                echo"Nombre de usuario: ".$user["Name"]."<br>";
                echo"Contraseña:<br><span>".$user["Contraseña"]."</span><br>";
                if (password_verify($Con, $user["Contraseña"])) {//si la contraseña volvia a dar correcto, mosstrar resultado
                    echo "<h3>Bienvenido al sistema</h3></div>";
                } else {// Caso donde la contraseña fue la incorrecta
                    echo "Contraseña incorrecta</div>";
                }
            }else{//Caso donde el detector no encontro nada
                echo"Usuario no visto<img src='imagenes/rechazado.png'></div>";
            }
        }
        ?>
        <br>
        <a class="boton" href="registro.php">  <!-- Boton para ir a registro.php usando 'a'-->
            registro
        </a>
        <br>
        <label></label>
        <br>
    </div>
</body>
</html>
