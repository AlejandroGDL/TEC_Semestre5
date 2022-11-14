<table>
    <!--Encabezado -->
    <thead>
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
            <td>$ <?php echo $Precio; ?></td>
            <td><?php echo $Importe?></td>
            <td><a href="index.php?editar=<?php echo $id; ?>">Eliminar</th>
        </tr>
    </tbody>
                    
<?php } ?>

</table>