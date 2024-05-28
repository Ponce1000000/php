<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Información del Ticket</h1>

    <?php
    // Verificar si se recibió información del formulario
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        // Obtener la información enviada por el formulario
        $marca = $_GET["marca"];
        $vendedor = $_GET["vendedor"];
        $modelo = $_GET["modelo"];
        $color = $_GET["color"];
        $tipo = $_GET["tipo"];

        // Mostrar la información del ticket
        echo "<p><strong>Marca:</strong> $marca</p>";
        echo "<p><strong>Vendedor:</strong> $vendedor</p>";
        echo "<p><strong>Modelo:</strong> $modelo</p>";
        echo "<p><strong>Color:</strong> $color</p>";
        echo "<p><strong>Tipo:</strong> $tipo</p>";
    }
    ?>
</body>
</html>
