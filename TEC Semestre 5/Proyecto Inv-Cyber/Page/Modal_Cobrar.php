<form action="" method="POST" class="Modal_Form">
    <section class="ModalContainer">
        <p class="Titulo">Cobrar</p>

        <div class="Contenedor" id="SubTotal">
            <p>Sub total:</p>
            <p>999.99<?php ?></p>
        </div>

        <div class="Contenedor" id="Descuento">
            <p>Descuento %:</p>
            <input placeholder="0%" type="text" value="<?php ?>"></input>
        </div>

        <a id="DivisorModal"></a>

        <div class="Contenedor" id="Total">
            <p>Total:</p>
            <p><?php ?>999.99</p>
        </div>

        <div class="Buttons">
            <a name="Check" id="BtnCheckIn">Cobrar</a>
            <a id="BtnCancel">Cancelar</a>
        </div>
        
    </section>
</form>
