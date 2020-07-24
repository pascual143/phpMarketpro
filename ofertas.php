<?php include('inc/funciones.php'); ?>

<?php 
$tituloPagina = "Ofertas Destacadas";
$pagina = "ofertas";

include('inc/header.php'); ?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Bienvenidos al Marketpro</h1>
        <p>Tu tienda Online de confianza donde conseguir los mejores precios</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Ver mas &raquo;</a></p>
      </div>
    </div>

<!-- OFERTAS -->
<div class="container">
      <div class="row">
        <?php foreach ($ofertas as $oferta_id => $oferta) {          
          echo portada($oferta_id, $oferta);        
        } ?>
        
      </div>

      <hr>

    </div>
<!-- OFERTAS -->

<?php include('inc/footer.php'); ?>