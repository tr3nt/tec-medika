<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tec-Medika</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div id="app">
        <header>
        <nav>
            Tec-Medika
        </nav>
        </header>

        <main>
        <div class="container mt-3" id="app">
            @yield('content')
        </div>
        </main>
    </div>

    @vite('resources/js/app.js')
</body>
</html>