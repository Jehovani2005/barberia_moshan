<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menu</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{asset('css/estilos.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <!-- Nav container start -->
        <div class="container-fluid">
            <a href="#" class="navbar-brand text-info fw-semibold 
            fs-16">BARBERIA</a>

            <!-- Nav button -->
            <button class="navbar-toggler" type="button"
            data-bs-toggle="offcanvas"
            data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
            </button>

            <!-- OFF CANVAS MAIN CONTAINER START -->
            <section class="offcanvas offcanvas-start" id="menu" tabindex="-1">

                <div class="offcanvas-header" data-bs-theme="dark">
                    <h5 class="offcanvas-title text-info">BARBERIA</h5>
                    <button class="btn-close" type="button" aria-label="close" data-bs-dismiss="offcanvas"></button>
                </div>
                <div class="offcanvas-body d-flex flex-column
                justify-content-between px-0">
                    <ul class="navbar-nav fs-5 justify-content-evenly">
                        <li class="nav-item p-3 py-md-1"><a href="#" class="nav-link pst"><i class="bi bi-house-fill px-3"></i> INICIO</a></li>
                        <li class="nav-item p-3 py-md-1"><a href="#" class="nav-link pst"><i class="bi bi-cash-coin px-3"></i> VENTAS</a></li>
                        <li class="nav-item p-3 py-md-1"><a href="#" class="nav-link pst"><i class="bi bi-person-rolodex px-3"></i> EMPLEADOS</a></li>
                        <li class="nav-item p-3 py-md-1"><a href="#" class="nav-link pst"><i class="bi bi-archive px-3"></i> INVENTARIO</a></li>
                    </ul>

                    <!-- Enlaces redes sociales -->
                    <div class="d-lg-none align-self-center py-3">
                        <a href=""><i class="bi bi-facebook px-2 text-info fs-2"></i></a>
                        <a href=""><i class="bi bi-instagram px-2 text-info fs-2"></i></a>
                        <a href=""><i class="bi bi-twitter-x px-2 text-info fs-2"></i></a>
                    </div>

                </div>
            </section>

        </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    @yield('contenido')
</body>
</html>