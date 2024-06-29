<?php
/*
Template Name: Detalles del Proyecto2
*/
?>
    <?php
            // Obtener los campos personalizados usando ACF
            $nombre_del_proyecto = get_field('nombre_del_proyecto');
            $descripcion_del_proyecto = get_field('descripcion_del_proyecto');
            $imagen_del_proyecto = get_field('imagen_del_proyecto');
    ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viajes Chile</title>
    <!-- Bootstrap 5.1.3-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?> /assets/css/style.css">
</head>
<body>
    <!-- NavBar -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top nav1">
      <div class="container">
          <img src="<?php echo get_template_directory_uri(); ?> /assets/img/viajes.svg" alt="logonav" class="logo mb-2">
          <h4 class="ms-2 text-white">Viajes Chile</h4>
          
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
              <a class="nav-link" aria-current="page" href="#">Inicio</a>
              <a class="nav-link" href="#quienessomos">Quiénes Somos</a>
              <a class="nav-link" href="#destacados">Destacados</a>
              <a class="nav-link" href="#contacto">Contacto</a>
            </div>
          </div>
      </div>
    </nav>

<!-- Carrusel -->
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/carousel1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/carousel2.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/carousel3.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
<!-- Section de parrafos -->
  <section id="quienessomos" class= "container">
    <div class="row text-white">
      <h2 class="text-center my-3">¿Quiénes Somos?</h2>
      <hr class="text-info ">
        <div class="col-lg-4 col-sm-12">
            <div class="container-fluid bg-info text-center">
              <i class="fas fa-plane icons"></i>

            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In interdum tellus non ipsum scelerisque, in feugiat erat rhoncus. Vestibulum egestas nulla elit, ac condimentum metus finibus vitae. Pellentesque sit amet turpis vel dui scelerisque aliquet sed eget nisl. Donec velit ex, rutrum ornare magna in, iaculis convallis arcu. In in fermentum lacus. Aenean rutrum urna ac pretium mollis. Cras posuere ac metus sit amet fermentumLorem ipsum dolor sit amet, consectetur adipiscing elit. In interdum tellus non ipsum scelerisque, in feugiat erat rhoncus. Vestibulum egestas nulla elit, ac condimentum metus finibus vitae. Pellentesque sit amet turpis vel dui scelerisque aliquet sed eget nisl. Donec velit ex, rutrum ornare magna in, iaculis convallis arcu. In in fermentum lacus. Aenean rutrum urna ac pretium mollis. Cras posuere ac metus sit amet fermentum.o</p>
        </div>
        <div class="col-lg-4 col-sm-12">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In interdum tellus non ipsum scelerisque, in feugiat erat rhoncus. Vestibulum egestas nulla elit, ac condimentum metus finibus vitae. Pellentesque sit amet turpis vel dui scelerisque aliquet sed eget nisl. Donec velit ex, rutrum ornare magna in, iaculis convallis arcu. In in fermentum lacus. Aenean rutrum urna ac pretium mollis. Cras posuere ac metus sit amet fermentum.Lorem ipsum dolor sit amet, consectetur adipiscing elit. In interdum tellus non ipsum scelerisque, in feugiat erat rhoncus. Vestibulum egestas nulla elit, ac condimentum metus finibus vitae. Pellentesque sit amet turpis vel dui scelerisque aliquet sed eget nisl. Donec velit ex, rutrum ornare magna in, iaculis convallis arcu. In in fermentum lacus. Aenean rutrum urna ac pretium mollis. Cras posuere ac metus sit amet fermentum.</p>
            <div class="container-fluid bg-info text-center">
              <i class="fas fa-mountain icons"></i>

            </div>
        </div>
        <div class="col-lg-4 col-sm-12">
          <div class="container-fluid bg-info text-center">
            <i class="fas fa-route icons"></i>

          </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In interdum tellus non ipsum scelerisque, in feugiat erat rhoncus. Vestibulum egestas nulla elit, ac condimentum metus finibus vitae. Pellentesque sit amet turpis vel dui scelerisque aliquet sed eget nisl. Donec velit ex, rutrum ornare magna in, iaculis convallis arcu. In in fermentum lacus. Aenean rutrum urna ac pretium mollis. Cras posuere ac metus sit amet fermentumLorem ipsum dolor sit amet, consectetur adipiscing elit. In interdum tellus non ipsum scelerisque, in feugiat erat rhoncus. Vestibulum egestas nulla elit, ac condimentum metus finibus vitae. Pellentesque sit amet turpis vel dui scelerisque aliquet sed eget nisl. Donec velit ex, rutrum ornare magna in, iaculis convallis arcu. In in fermentum lacus. Aenean rutrum urna ac pretium mollis. Cras posuere ac metus sit amet fermentum.o</p>
      </div>
      </div>
        <hr>
    </div>
