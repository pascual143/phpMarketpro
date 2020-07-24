<?php

try {

    $bd = new PDO("mysql:host=localhost;dbname=marketpro.sql;port=8889","marketpro","password");
} catch (Exception $e){
    echo "No se ha podido conectar";
    exit;
}
// hacer la query, consulta
try {
    $resultado = $bd->query("SELECT sku, nombre, introDescripcion, descripcion, img, precio,precioOferta, moneda FROM ofertas ORDER BY sku");
} catch(Exception $e){
    echo "La consulta no se ha realizado";
    exit;
}
// PARA QUE SEA DEVUELTO EL CONTENIDO
$ofertas = $resultado->fetchAll(PDO::FETCH_ASSOC);
var_dump($ofertas);
?>