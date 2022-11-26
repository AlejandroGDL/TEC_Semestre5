<form action="" method="POST" class="Modal_Form">
    <section class="ModalContainer">
        <p class="Titulo">Cobrar</p>

        <div class="Contenedor" id="SubTotal">
            <p>Sub total:</p>
            <p>$<?php echo $Subtotal ?></p>
        </div>

        <div class="Contenedor" id="Descuento">
            <p>Descuento %:</p>
            <input name="Descuento" placeholder="0%" type="number" value=""></input>
        </div>
        <input name="Desc" id="BtnDesc" type="submit" value="Aplicar Descuento"></input>
        <?php 
 
            if(isset($_POST['Desc'])){
                $Desc = $_POST['Descuento'];

                //Calcular el descuento
                $DescT = ($Subtotal * $Desc) / 100;
                $Total = $Subtotal - $DescT;
            }

            if(empty($Desc)){
                $Total = $Subtotal;
            }

        ?>
        <a id="DivisorModal"></a>

        <div class="Contenedor" id="Total">
            <b><p>Total:</p></b>
            <b><p>$<?php echo number_format($Total,2)  ?></p></b>
        </div>

        <div class="Buttons">
            <input name="Check" id="BtnCheckIn" type="submit" value="Cobrar" onclick="windows.location.reload();"></input>
            <a id="BtnCancel">Cancelar</a>
        </div>
        
        <?php
        if(isset($_POST['Check'])){
            $CobrarEjecutar = "DELETE FROM Carrito";
            $CobrarEjecutarSQL = sqlsrv_query($conn,$CobrarEjecutar);
            sleep(1);
        ?>
        <meta http-equiv="refresh" URL="<?php echo $page; ?>" >
        <?php } ?>

        ?>
    </section>
</form>
