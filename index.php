<?php include('inc/funciones.php'); ?>
<?php 
$tituloPagina = "Inicio Marketpro";
$pagina = "inicio";

include('inc/header.php'); ?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Bienvenidos al Marketpro</h1>
        <p>Tu tienda Online de confianza donde conseguir los mejores precios</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Ver mas &raquo;</a></p>
      </div>
    </div>
    <!-- DESTACADOS  -->
    <div class="container">
      <div class="row">
      <?php 
      $x=1;
      $ofertas;
      while($x<=3 AND list($oferta_id, $oferta) = each($ofertas)){
        echo portada($oferta_id, $oferta);
        $x++;
      }?>
      </div>

      <hr>

    </div> <!-- /DESTACADOS --> 

<?php include('inc/footer.php'); ?>