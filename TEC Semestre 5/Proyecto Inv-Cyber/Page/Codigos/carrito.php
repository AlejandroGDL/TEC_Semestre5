<?php 

    if(isset($_SESSION['Carrito'])){
        $micarrito = $_SESSION['Carrito'];
        if(isset($_POST['Producto'])){
            $Codigo = $_POST['Code'];
            $Descripcion = $_POST['Descripcion'];
            $Cantidad = $_POST['Cantidad'];
            $Precio = $_POST['Precio'];
        }

        $_SESSION['Carrito']=$micarrito;
    }

    if(isset($_POST['Enter'])){

    }

    header("Location: ".$_SERVER['HTTP_REFERER'. ""]);
?>