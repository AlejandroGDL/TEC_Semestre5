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
            $Buscar = "SELECT * FROM Producto Where Codigo='$CodeS'";
            $EjecutarSearch = sqlsrv_query($conn,$Buscar);
  
            while($filaSearch = sqlsrv_fetch_array($EjecutarSearch)){
                $ID = $filaSearch['ID_Producto'];
                $Codigo = $filaSearch['Codigo'];
                $Descripcion = $filaSearch['Descripcion'];
                $Precio = $filaSearch['Precio'];
                $Cantidad = $filaSearch['Cantidad'];

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