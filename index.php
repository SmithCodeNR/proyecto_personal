<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoalZone</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <main>
        <div class="caja-lider">
            <!--caja trasera-->
            <div class="CajaTrasera">
                <!--caja trasera de inicio-->
                <div class="CajaTraseraLogin">
                   <h3>¿Ya Tienes Cuenta?</h3>
                   <p>Inicia Sesion Para Entrar A La Pagina</p>
                   <button id="botonInicioSesion">Inicio Sesion</button>
                </div>
                <!--caja trasera de registro-->
                <div class="CajaTraseraRegistro">
                   <h3>¿Aun No Tienes Cuenta?</h3>
                   <p>Registrate Parta Poder Iniciar Sesion?</p>
                   <button id="botonRegistrarse">Registrarse</button>
                </div>
            </div>
        
            <!--caja de login y Registro-->
            <div class="CajaLoginRegistro">
                <!--formulario de inicio-->
                <form action="" class="FormularioLogin">
                    <h2>Inicio Sesion</h2>
                    <input type="text" placeholder="ingrese nombre" required>
                    <input type="text" placeholder="ingrese correo" required>
                    <input type="password" placeholder="ingrese contraseña" required>
                    <button>Entrar</button>
                </form> 
                <!--formulario de registro-->
                <form action="registro_usuario_backend.php" method="POST" class="FormularioRegistro">
                    <h2>Registarse</h2>
                    <input type="text" placeholder="ingrese nombre" required name="nombre">
                    <input type="text" placeholder="ingrese correo" required name="correo">
                    <input type="password" placeholder="ingrese contraseña" required name="password">
                    <button>Registrarse</button>
                </form>
            </div>
        </div>
    </main>
    <script src="codigo.js"></script>
</body>
</html>