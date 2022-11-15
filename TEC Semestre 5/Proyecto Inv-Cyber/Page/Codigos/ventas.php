<form action="" method="POST">
    <div class="Search-Menu">
        <p>Clave del producto:</p>
        <input name="EnterVenta" type="text" id="TextBoxSearch"></input>
        <input name="EnterSearch" type="submit" value="Enter" id="BtnEnter"></input>
    </div>

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
                $Busqueda = "SELECT * FROM Producto WHERE Codigo='$CodeBusqueda'";
                $EjecutarBusqueda = sqlsrv_query($conn,$Busqueda);


                while($FilaBusqueda = sqlsrv_fetch_array($EjecutarBusqueda)){
                    $ID = $FilaBusqueda['ID_Producto'];
                    $Codigo = $FilaBusqueda['Codigo'];
                    $Descripcion = $FilaBusqueda['Descripcion'];
                    $Precio = $FilaBusqueda['Precio'];
                    $Cantidad = $FilaBusqueda['Cantidad'];

                    $VentaInsertar = "INSERT INTO Carrito(ID_Producto,Codigo,Descripcion,Cantidad,Precio,Estado) VALUES('$ID','$Codigo','$Descripcion','1','$Precio','Activo')";
                    $VentaEjecutar = sqlsrv_query($conn,$VentaInsertar);
            
        ?>

        <tbody>
            <th><?php echo $ID ?></th>
            <th><?php echo $Codigo ?></th>
            <th><?php echo $Descripcion ?></th>
            <th><?php echo $Precio ?></th>
            <th><?php echo $Cantidad ?></th>
        </tbody>

        <?php }
                
                
            } ?>
    </table>


    <table Class="Venta">
        <thead>
            <th>Clave</th>
            <th>Descripción</th>
            <th>Cantidad</th>
            <th>Precio</th>
            <th>Importe</th>
            <th>Acción</th>
        </thead>
        <?php
            $Subtotal = 0;
            $ConsultaVenta = "SELECT * FROM Carrito";
            $EjecturarVenta = sqlsrv_query($conn,$ConsultaVenta);

            while($FilaVenta = sqlsrv_fetch_array($EjecturarVenta)){
                    $IDV = $FilaVenta['ID_Producto'];
                    $CodigoV = $FilaVenta['Codigo'];
                    $DescripcionV = $FilaVenta['Descripcion'];
                    $CantidadV = $FilaVenta['Cantidad'];
                    $PrecioV = $FilaVenta['Precio'];
                    
                    $ImporteV = $CantidadV * $PrecioV;

                    $Subtotal += $ImporteV; 
            
        ?>    
        <tbody>
            <th><?php echo $CodigoV ?> </th>
            <th><?php echo $DescripcionV ?></th>
            <th><?php echo $CantidadV ?></th>
            <th><?php echo $PrecioV ?></th>
            <th><?php echo $ImporteV?></th>
            <th><a href="index.php?Borrar=<?php echo $IDV; ?>">Eliminar</th>
        </tbody>

        <?php } ?>
    </table>


</form>
    

<?php
    
    if(isset($_GET['Borrar'])){
        $Borrar = "DELETE FROM Carrito WHERE ID_Producto='$IDV'";
        $EjecutarBorrar = sqlsrv_query($conn,$Borrar);

        if($EjecutarBorrar){
            echo 'Producto borrado de ventas';
        }
    }



?>