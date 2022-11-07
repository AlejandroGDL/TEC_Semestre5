<?php
    if(isset($_POST['Actu'])){
        $ID = $_POST['ID'];
        $Code = $_POST['Code'];
        $Desc = $_POST['Desc'];
        $Price = $_POST['Price'];
        $Count = $_POST['Count'];

        $Editar = "UPDATE Producto SET Codigo='$Code', Descripcion='$Desc', Cantidad='$Count', Precio='$Price' WHERE ID_Producto='$ID'";
        $ejecutar = sqlsrv_query($conn,$Editar);

        if($ejecutar){
            echo "<sript>Datos Actualizados Correctamente! </sript>";
        }
    }
?>