<?php
if ($_POST['accion'] == 'agregar') {
    $categoria = $_POST['categoria'];
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $marca = $_POST['marca'];
    $cantidad= $_POST['cantidad'];
    $imagen=$_POST['imagen'];

    echo json_encode(array('mensaje' => $nombre . ' de la marca ' . $marca . ' con costo de $' . $precio . ' se registro existosamente'));
}
if ($_POST['accion'] == 'eliminar') {
    $nombreM = $_POST['nombreM'];

    echo json_encode(array('mensaje' => $nombreM . ' ha sido eliminado'));
}

