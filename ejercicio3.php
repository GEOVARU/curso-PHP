<?php
//Recibi informacion del formulario por metodo POST
if ($_GET) {
    $nombre = $_GET['nombre'];
    echo "Hola " . $nombre;
}
?>