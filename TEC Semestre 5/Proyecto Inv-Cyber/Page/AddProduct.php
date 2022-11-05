<!--Conexion Base de datos-->
<?php
$serverName = "ANDROLAPTOP\SQLEXPRESS"; //Cambiar
$connectionInfo = array( "Database"=>"Proyecto", "UID"=>"UsernameCon", "PWD"=>"Alejandro1298");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

//Verificar Conexión
/* 
if ($conn){
    echo "Conexión EXITOSA";
} else{
    echo "MALA";
}*/
?>

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
                <p>Código del producto:</p>
                <input name="Code" type="text" autofocus placeholder="Ej. Jitomate"></input>

                <p>Descripción del producto:</p>
                <input name="Desc" type="text"></input>

                <p>Precio:</p>
                <input name="Price" type="text"></input>

                <p>Cantidad del inventario:</p>
                <input name="Count" type="text"></input>

                <input type="submit" name="Insert" class="btnAgregar" value="Agregar"></input>

            </form>

            <a id="Sep2"></a>
            <?php 
            if(isset($_POST['Insert'])){
                $Codigo = $_POST['Code'];
                $Descripcion = $_POST['Desc'];
                $Precio = $_POST['Price'];
                $Cantidad = $_POST['Count'];

                $insertar = "INSERT INTO Producto(Codigo,Descripcion,Cantidad,Precio,Estado) VALUES('$Codigo','$Descripcion','$Precio','$Cantidad','Activo')";
                $ejecutar = sqlsrv_query($conn,$insertar);

                if($ejecutar){
                    echo "<script>alert('Producto Insertado Correctamente');</script>";
                } else{
                    echo "<script>alert('ERROR al insertar el producto');</script>";
                }
            }
        ?>

        </article>

        <!--Píe de Pagina-->
        <footer class="footer">
            
            <!-- <button name="Insert" type="submit" class="btnAgregar"><img src="Icons/AddNew_White.png"></img>Crear</button> -->
            <h6>Hola</h6>
        </footer>
        


    </body>

</html>