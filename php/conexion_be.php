<?php
    $conexion = mysqli_connect("localhost", "root", "", "login");


    if($conexion){
    echo "Conexion exitosa";
    }else{
    echo "Conexion Incorrecto";
    }

    
?>