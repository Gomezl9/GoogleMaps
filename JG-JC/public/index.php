<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDaeWicvigtP9xPv919E-RNoxfvC-Hqik&callback=initMap" async defer></script>
</head>
<body>
    <div class="main">
        <div class="container">
            <form action="./guardar_estudiante.php" method="POST" class="form">
                <h2>Formulario de Registro</h2>
                <input type="text" name="cedula" placeholder="Cédula" required>
                <input type="text" name="name" placeholder="Nombres" required>
                <input type="text" name="apellidos" placeholder="Apellidos" required>
                <input type="text" name="direccion" placeholder="Dirección de casa" required>

                <div class="la-lo">
                    <input type="text" id="latitud" name="ubicacion_residencia_lat" placeholder="Latitud (Casa)" readonly required>
                    <input type="text" id="longitud" name="ubicacion_residencia_lng" placeholder="Longitud (Casa)" readonly required>
                </div>

                <input type="text" name="direccion_trabajo" placeholder="Dirección de trabajo" required>

                <div class="la-lo">
                    <input type="text" id="latitud_trabajo" name="ubicacion_trabajo_lat" placeholder="Latitud (Trabajo)" readonly required>
                    <input type="text" id="longitud_trabajo" name="ubicacion_trabajo_lng" placeholder="Longitud (Trabajo)" readonly required>
                </div>

                <button type="submit" name='send'>ENVIAR DATOS</button>
            </form>
        </div>

        <div>
            <label for="#" style="margin: 40px">Seleccione ubicacion del trabajo</label>
            <div id="map" style="width: 800px; height: 500px; border: 0; margin: 30px;"></div>
            <label for="#" style="margin-left: 40px">Seleccione ubicacion del trabajo</label>
            <div id="map2" style="width: 800px; height: 500px; border: 0; margin: 30px;"></div>
        </div>
    </div>

    <?
        include './guardar_estudiante.php';
    ?>

    <script src="../js/mapa.js"></script>
</body>
</html>
