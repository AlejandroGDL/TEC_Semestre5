<!--Conexion Base de datos-->
<?php
$serverName = "ANDROLAPTOP\SQLEXPRESS"; //Cambiar
$connectionInfo = array( "Database"=>"Proyecto", "UID"=>"UsernameCon", "PWD"=>"Alejandro1298");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

?>

<html>
    <head>
        <title>Editar Producto</title>
        <link rel="stylesheet" href="./Css/editproductcss.css">
    </head>

    <body class="grid-container">
        <!--Encabezado Pagina-->
        <?php require('layout/header.php')?>
        <!--Barra Navegación Pagina-->
        <?php require('layout/nav.php')?>
        <!--Cuerpo Pagina-->
        <article class="Main">
            <form class="Formulario" action="">
                <div class="Search_Main">
                    <p>Código:</p>
                    <img src="./Icons/Search.png" width="30px" height="30px">
                    <input type="text" name="" placeholder="Escribre aquí el código:" id="SearchBox" autofocus> </input>
                    <input type="submit" name="SearchData" class="btnActu" value="Enter"></input>
                </div>

                <a id="Sep2"></a>
                
                <div class="Form">
                    <p>Código del producto:</p>
                    <input name="Code" type="text" id="TextBox"></input>

                    <p>Descripción del producto:</p>
                    <input name="Desc" type="text" id="TextBox"></input>

                    <p>Precio:</p>
                    <input name="Price" type="text" id="TextBox"></input>

                    <p>Cantidad disponible:</p>
                    <input name="Count" type="text" id="TextBox"></input>

                    <input class="btnActu" type="submit" value="Actualizar Datos"></input>
                </div>
                
            </form>

        </article>
        <!--Píe de Pagina-->
        <footer class="footer"></footer>


    </body>
</html>