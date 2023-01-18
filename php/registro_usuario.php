<?php
    
    include 'conexion_be.php';

    $usuario = $_POST['usuario'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    // $contrasena = hash('sha512', $contrasena);    //incriptar contraseña


    $query = "INSERT INTO empleado( correo, usuario, contrasena) 
              VALUES('$correo', '$usuario', '$contrasena')";
    
    //verificar que el correo no se repita en la base de dato
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM empleado WHERE correo='$correo' ");

    
    if(mysqli_num_rows($verificar_correo) > 0){
        echo'
           <script>
                alert("Este correo ya esta registrado, intenta con otro");
                window.location = "../index.php";
           </script>
        ';
        exit();
    }

    //verificar que el nombre de usuario no se repita en la base de dato
    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM empleado WHERE usuario='$usuario' ");

    
    if(mysqli_num_rows($verificar_usuario) > 0){
        echo'
           <script>
                alert("Este usuario ya esta registrado, intenta con otro");
                window.location = "../index.php";
           </script>
        ';
        exit();
    }

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
            <script>
                alert("Usuario almacenado exitosamente");
                window.location = "../index.php";
            </script>
        ';
    }else{
        echo '
            <script>
                alert("Intentelo de nuevo, usuario no almacenado");
                window.location = "../index.php";
            </script>
        ';
    }

    mysqli_close($conexion);
?>