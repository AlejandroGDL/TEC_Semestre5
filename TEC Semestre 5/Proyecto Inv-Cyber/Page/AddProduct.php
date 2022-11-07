<!--Conexion Base de datos-->
<?php require('./Codigos/conexion.php')?>

<html>
    <head>
        <title>Añadir Producto</title>
        <link rel="stylesheet" href="./Css/addproductcss.css">
    </head>

    <body class="grid-container">
        <!--Encabezado Pagina-->
        <?php require('layout/header.php')?>
        <!--Barra Navegación Pagina-->
        <?php require('layout/nav.php')?>

        <!--Cuerpo Pagina-->
        <article class="main">
            <h1>Crear Nuevo Producto:</h1>

            <form action="./AddProduct.php" class="Formulario" method="POST">

                <div class="Form">
                    <p>Código del producto:</p>
                    <input name="Code" type="text" autofocus placeholder="Ej. Jitomate" id="TextBox"></input>

                    <p>Descripción del producto:</p>
                    <input name="Desc" type="text" id="TextBox"></input>

                    <p>Precio:</p>
                    <input name="Price" type="text" id="TextBox"></input>

                    <p>Cantidad del inventario:</p>
                    <input name="Count" type="text" id="TextBox"></input>

                </div>

                <a id="Sep2"></a>
                <input type="submit" name="Insert" class="btnAdd" value="Agregar"></input>
            </form>

            <!--PHP código Insert-->
            <?php require('./Codigos/addcode.php')?>

        </article>
        


    </body>

</html>