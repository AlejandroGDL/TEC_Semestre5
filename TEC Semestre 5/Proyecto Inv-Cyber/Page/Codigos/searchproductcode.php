<table class="BUSQUEDA">
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
        $ID = "";
        $Codigo = "";
        $Descripcion = "";
        $Precio = "";
        $Cantidad = "";

        if(isset($_POST['SearchData'])){
            $CodeS = $_POST['CodeS'];
            $editar = "SELECT * FROM Producto Where Codigo='$CodeS'";
            $ejecutar = sqlsrv_query($conn,$editar);
  
            while($fila = sqlsrv_fetch_array($ejecutar)){
                $ID = $fila['ID_Producto'];
                $Codigo = $fila['Codigo'];
                $Descripcion = $fila['Descripcion'];
                $Precio = $fila['Precio'];
                $Cantidad = $fila['Cantidad'];

            /*//CAMPO VACIO
            if(empty($_POST['ID'])){
                
            }*/   
        

        
    ?>

    <tbody>
        <th><?php echo $ID?></th>
        <th><?php echo $Codigo?></th>
        <th><?php echo $Descripcion?></th>
        <th><?php echo $Precio?></th>
        <th><?php echo $Cantidad?></th>
    </tbody>

    <?php } } ?>

</table>