<?php 

function portada($oferta_id, $oferta){

$salida = "";

    $salida = $salida . '<div class="col-md-4">';
    $salida = $salida . '<h2>' . $oferta["nombre"] . '</h2>';
    $salida = $salida . '<img src="' . $oferta["imagen"] .'" alt="
                        '. $oferta["nombre"] . '"class="img-rounded">';
    $salida = $salida . '<p>'. $oferta["introDescripcion"] . '</p>';
    $salida = $salida . '<p><a class="btn btn-danger" href="./oferta/index.php?id=' . $oferta_id .'"> Antes'. $oferta["precio"] . 
                        '<strong> Ahora '. $oferta["precioOferta"]. '</strong></a></p> </div>';

return $salida;

}

$ofertas = array();
$ofertas[001] = array(
  "nombre" => "SPA para 2",
  "introDescripcion" => "Vive un momento inolvidable",
  "descripcion" => "No te puedes perder esta fantastica oferta",
  "imagen" => "img/spa.jpg",
  "precio" => 389,
  "precioOferta" => 49
);
$ofertas[002] = array(
  "nombre" => "Ordenador",
  "introDescripcion" => "El mejor ordenador del mercado",
  "descripcion" => "4GB, pantalla 17'', maacBook Pro",
  "imagen" => "img/mcBook.jpg",
  "precio" => 1389,
  "precioOferta" => 1150
);
$ofertas[003] = array(
  "nombre" => "Tv",
  "introDescripcion" => "Television LG 49' ",
  "descripcion" => "Tv Lg Hd 49' con vision panorama de 1200 lumix",
  "imagen" => "img/tv.jpg",
  "precio" => 1580,
  "precioOferta" => 1250
);
$ofertas[004] = array(
  "nombre" => "Sansung Galaxy",
  "introDescripcion" => "Samsung Galaxy, con camara de ultima generacion",
  "descripcion" => "Telefono movil con camara de ultima generacion y 5G",
  "imagen" => "img/galaxy.jpg",
  "precio" => 600,
  "precioOferta" => 450
);

?>