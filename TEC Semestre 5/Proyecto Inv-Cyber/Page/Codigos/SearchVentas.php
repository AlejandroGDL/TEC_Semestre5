<form action="" method="POST">
    <div class="Search-Menu">
        <p>Clave del producto:</p>
        <input name="EnterVenta" type="text" id="TextBoxSearch"></input>
        <input name="EnterSearch" type="submit" value="Enter" id="BtnEnter"></input>
        <a id="BtnProductos" href="Modal_Productos.php">Productos</a>
        <!-- <a id="BTNNOTIFICACION">Notificacion</a> -->
    </div>

    <!-- Tabla para realizar las busquedad 'OCULTA'-->
    <table class="BUSQUEDA">
        <thead>
            <th>ID</th>
            <th>Código</th>
            <th>Descripción</th>
            <th>Cantidad</th>
            <th>Precio</th>
        </thead>

        <?php 

            
            if(isset($_POST['EnterSearch'])){
                $CodeBusqueda = $_POST['EnterVenta'];

                //Verificar si esta vacia
                if(empty($CodeBusqueda)){
                    echo "Introduce el código de barras";
                } 
                 //No esta vacia
                else{
                    $Busqueda = "SELECT * FROM Producto WHERE Codigo='$CodeBusqueda'";
                    $EjecutarBusqueda = sqlsrv_query($conn,$Busqueda);

                    while($FilaBusqueda = sqlsrv_fetch_array($EjecutarBusqueda)){
                        $ID = $FilaBusqueda['ID_Producto'];
                        $Codigo = $FilaBusqueda['Codigo'];
                        $Descripcion = $FilaBusqueda['Descripcion'];
                        $Precio = $FilaBusqueda['Precio'];
                        $Cantidad = $FilaBusqueda['Cantidad'];

                        //Nueva cantidad al agregar
                        $NewCount = $Cantidad - 1;

                        //Si el producto se termina
                        if($Cantidad <= 0){
                            echo "<sript> Producto sin inventario </sript>";
                        } else { //Producto con suficiente inventario
                            $UpdateProduct = "UPDATE Producto SET Cantidad='$NewCount' WHERE ID_Producto='$ID'";
                            $UpdateVEjecutar = sqlsrv_query($conn,$UpdateProduct);

                            $VentaInsertar = "INSERT INTO Carrito(ID_Producto,Codigo,Descripcion,Cantidad,Precio,Estado) VALUES('$ID','$Codigo','$Descripcion','1','$Precio','Activo')";
                            $VentaEjecutar = sqlsrv_query($conn,$VentaInsertar);
                        }

        ?>

        <tbody>
            <th><?php echo $ID ?></th>
            <th><?php echo $Codigo ?></th>
            <th><?php echo $Descripcion ?></th>
            <th><?php echo $Precio ?></th>
            <th><?php echo $Cantidad ?></th>
        </tbody>

        <?php
            } //Cerrar Llave Ciclo WHILE
            
            // Verificar si el producto existe
            if(empty($ID)){
               echo "Este producto no existe";
            }

            }
               
            } ?>
    </table>

</form>
    