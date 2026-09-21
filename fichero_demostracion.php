<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>

    <?php
        $fechaActual = date('d/m/Y');
        $horaActual = date('H:i:s');

    // Escapamos los datos antes de mostrarlos en HTML para evitar que contenido no confiable se interprete como código (XSS).
    ?>

    <h1>Demostración de PHP</h1>
    <p>Fecha del servidor: <?php echo htmlspecialchars($fechaActual); ?></p>
    <p>Hora del servidor: <?php echo htmlspecialchars($horaActual); ?></p>

</body>
</html>