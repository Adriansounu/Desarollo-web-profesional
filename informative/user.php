<?php
session_start();

// Verificar si $_SESSION['nombre'] está definida
if(isset($_SESSION['nombre'])) {
    // Acceder a $_SESSION['nombre']
    $nombre = $_SESSION['nombre'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>MariaDB - Iniciar Sesión</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <style>
        body {
            background-color: rgb(0, 0, 0);
            color: white;
            margin: 0;
            padding: 0;
            font-family: 'Montserrat', 'Roboto Slab', sans-serif;
        }
        .container-cards {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            width: 90%;
            margin: 0 auto;
            padding: 200px 0;
        }
        .card {
            background-color: #333;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            margin: 10px;
            width: calc(33.333% - 20px);
            overflow: hidden;
        }
        .card img {
            width: 100%;
            height: auto;
        }
        .card-content {
            padding: 15px;
        }
        @media (max-width: 768px) {
            .card {
                width: calc(50% - 20px);
            }
        }
        @media (max-width: 480px) {
            .card {
                width: calc(100% - 20px);
            }
            .navbar {
                padding: 1rem;
            }
            .container-form {
                padding-top: 80px; /* Más espacio para el menú en móviles */
            }
        }
    </style>
</head>
<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top"><h2>MariaDB</h2></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menú
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <!-- Mostrar nombre y apellido del usuario -->
                    <li class="nav-item">
                        <a class="nav-link" href="#">Bienvenido de Nuevo, <?php echo htmlspecialchars($_SESSION['nombre']); ?></a>
                    </li>
                    <!-- Cerrar sesión -->
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Cerrar sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Fin de Navigation -->

    <!-- Contenedor de cards -->
    <!-- Portfolio Grid-->
    <section class="page-section bg-dark" id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Productos</h2>
                <h3 class="section-subheading text-muted"></h3>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 1-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/sudadera.jpg" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Sudaderas</div>
                            <div class="portfolio-caption-subheading text-muted">"Nuestras sudaderas son perfectas para cualquier ocasión. Confeccionadas con materiales de alta calidad, ofrecen comodidad y estilo en cada uso. Disponibles en una variedad de colores y diseños, son ideales para mantenerte abrigado y a la moda."</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 2-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/tennis.jpg" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Calzado</div>
                            <div class="portfolio-caption-subheading text-muted">"Explora nuestra colección de calzado, diseñada para brindar confort y durabilidad. Desde elegantes zapatos de vestir hasta cómodas
                            opciones casuales, tenemos el par perfecto para cada ocasión."</div>
</div>
</div>
</div>
<div class="col-lg-4 col-sm-6 mb-4">
<!-- Portfolio item 3-->
<div class="portfolio-item">
<a class="portfolio-link" data-bs-toggle="modal" href="#">
<div class="portfolio-hover">
<div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
</div>
<img class="img-fluid" src="assets/img/portfolio/camiseta.jpg" alt="..." />
</a>
<div class="portfolio-caption">
<div class="portfolio-caption-heading">Camisetas</div>
<div class="portfolio-caption-subheading text-muted">"Nuestras camisetas combinan estilo y comodidad, ideales para cualquier guardarropa. Confeccionadas con tejidos suaves y transpirables, están disponibles en una amplia gama de colores y diseños para todos los gustos."</div>
</div>
</div>
</div>
<div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
<!-- Portfolio item 4-->
<div class="portfolio-item">
<a class="portfolio-link" data-bs-toggle="modal" href="#">
<div class="portfolio-hover">
<div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
</div>
<img class="img-fluid" src="assets/img/portfolio/deportivo.jpg" alt="..." />
</a>
<div class="portfolio-caption">
<div class="portfolio-caption-heading">Calzado Deportivo</div>
<div class="portfolio-caption-subheading text-muted">"Descubre nuestro calzado deportivo, diseñado para mejorar tu rendimiento y ofrecer el máximo confort. Con tecnología avanzada y materiales resistentes, son perfectos para cualquier actividad física."</div>
</div>
</div>
</div>
<div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
<!-- Portfolio item 5-->
<div class="portfolio-item">
<a class="portfolio-link" data-bs-toggle="modal" href="#">
<div class="portfolio-hover">
<div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
</div>
<img class="img-fluid" src="assets/img/portfolio/camisa.jpg" alt="..." />
</a>
<div class="portfolio-caption">
<div class="portfolio-caption-heading">Camisas</div>
<div class="portfolio-caption-subheading text-muted">"Nuestras camisas destacan por su elegancia y comodidad. Perfectas para cualquier ocasión, están confeccionadas con materiales de alta calidad que garantizan un ajuste perfecto y un estilo impecable."</div>
</div>
</div>
</div>
<div class="col-lg-4 col-sm-6">
<!-- Portfolio item 6-->
<div class="portfolio-item">
<a class="portfolio-link" data-bs-toggle="modal" href="#">
<div class="portfolio-hover">
<div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
</div>
<img class="img-fluid" src="assets/img/portfolio/gorra.jpg" alt="..." />
</a>
<div class="portfolio-caption">
<div class="portfolio-caption-heading">Gorras</div>
<div class="portfolio-caption-subheading text-muted">"Nuestras gorras ofrecen el equilibrio perfecto entre estilo y funcionalidad. Con diseños modernos y materiales duraderos, son el accesorio ideal para completar cualquier atuendo."</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Fin de contenedor de cards -->

</body>
</html>
<?php
} // Cierre del if
?>