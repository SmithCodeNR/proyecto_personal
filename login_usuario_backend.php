<?php
    include("conexion_backend.php");
    $correo = $_POST["correo"];
    $password = $_POST["password"];

     //vamos a validaer los datos de la base de dstos
     $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' and password='$password'"); 
     if(mysqli_num_rows($validar_login) > 0){
        header("location: inicio.php");
        exit();
     } else {
        echo'
            <script>
                alert("Usuario no existe, por favor verifique los datos ingresados");
                window.location = "index.php";
            </script>
        ';
        exit();
     }
?>