<!--Conexion Base de datos-->
<?php require('./Codigos/conexion.php')?>

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
            <!--Código Search editar-->
            <?php require('./Codigos/searchproductcode.php')?>

            <h1>Editar Producto:</h1>

            <form class="Formulario" action="" method="POST">
                <div class="Search_Main">
                    <p>Código:</p>
                    <img src="./Icons/Search.png" width="30px" height="30px">
                    <input type="text" name="CodeS" placeholder="Escribre aquí el código:" id="SearchBox" autofocus> </input>
                    <input type="submit" name="SearchData" class="btnEnter" value="Enter"></input>
                </div>

                <a id="Sep2"></a>
                
                <div class="Form">
                    <input name="ID" id="IDTextBox" type="text"  value="<?php echo $ID?>"/>
                    <p>Código del producto:</p>
                    <input name="Code" id="TextBox" value="<?php echo $Codigo ?>"></input>
                    
                    <p>Descripción del producto:</p>
                    <input name="Desc" type="text" id="TextBox" value="<?php echo $Descripcion ?>"></input>
                    
                    <p>Precio:</p>
                    <input name="Price" type="number" id="TextBox" value="<?php echo $Precio ?>"></input>
                    
                    <p>Cantidad disponible:</p>
                    <input name="Count" type="number" id="TextBox" value="<?php echo $Cantidad ?>"></input>
                </div>

                <a id="Sep2"></a>
                <input name="Actu" class="btnActu" type="submit" value="Actualizar Datos"></input>
                <!--Código Botón Actualizar-->
                <?php require('./Codigos/editcode.php')?>


            </form>

        </article>


    </body>
</html>