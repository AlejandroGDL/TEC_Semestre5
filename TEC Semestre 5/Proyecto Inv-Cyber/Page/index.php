<html>
    <head>
        <title>Menú Principal</title>
        <link rel="stylesheet" href="/Css/indexcss.css">
    </head>

    <body class="grid-container">
        <!--Encabezado Pagina-->
        <?php require('layout/header.php')?>
        <!--Barra Navegación Pagina-->
        <?php require('layout/nav.php')?>
        <!--Cuerpo Pagina-->
        <article class="main">
            
            <!--Botones navegación Main-->
            <div class="Main_Menu">
                <p>Clave del Producto:</p>
                <input type="text" placeholder="Código de barras" class="txtSearch"></input>
                <button class="Enter">Enter</button>
                <button Class="Search">Buscar <img src="Icons/Search_White.png"></button>
            </div>
        
            <table>
                <!--Encabezado -->
                <thead class="Encabezado">
                    <tr>
                        <th>Clave</th>
                        <th>Descripción</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th>Importe</th>
                    </tr>
                </thead>

                <!--Cuerpo Tabla-->
                <tbody>
                    <th>5</th>
                    <th>Producto de ejemplo 5</th>
                    <th>2</th>
                    <th>19.99</th>
                    <th>39.98</th>
                </tbody>
            </table>

        </article>

        <!--Píe de Pagina-->
        <footer class="footer">
            <p>$999.99</p>
            <button class="btnCobrar">Cobrar</button>
        </footer>

    </body>

</html>