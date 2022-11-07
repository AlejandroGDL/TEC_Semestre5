<!--Conexion Base de datos-->
<?php require('./Codigos/conexion.php')?>

<html>
    <head>
        <title>Eliminar Producto</title>
        <link rel="stylesheet" href="Css/deleteproduct.css">
    </head>
    <body class="grid-container">
        <!--Encabezado Pagina-->
        <?php require('layout/header.php')?>
        <!--Barra Navegación Pagina-->
        <?php require('layout/nav.php')?>

        <!--Cuerpo Pagina-->
        <article class="main">
            <!--Buscar Productos-->
            <?php require('Codigos/searchproductcode.php') ?>
            <h1>Eliminar Producto</h1>

            <form method="POST" action="">
                <div class="Formulario">
                    <div class="Search_Main">
                        <p>Código:</p>
                        <img src="./Icons/Search.png" width="30px" height="30px">
                        <input type="text" name="CodeS" placeholder="Escribre aquí el código:" id="SearchBox" autofocus> </input>
                    <input type="submit" name="SearchData" class="btnEnter" value="Enter"></input>
                    </div>
                    <a id="Sep2"></a>

                    <div class="Form">
                        <input name="ID_Producto" id="IDTextBox" type="text" value="<?php echo $ID ?> " />
                        <p><b>Codigo del producto:</b> <?php echo $Codigo?></p>
                        <p><b>Descripción del Producto:</b> <?php echo $Descripcion ?></p>
                        <p><b>Precio del producto:</b> <?php echo $Precio ?></p>
                        <p><b>Cantidad:</b> <?php echo $Cantidad ?></p>
                    </div>
                </div>

        </article>

        <!--Píe de Pagina-->
        <footer class="footer">
            <button name="Delete" class="btnCobrar">Eliminar</button>
        </footer>
        <?php require('Codigos/Deletecode.php') ?>
            </form>
    </body>
</html>