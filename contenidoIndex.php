<?php
 include './cookie-lib/biblioteca.php';
 
    if($_SESSION["checkLogin"] == "" || $_SESSION["checkLogin"] != "Admin") header('Location: ./src/components/login/login.php');
    /*
    function eliminarCredenciales(){
        $_SESSION["checkLogin"]="";
    }
    <!--¿Preguntar a javi por qué cuando reiniciio la página el método se ejecuta con este codigo?-->
    <!--<form action="<?php eliminarCredenciales(); ?>" method="post">
        <button>Cerrar sesión</button>
    </form>-->    
    */

    if(isset($_GET["cerrar_sesion"])){
         $_SESSION["checkLogin"]="";
         header('Location: ./contenidoIndex.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--Declarción de icono-->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <!--Declaración de hojas de estilo-->
    <link rel="stylesheet" href="./contenidoIndex.css">
    <link rel="stylesheet" href="./global.css">
    <!--Declaración de font-->
    <link href="https://fonts.googleapis.com/css2?family=Pixelify+Sans:wght@400..700&display=swap" rel="stylesheet">

</head>
<body>
    <section class="hero">
        <article class="img border"></article>
        <nav class="transition">
            <span class="material-symbols-outlined">home</span>
            <span class="material-symbols-outlined">settings</span>
            <form method="get">
                    <button type="submit" name="cerrar_sesion"><span class="material-symbols-outlined">logout</span></button>
            </form>
            <article class="nameProyect ">Pinterest 2.0 </article>
        </nav>
        <article></article>
        <article></article>
        <article></article>
        <article></article>
    </section> 
</body>
</html>