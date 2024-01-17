<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tec-Medika</title>
    @vite('resources/scss/app.scss')
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
                        <a class="nav-link {{ request()->route()->getName() == 'home' ? 'active' : '' }}" href="/">Inicio</a>
                    </li>
                    @auth
                    <li class="nav-item">
                        <a class="nav-link {{ request()->route()->getName() == 'pacientes' ? 'active' : '' }}" href="/pacientes">Pacientes</a>
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
    @vite('resources/js/app.js')
</body>
</html>