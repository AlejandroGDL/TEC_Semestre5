<?php 
    if(isset($_POST['Insert'])){
        $Codigo = $_POST['Code'];
        $Descripcion = $_POST['Desc'];
        $Precio = $_POST['Price'];
        $Cantidad = $_POST['Count'];

        $insertar = "INSERT INTO Producto(Codigo,Descripcion,Cantidad,Precio,Estado) VALUES('$Codigo','$Descripcion','$Precio','$Cantidad','Activo')";
        $ejecutar = sqlsrv_query($conn,$insertar);

        if($ejecutar){
            echo '<script type="text/javascript"> window.onload = function () { alert("Producto Insertado Correctamente"); } </script>'; 
            //echo "<script>alert('Producto Insertado Correctamente');</script>";
        } else{
            echo "<script>alert('ERROR al insertar el producto');</script>";
        }
    }
?>