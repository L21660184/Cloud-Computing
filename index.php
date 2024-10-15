<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página web dinámica con animaciones</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Mi Página</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="#inicio">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#servicios">Servicios</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contacto">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Sección Inicio -->
    <section id="inicio" class="text-center text-light d-flex align-items-center justify-content-center" style="height: 100vh; background-color: #007bff;">
        <div>
            <h1 class="display-3 animate__animated animate__fadeInDown">¡Bienvenido a Mi Página!</h1>
            <p class="lead">Desarrollada con PHP, Bootstrap y animaciones</p>
            <a href="#servicios" class="btn btn-light btn-lg mt-4">Ver Servicios</a>
        </div>
    </section>

    <!-- Sección Servicios -->
    <section id="servicios" class="py-5 text-center">
        <div class="container">
            <h2 class="mb-4">Nuestros Servicios</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card shadow-lg p-3 mb-5 bg-body rounded animate__animated animate__zoomIn">
                        <img src="https://via.placeholder.com/150" class="card-img-top" alt="Servicio 1">
                        <div class="card-body">
                            <h5 class="card-title">Desarrollo Web</h5>
                            <p class="card-text">Creamos sitios web modernos y responsivos.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-lg p-3 mb-5 bg-body rounded animate__animated animate__zoomIn">
                        <img src="https://via.placeholder.com/150" class="card-img-top" alt="Servicio 2">
                        <div class="card-body">
                            <h5 class="card-title">Aplicaciones Móviles</h5>
                            <p class="card-text">Desarrollo de apps nativas y multiplataforma.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-lg p-3 mb-5 bg-body rounded animate__animated animate__zoomIn">
                        <img src="https://via.placeholder.com/150" class="card-img-top" alt="Servicio 3">
                        <div class="card-body">
                            <h5 class="card-title">Marketing Digital</h5>
                            <p class="card-text">Potencia tu marca con estrategias digitales efectivas.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección Contacto -->
    <section id="contacto" class="py-5 bg-light text-center">
        <div class="container">
            <h2 class="mb-4">Contáctanos</h2>
            <p>Envíanos un mensaje y nos pondremos en contacto contigo.</p>
            <form action="#" method="post" class="w-50 mx-auto">
                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Nombre" name="nombre" required>
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control" placeholder="Correo electrónico" name="email" required>
                </div>
                <div class="mb-3">
                    <textarea class="form-control" placeholder="Mensaje" rows="4" name="mensaje" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-light text-center py-3">
        <p>&copy; 2024 Mi Página. Todos los derechos reservados.</p>
    </footer>

    <!-- Bootstrap JS and Custom Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
