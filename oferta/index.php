<?php require_once('../inc/conf.php'); ?>
<?php include(ROOT.'/inc/funciones.php'); ?>
<?php 
if (isset($_GET ["id"])){
    $oferta_id = $_GET["id"];
        if (isset($ofertas[$oferta_id])){
            $oferta = $ofertas[$oferta_id];
        }
}else{
    header("Location: ofertas.php");
    exit();
}

$tituloPagina = "Oferta Destacada";
$pagina = "oferta";

include(ROOT.'/inc/header.php'); ?>
<!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <div class="row">
            <div class="clo-md-8">
                <p> <img src="<?php echo $oferta["imagen"]; ?>" alt="<?php echo $oferta["nombre"]; ?>"><p>
                <h2><?php echo $oferta["nombre"]; ?></h2>
                <p><?php echo $oferta["descripcion"]; ?></p>
                </div>

            <div class="col-md-4">
                <p><a class="btn btn-danger" href="#">Comprar: Antes <?php echo $oferta["precio"] ?>
                    <strong> Ahora <?php echo $oferta["precioOferta"]; ?></strong></a> </p> 
            </div>
        </div>
        </div>


<?php include(ROOT.'/inc/footer.php'); ?>