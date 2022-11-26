<form class="VentaTable" action="" method="POST">
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
        $NewCount2 = $CantidadV + 1;
        $UpdateProduct2 = "UPDATE Producto SET Cantidad='$NewCount2' WHERE ID_Producto='$IDV'";
        $UpdateVEjecutar2 = sqlsrv_query($conn,$UpdateProduct2);
        
        $Borrar = "DELETE FROM Carrito WHERE ID_Producto='$IDV'";
        $EjecutarBorrar = sqlsrv_query($conn,$Borrar);

        if($EjecutarBorrar){
            echo 'Producto borrado de ventas';
        }
    }
?>
