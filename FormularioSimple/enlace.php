<?php
    $bd_nombre = "alvaro";
    $bd_correo = "aferzu@gmail.com";
    $bd_edad = 28;

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if($bd_nombre == $_POST["nombre"] &&
            $bd_correo == $_POST["correo"] &&
            $bd_edad == $_POST["edad"]){

            echo "<h1>Bienvenido {$bd_nombre}, tu correo es {$bd_correo} y tu edad son {$bd_edad} años.</h1>";
            }
        else{
            echo "<h2>Los datos ingresados no corresponden con la base de datos.</h2>";
        }
    }
?>