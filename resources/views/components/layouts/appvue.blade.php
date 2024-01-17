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
        <v-app>
            <header>
                <v-app-bar app>
                    <v-row align="center">
                        <v-col cols="auto">
                            <v-app-bar-title class="text-left ml-3">Tec-Medika</v-app-bar-title>
                        </v-col>
                        <v-col class="text-center">
                            <v-btn text>Inicio</v-btn>
                        </v-col>
                    </v-row>
                </v-app-bar>
            </header>
            <main>
            <v-container class="mt-15">
                <app-component />
            </v-container>
            </main>
        </v-app>
    </div>
    @vite('resources/js/app.js')
</body>
</html>