<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Página Web</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 70px;
        }
        .hero {
            background-image: url('https://e7.pngegg.com/pngimages/469/491/png-clipart-network-chart-technology-technology-blue-electronics.png');
            background-size: cover;
            background-position: center;
            height: 400px;
            color: white;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .hero h1 {
            font-size: 4rem;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Mi Web</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#inicio">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#sobre-mi">Sobre mí</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#servicios">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contacto">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="inicio" class="hero">
        <div>
            <h1>Bienvenido a Mi Web</h1>
            <p>Un lugar para mostrar mis servicios y más</p>
        </div>
    </section>

    <!-- Sobre mí Section -->
    <section id="sobre-mi" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Sobre mí</h2>
            <div class="row">
                <div class="col-md-6">
                    <img src="https://e7.pngegg.com/pngimages/646/637/png-clipart-human-behavior-technology-technology-electronics-cartoon.png" alt="Sobre mí" class="img-fluid rounded">
                </div>
                <div class="col-md-6">
                    <p>Soy un profesional con experiencia en desarrollo web, apasionado por crear soluciones digitales que impacten de manera positiva. Mi objetivo es ayudarte a alcanzar tus metas tecnológicas.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Servicios Section -->
    <section id="servicios" class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Servicios</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card h-100">
                        <img src="https://png.pngtree.com/png-clipart/20210608/ourmid/pngtree-various-information-technology-cloud-computing-png-image_3426845.jpg" class="card-img-top" alt="Servicio 1">
                        <div class="card-body">
                            <h5 class="card-title">Desarrollo Web</h5>
                            <p class="card-text">Creación de sitios web modernos y funcionales.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <img src="https://i.ytimg.com/vi/kK2TS3qx8-U/hq720.jpg?sqp=-oaymwE7CK4FEIIDSFryq4qpAy0IARUAAAAAGAElAADIQj0AgKJD8AEB-AH-CYAC0AWKAgwIABABGBMgYyh_MA8=&rs=AOn4CLB1BqqE-a7YpweE_GMOch4tUeJ8CA" class="card-img-top" alt="Servicio 2">
                        <div class="card-body">
                            <h5 class="card-title">Consultoría</h5>
                            <p class="card-text">Asesoramiento para optimización de procesos tecnológicos.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRZPlfhH_uT0nGFCJKwLG39rsHqUjMoWIBbKw&s" class="card-img-top" alt="Servicio 3">
                        <div class="card-body">
                            <h5 class="card-title">Soporte Técnico</h5>
                            <p class="card-text">Mantenimiento y soporte para tus soluciones tecnológicas.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contacto Section -->
    <section id="contacto" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Contacto</h2>
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <form action="procesar_formulario.php" method="POST">
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo Electrónico</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="mensaje" class="form-label">Mensaje</label>
                            <textarea class="form-control" id="mensaje" name="mensaje" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4">
        <div class="container text-center">
            <p>&copy; 2024 Mi Web. Todos los derechos reservados.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
