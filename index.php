<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> login y registro</title>
        <link rel="stylesheet" href="activos/css/estilos.css">
    </head>
    <body>
        <main>
            <div class="contenedor__todo">
                <div class="caja__trasera">  <!---caja trasera que viene siendo la azul-->
                    <div class="caja__trasera-login">
                        <h3>¿ya tienes una cuenta?</h3>
                        <p>Inicia sesion para entrar en la pagina</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesíon</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>¿Aun no tienes cuenta?</h3>
                        <p>Registrate para que puedas iniciar Sesión</p>
                        <button id="btn__registrarse">Regístrarse</button>
                    </div>
                </div>
                <!--Formulario de login y registro-->
                <div class="contenedor__login-register">
                    <!--login-->
                    <form action="php/login_usuario.php" method="POST" class="formulario__login">
                        <h2>Iniciar sesíon</h2>
                        <input type="text" placeholder="Correo Electronico" name="correo">
                        <input type="password" placeholder="Contraseña" name="contrasena">
                        <button>Entrar</button> 
                    </form>
                    <!--registro-->
                    <form action="php/registro_usuario.php" method="POST" class="formulario__register">
                        <h2>Registrarse</h2>
                        <input type="text" placeholder="Correo Electronico" name="correo">
                        <input type="text" placeholder="Usuario" name="usuario">
                        <input type="password" placeholder="Contraseña" name="contrasena">
                        <button>Registrarse</button>
                    </form>
                    
                </div>
            </div>
        </main>
        <script src="activos/js/script.js"></script>
    </body>
</html>