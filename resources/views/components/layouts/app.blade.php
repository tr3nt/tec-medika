<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tec-Medika</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" crossorigin="anonymous">
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg bg-medika">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Tec-Medika</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Inicio</a>
                    </li>
                    @auth
                    <li class="nav-item">
                        <a class="nav-link" href="/pacientes">Pacientes</a>
                    </li>
                    <!-- Botón de Salir -->
                    @livewire('auth.logout')
                    <!-------------------->
                    @endauth
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="/ingreso">Ingreso</a>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    </header>

    <main>
        <div class="container mt-3">
            {{ $slot }}
        </div>
    </main>

    @livewireScripts
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>
</html>