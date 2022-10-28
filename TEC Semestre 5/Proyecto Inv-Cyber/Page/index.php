<!--Conexion Base de datos-->
<?php
$serverName = "ANDROLAPTOP\SQLEXPRESS";
$connectionInfo = array( "Database"=>"Proyecto", "UID"=>"UsernameCon", "PWD"=>"Alejandro1298");
$conn = sqlsrv_connect( $serverName, $connectionInfo);


/*$consulta=$conn->prepare("SELECT * FROM Producto");
$consulta->execute();
$datos=$consulta->fetchAll(PDO::FETCH_ASSOC);
var_dump($datos); 
*/

$sql = 'SELECT * FROM Producto';
$resultado = sqlsrv_query($conn,$sql);

/* VERIFICAR CONEXIÓN 
if( $conn ) {
     echo "Connection established.<br />";
}else{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
}*/

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

                    $i = 0;

                    while($fila = sqlsrv_fetch_array($ejecutar)){
                        $Codigo = $fila['Codigo'];
                        $Descripcion = $fila['Descripcion'];
                        $Cantidad = $fila['Cantidad'];
                        $Precio = $fila['Precio'];
                        $i++;
                    }
                    
                    //Calcular Importe
                    $Importe = $Cantidad * $Precio;
                ?>


                <!--Cuerpo Tabla-->
                <tbody>
                    <div class="Producto">
                        <th><?php echo $Codigo; ?></th>
                        <th><?php echo $Descripcion; ?></th>
                        <th><?php echo $Cantidad; ?></th>
                        <th><?php echo $Precio; ?></th>
                        <th><?php echo $Importe?></th>
                        <th><a href="index.php?editar=<?php echo $id; ?>">Eliminar</th>
                    </div>
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