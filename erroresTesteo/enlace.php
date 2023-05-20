<?php

    header("Location: ../enlace.php?signup=empty");

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];

        try{
            $division = $num1 / $num2;
            echo $division;
        } catch(Exception $e){
            echo "Cuidado! Hubo un error!";
        }
    }
?>