<?php 
    include ('Codigos/conexion.php');

    function ReloadCarrito(){
    ?>
    <table class="table table-dark table-striped">
        <thead >
            <tr>
                <th>Clave</th>
                <th>Descripción</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Importe</th>
                <th>Acción</th>
            </tr>
        </thead>

        <?php
        //Recargar Tabla
        $ConsultaCarrito = "SELECT * FROM Carrito";
        $EjecutarCarrito = sqlsrv_query($conn,$ConsultaCarrito);
        //Generar lista carrito
        $i = 0;
        while($filaC = sqlsrv_fetch_array($EjecutarCarrito)){
            $Codigo = $filaC['Codigo'];
            $Descripcion = $filaC['Descripcion'];
            $Cantidad = $filaC['Cantidad'];
            $Precio = $filaC['Precio'];
            $i++;
                                  
            //Calcular Importe
            $Importe = $Cantidad * $Precio;
        ?>

        <tbody>
            <tr>
                <td><?php echo $Codigo ?></td>
                <td><?php echo $Descripcion ?></td>
                <td><?php echo $Cantidad ?></td>
                <td><?php echo $Precio ?></td>
                <td><?php echo $Importe ?></td>
                <td><a href="index.php?editar=<?php echo $id; ?>">Eliminar</td>
            </tr>
        
        </tbody>

        <?php } ?>

    </table>
    
<?php } ?>