<!--Conexion Base de datos-->
<?php require('./Codigos/conexion.php')?>
<?php session_start(); ?>

<html>
    <head>
        <link rel="stylesheet" href="Css/indexcss.css" />
        <title>Menú Principal</title>
    </head>

    <body class="grid-container">
        <!--Encabezado Pagina-->
        <?php require('layout/header.php')?>
        <!--Barra Navegación Pagina-->
        <?php require('layout/nav.php')?>
        <!--Cuerpo Pagina-->
        <article class="main">
            <?php 
                $micarrito = $_SESSION['Carrito'];
                $_SESSION['Carrito'] = $micarrito;
                if(isset($_SESSION['Carrito'])){
                    for($i=0;$i<=count($micarrito)-1;$i++){
                        $total =$micarrito['cantidad'];
                        $total ++;
                        $total2 += $total; 
                    }
                }
            ?>    

            <form action="carrito.php">
            <!--Botones navegación Main-->
            <div class="Main_Menu">
                <p>Clave del Producto:</p>
                <input type="text" placeholder="Código de barras" class="txtSearch" autofocus></input>
                <button class="Enter" name="Enter" type="submit">Enter</button>
            </div>
            </form>
            
            <!--Mostrar tabla con todos los productos-->
            <?php require('Codigos/showproductscode.php') ?>

        </article>

        <!--Píe de Pagina-->
        <footer class="footer">
            <p>$999.99</p>
            <button class="btnCobrar">Cobrar</button>
        </footer>

    </body>

</html>