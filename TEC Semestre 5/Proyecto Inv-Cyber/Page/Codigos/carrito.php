<table class="OCULTAR">
    <thead>
        <tr>
            <th>ID</th>
            <th>Codigo</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Cantidad</th>
        </tr>
    </thead>

    <?php
        //Variables INSERT Ventas
        $ID = "";
        $Codigo = "";
        $Descripcion = "";
        $Precio = "";
        $Cantidad = "";

        //Listener Click ENTER
        if(isset($_POST['SearchData'])){
            $CodeS = $_POST['CodeS'];
            $Buscar = "SELECT * FROM Producto Where Codigo='$CodeS'";
            $EjecutarSearch = sqlsrv_query($conn,$Buscar);
  
            while($filaSearch = sqlsrv_fetch_array($EjecutarSearch)){
                $ID = $filaSearch['ID_Producto'];
                $Codigo = $filaSearch['Codigo'];
                $Descripcion = $filaSearch['Descripcion'];
                $Precio = $filaSearch['Precio'];
                $Cantidad = $filaSearch['Cantidad'];
            
        
    ?>

    <tbody>
        <th><?php echo $ID?></th>
        <th><?php echo $Codigo?></th>
        <th><?php echo $Descripcion?></th>
        <th><?php echo $Precio?></th>
        <th><?php echo $Cantidad?></th>
    </tbody>
             
    <?php 
            
        } 
            include ('Codigos/Functions.php');
            ReloadCarrito();
            $VentaInsertar = "INSERT INTO Carrito(ID_Producto,Codigo,Descripcion,Cantidad,Precio,Estado) VALUES('$ID','$Codigo','$Descripcion','$Precio','1','Activo')";
            $VentaEjecutar = sqlsrv_query($conn,$VentaInsertar);
        
        } ?>

</table>

<?php
/*
    if(isset($_POST['SearchData'])){
            $IDV = $_POST['IDVenta'];
            $CodigoV = $_POST['CodeVenta'];
            $DescripcionV = $_POST['DescVenta'];
            $PrecioV = $_POST['PriceVenta'];

                   
    }
    */
?>