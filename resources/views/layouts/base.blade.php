<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Barber Shop Moshan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{asset('css/estilos.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a href="/" class="navbar-brand"><strong>BARBER SHOP MOSHAN</strong></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="/" class="nav-link"><i class="bi bi-house-fill px-3"></i> <strong>INICIO</strong></a></li>
                    <li class="nav-item"><a href="#" class="nav-link"><i class="bi bi-cart-fill px-3"></i> <strong>VENTAS</strong></a></li>
                    <li class="nav-item"><a href="#" class="nav-link"><i class="bi bi-people-fill px-3"></i> <strong>BARBEROS</strong></a></li>
                    <li class="nav-item"><a href="#" class="nav-link"><i class="bi bi-box-seam px-3"></i> <strong>INVENTARIO</strong></a></li>
                    <li class="nav-item"><a href="/servicios" class="nav-link"><i class="bi bi-scissors px-3"></i> <strong>SERVICIOS</strong></a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('contenido')
    </div>

    <footer class="bg-dark text-center text-white py-3 mt-auto">
        <div class="container">
            <p class="mb-0">© 2025 <strong>Barber Shop Moshan.</strong> Todos los derechos reservados.</p>
            <div class="social-icons">
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-twitter"></i></a>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