</section>
<!-- Section de cards -->
<section id="destacados" class = "container">
  <div class = "text-center text-white marginsections">
    <h2>Destacados</h2>
    <hr>
  </div>
  <div class="row text-white" >

    <div class = "col-lg-3">
      <div class="card bg-info" style="width: 16.5rem;">
        <img src="<?php echo esc_url($imagen_del_proyecto['url']); ?>" class="cards card-img-top" alt="card1">
        <div class="card-body">
          <h5 class ="card-text"><?php echo esc_html($nombre_del_proyecto); ?> </h5>
          <p class="card-text"><?php echo esc_html($descripcion_del_proyecto); ?></p>
        </div>
      </div>
    </div>

    <div class = "col-lg-3">
      <div class="card bg-info" style="width: 16.5rem;">
        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/card2.jpg" class="cards card-img-top" alt="card2">
        <div class="card-body">
          <h5 class ="card-text">Lorem ipsum dolor sit amet </h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
   </div>

   <div class = "col-lg-3">
      <div class="card bg-info" style="width: 16.5rem;">
        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/card3.jpg" class="cards card-img-top" alt="card3">
        <div class="card-body">
          <h5 class ="card-text">Consectetur adipisicing elit</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
   </div>
   <div class = "col-lg-3">
      <div class="card bg-info" style="width: 16.5rem;">
        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/card4.jpg" class="cards card-img-top" alt="card4">
        <div class="card-body">
          <h5 class ="card-text">Lorem ipsum dolor sit amet </h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </div>

  </div>
</section>
<!-- Section de form -->
<section id="contacto"class ="container">
  <h2 class="text-center text-white marginsections">Contacto</h2>
  <hr class="bg-info">
  <div data-tf-widget="ayEnYjBe" data-tf-iframe-props="title=TypeformPrueba" data-tf-medium="snippet" style="width:100%;height:400px;"></div><script src="//embed.typeform.com/next/embed.js"></script>
</section>
<!-- Footer -->
<footer class ="container-fluid bg-info row mt-4">
  <div class="col">
  <h4 class="text-white marginh4 pt-1">VIAJES CHILE</h4>
  </div>
  <div class="col text-white iconsfooter pt-1">
    <a href="https://github.com/" class="text-decoration-none text-white" data-bs-toggle="tooltip" data-bs-placement="top" title="Github"><i class="fab fa-2x ms-2 fa-github-square"></i></a>
    <a href="https://cl.linkedin.com/" class="text-decoration-none text-white" data-bs-toggle="tooltip" data-bs-placement="top" title="LinkedIn"><i class="fab fa-2x ms-2 fa-linkedin"></i></a>
    <a href="https://www.twitter.com" class="text-decoration-none text-white" data-bs-toggle="tooltip" data-bs-placement="top" title="Twitter"><i class="fab fa-2x ms-2 fa-twitter-square"></i></a>
    <a href="https://www.facebook.com" class="text-decoration-none text-white" data-bs-toggle="tooltip" data-bs-placement="top" title="Facebook"><i class="fab fa-2x ms-2 fa-facebook-square"></i></a>
  </div>
</footer>
 <!--Bootstrap Bundle  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri(); ?> /assets/js/main.js"></script>
</body>
</html>