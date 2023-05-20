<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nombre = $_POST["nombre"];
        $password = $_POST["password"];

        echo "bienvenido {$nombre} no compartas con nadie tu clave: <br>" . $password;
    }
?>