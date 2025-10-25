<?php
include '../../../cookie-lib/biblioteca.php';
include '../../../data/user.php';

// Inicializamos las variables de sesión

    $_SESSION["checkLogin"] = "";



    $_SESSION["usuarioAdmin"] = new User("Jose de Haro Jiménez", "1234");


// Si se envió el formulario:
if (isset($_GET["nombre"], $_GET["password"])) {
    $nombre = $_GET["nombre"];
    $password = $_GET["password"];

    // Validar credenciales
    if ($nombre === $_SESSION["usuarioAdmin"]->obtenerNombre() &&
        $password === $_SESSION["usuarioAdmin"]->obtenerPassword()) {

        $_SESSION["checkLogin"] = "Admin";
        header('Location: ../../../index.php');
        exit; // 🔥 detiene ejecución
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./login.css">
    <title>Document</title>
    <!--Importación de fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pixelify+Sans:wght@400..700&display=swap" rel="stylesheet">
</head>
<body>  
    <form action="login.php" method="get" class="transition">
        <img class="transition" src="./user.webp" alt="" id="img">

        <h1>Pinterest 2.0 </h1>
    
        <div class="contenedorInput ">
            <label for="nombre">Nombre:</label>
            <input class="transition" type="text" placeholder="Indique su nombre" name="nombre" autocomplete="off">
        </div>
        <div class="contenedorInput">
            <label for="passwprd">Contraseña:</label>
            <input class="transition" type="password" name="password" placeholder="Ingrese su contraseña" >
        </div>
        
       
        <button class="transition"><span class="transition">LOGIN</span></button>
        
       
    </form>
</body>
</html>