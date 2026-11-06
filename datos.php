<?php
    session_start();//Termina creando un almacenamiento temporal en el navegador
    if($_SERVER["REQUEST_METHOD"]==="POST" && isset($_POST["calcular"])){ //Verificacion por si tocaron el boton
        $NomC=$_POST['num1'];
        $Nom=$_POST['num2'];
        $Con=$_POST['num3'];
        $Con2=$_POST['num4'];
        if ($Con !== $Con2) { //Comprobar si la contraseña 1 y 2 no son iguales
            header("Location: registro.php?mensaje=No");//Regresar a registro pero con mensaje de 'no'
            exit();
        }
        if (!isset($_SESSION['usuarios'])) {//Ver si no existe el arreglo de 'usuarios' y crearlo 
            $_SESSION['usuarios'] = [];
        }
        /*
        Ya con el arreglo creado si es que no existia en el navegador, es que ahora se añaden los valores, en un arreglo anidado.
        El unico dato importante a destacar es la contraseña que pasa por el filtro de hash
        */
        $_SESSION['usuarios'][]= ["NombreC" => $NomC, 
                                    "Name" => $Nom, 
                                    "Contraseña" => password_hash($Con,PASSWORD_DEFAULT) 
                ];
        //Al ya haber terminado esto, te teletransportas a registro.php con el mensaje de 'registro'
        header("Location: registro.php?mensaje=registrado");
        exit();

    }else{
        //Si de casualidad algo entra a datos.php y no es registro.php te lleva a de regreso a datos.php
        header("Location: registro.php?mensaje=no");
        exit();
    }
?>