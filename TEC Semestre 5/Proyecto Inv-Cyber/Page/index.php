<!--Conexion Base de datos-->
<?php
$serverName = "ANDROLAPTOP\SQLEXPRESS"; //Cambiar
$connectionInfo = array( "Database"=>"Proyecto", "UID"=>"UsernameCon", "PWD"=>"Alejandro1298");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

?>

<html>
    <head>
        <title>Menú Principal</title>
        <link rel="stylesheet" href="./Css/indexcss.css">
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
                        <th>Accion</th>
                    </tr>
                </thead>
                
                <!--Datos SQL Tabla-->
                <?php
                    $consulta = "SELECT * FROM Producto";
                    $ejecutar = sqlsrv_query($conn,$consulta);

                    //Generar lista de Productos
                    $i = 0;
                    while($fila = sqlsrv_fetch_array($ejecutar)){
                        $Codigo = $fila['Codigo'];
                        $Descripcion = $fila['Descripcion'];
                        $Cantidad = $fila['Cantidad'];
                        $Precio = $fila['Precio'];
                        $i++;
                    
                    
                    //Calcular Importe
                    $Importe = $Cantidad * $Precio;
                ?>
                    <!--Cuerpo Tabla-->
                    <tbody>
                            <tr>
                                <td><?php echo $Codigo; ?></td>
                                <td><?php echo $Descripcion; ?></td>
                                <td><?php echo $Cantidad; ?></td>
                                <td><?php echo $Precio; ?></td>
                                <td><?php echo $Importe?></td>
                                <td><a href="index.php?editar=<?php echo $id; ?>">Eliminar</th>
                            </tr>
                    </tbody>
                    
                <?php } ?>




            </table>

        </article>

        <!--Píe de Pagina-->
        <footer class="footer">
            <p>$999.99</p>
            <button class="btnCobrar">Cobrar</button>
        </footer>

    </body>

</html>