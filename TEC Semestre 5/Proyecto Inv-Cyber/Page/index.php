<!--Conexion Base de datos-->
<?php require('./Codigos/conexion.php')?>
<?php 
    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on'){
        $url = "https://";
    } else{
        $url = "https://";
        $url.= $_SERVER['HTTP_HOST'];
        $url.= $_SERVER['REQUEST_URI'];
        $url; 
    }
$page = $url;
$seg = "10";
?>

<html lang="es">
    <head>
        
        <link rel="stylesheet" href="Css/indexcss.css" />
        <title>Menú Principal</title>
    </head>

    <body class="grid-container">
        <!--Encabezado Pagina-->
        <?php require('layout/header.php')?>
        <!--Barra Navegación Pagina-->
        <?php require('layout/nav.php')?>
        <!--Cuerpo Pagina y Píe de pagina-->
        <form class="Formulario" action="./index.php" method="POST">
        <article class="main">
            <?php include('Codigos/SearchVentas.php'); ?>

            <?php include('Codigos/CarritoVentas.php'); ?>
        </article>

        <!--Píe de Pagina-->
        <footer class="footer">
            <p>Total: <?php echo $Subtotal ?></p>
            <a class="btnCobrar" href="Modal_Cobrar.php">Cobrar</a>
        </footer>
        </form>
    </body>

    <!--Modal Cobrar Produtos -->
    <?php include('Modal_Cobrar.php') ?>

    <!--Modal Todos los Productos -->
    <?php include('Modal_Productos.php') ?>

    <!--Modal Notificiones -->
    <?php include('layout/notification.php') ?>

    <!--Script JavaScript Modales -->
    <script src="JavaScript/modal.js"></script>
    
</html>