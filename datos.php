<?php
    session_start();
    if($_SERVER["REQUEST_METHOD"]==="POST" && isset($_POST["calcular"])){
        $NomC=$_POST['num1'];
        $Nom=$_POST['num2'];
        $Con=$_POST['num3'];
        $Con2=$_POST['num4'];
        if ($Con !== $Con2) {
            header("Location: registro.php?mensaje=No");
        exit();
        }
        if (!isset($_SESSION['usuarios'])) {
            $_SESSION['usuarios'] = [];
        }
        $_SESSION['usuarios'][]= ["NombreC" => $NomC, 
                                    "Name" => $Nom, 
                                    "Contraseña" => password_hash($Con,PASSWORD_DEFAULT) 
                ];

        header("Location: registro.php?mensaje=registrado");
        exit();

    }else{
        header("Location: registro.php?mensaje=no");
        exit();
    }
?>