<form action="Boton.php">
    <input type="text" name="txt" />
    <input type="Enviar" name="insertar" value="insertar" onclick="insertar()" />
    <input type="Enviar" name="seleccionar" value="seleccionar" onclick="seleccionar()" />
</form>

<?php
    function seleccionar(){
        echo "click en el boton";
    }
    function insertar(){
        echo "Click en el boton";
    }
?>