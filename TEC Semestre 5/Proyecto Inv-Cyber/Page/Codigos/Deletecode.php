<?php 
    if(isset($_POST['Delete'])){
        $ID = $_POST['ID_Producto'];

        $Borrar = "DELETE FROM Producto WHERE ID_Producto='$ID' ";
        $ejecutar = sqlsrv_query($conn,$Borrar);

        if($ejecutar){
            echo "<script>Producto eliminado correctamente</script>";
        }
    }
?>