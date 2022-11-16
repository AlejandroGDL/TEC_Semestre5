<!--Conexion Base de datos-->
<?php require('./Codigos/conexion.php')?>
<?php session_start(); ?>

<html lang="es">
    <head>
        <link rel="stylesheet" href="Css/indexcss.css" />
        <title>Menú Principal</title>
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> -->
    </head>

    <body class="grid-container">
        <!--Encabezado Pagina-->
        <?php require('layout/header.php')?>
        <!--Barra Navegación Pagina-->
        <?php require('layout/nav.php')?>
        <!--Cuerpo Pagina y Píe de pagina-->
        <form class="Formulario" action="./index.php" method="POST">
        <article class="main">
            <?php include('Codigos/ventas.php'); ?>
        </article>

        <!--Píe de Pagina-->
        <footer class="footer">
            <p>Total: <?php echo $Subtotal?></p>
            <a class="btnCobrar" href="Modal_Cobrar.php">Cobrar</a>
        </footer>
        </form>
    </body>

    <!--Modal Buscar Produtos -->
    <?php include('Modal_Cobrar.php') ?>

    <script src="JavaScript/modal.js"></script>
</html>