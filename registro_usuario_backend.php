<?php

    include("conexion_backend.php");

    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $password = $_POST['password'];

    //se va a incriptar la contraseña
    $password = hash('sha512', $password);

    $query = "INSERT INTO usuarios(nombre, correo, password) VALUES('$nombre', '$correo', '$password')";

    //vamos a verificar q el correo no se repita en la base de datos
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo'");
    if(mysqli_num_rows($verificar_correo) > 0){
        echo'
            <script>
                alert("Este correo ya esta registrado, intenta con otro diferente");
                window.location = "index.php";
            </script>
        ';
        exit();
        mysqli_close($conexion);
    }
    //vamos a verificar q el nombre de usuario no se repita en la base de datos
    $verificar_nombre = mysqli_query($conexion, "SELECT * FROM usuarios WHERE nombre = '$nombre'");
    if(mysqli_num_rows($verificar_nombre) > 0){
        echo'
        <script>
            alert("Este nombre de usuario ya esta registrado, intenta con otro diferente");
            window.location = "index.php";
        </script>
        ';
        exit();
        mysqli_close($conexion);
    }

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo'
        <script>
            alert("Usuario registrado correctamente");
            window.location = "index.php";
        </script>
        ';
    } else {
        echo'
        <script>
            alert("Usuario no registrado");
            window.location = "index.php";
        </script>
        ';
    }
    mysqli_close($conexion);
?>
