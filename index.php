<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Llenado de Formulario</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Llenado de Formulario</h1>

    <form action="ticket.php" method="get">
        <?php
        // Incluir el archivo de conexión a la base de datos
        include 'conexion.php';

        // Consulta SQL para obtener las marcas de los autos
        $sqlMarca = "SELECT DISTINCT Marca FROM Autos";
        $resultadoMarca = sqlsrv_query($conn, $sqlMarca);

        if ($resultadoMarca === false) {
            die(print_r(sqlsrv_errors(), true));
        }

        // Combobox de Marca
        echo "<label for='marca'>Marca:</label>";
        echo "<select name='marca'>";
        echo "<option value=''>Selecciona una marca</option>";

        while ($rowMarca = sqlsrv_fetch_array($resultadoMarca, SQLSRV_FETCH_ASSOC)) {
            echo "<option value='" . $rowMarca['Marca'] . "'>" . $rowMarca['Marca'] . "</option>";
        }

        echo "</select><br>";
        sqlsrv_free_stmt($resultadoMarca);

        // Consulta SQL para obtener los vendedores
        $sqlVendedor = "SELECT DISTINCT Vendedor FROM Autos";
        $resultadoVendedor = sqlsrv_query($conn, $sqlVendedor);

        if ($resultadoVendedor === false) {
            die(print_r(sqlsrv_errors(), true));
        }

        // Combobox de Vendedor
        echo "<label for='vendedor'>Vendedor:</label>";
        echo "<select name='vendedor'>";
        echo "<option value=''>Selecciona un vendedor</option>";

        while ($rowVendedor = sqlsrv_fetch_array($resultadoVendedor, SQLSRV_FETCH_ASSOC)) {
            echo "<option value='" . $rowVendedor['Vendedor'] . "'>" . $rowVendedor['Vendedor'] . "</option>";
        }

        echo "</select><br>";
        sqlsrv_free_stmt($resultadoVendedor);

        // Consulta SQL para obtener los modelos
        $sqlModelo = "SELECT DISTINCT Modelo FROM Autos";
        $resultadoModelo = sqlsrv_query($conn, $sqlModelo);

        if ($resultadoModelo === false) {
            die(print_r(sqlsrv_errors(), true));
        }

        // Combobox de Modelo
        echo "<label for='modelo'>Modelo:</label>";
        echo "<select name='modelo'>";
        echo "<option value=''>Selecciona un modelo</option>";

        while ($rowModelo = sqlsrv_fetch_array($resultadoModelo, SQLSRV_FETCH_ASSOC)) {
            echo "<option value='" . $rowModelo['Modelo'] . "'>" . $rowModelo['Modelo'] . "</option>";
        }

        echo "</select><br>";
        sqlsrv_free_stmt($resultadoModelo);

        // Consulta SQL para obtener los colores de los autos
        $sqlColor = "SELECT DISTINCT Color FROM Autos";
        $resultadoColor = sqlsrv_query($conn, $sqlColor);

        if ($resultadoColor === false) {
            die(print_r(sqlsrv_errors(), true));
        }

        // Combobox de Color
        echo "<label for='color'>Color:</label>";
        echo "<select name='color'>";
        echo "<option value=''>Selecciona un color</option>";

        while ($rowColor = sqlsrv_fetch_array($resultadoColor, SQLSRV_FETCH_ASSOC)) {
            echo "<option value='" . $rowColor['Color'] . "'>" . $rowColor['Color'] . "</option>";
        }

        echo "</select><br>";
        sqlsrv_free_stmt($resultadoColor);

        // Consulta SQL para obtener los tipos de autos
        $sqlTipo = "SELECT DISTINCT Tipo FROM Autos";
        $resultadoTipo = sqlsrv_query($conn, $sqlTipo);

        if ($resultadoTipo === false) {
            die(print_r(sqlsrv_errors(), true));
        }

        // Combobox de Tipo
        echo "<label for='tipo'>Tipo:</label>";
        echo "<select name='tipo'>";
        echo "<option value=''>Selecciona un tipo</option>";

        while ($rowTipo = sqlsrv_fetch_array($resultadoTipo, SQLSRV_FETCH_ASSOC)) {
            echo "<option value='" . $rowTipo['Tipo'] . "'>" . $rowTipo['Tipo'] . "</option>";
        }

        echo "</select><br>";
        sqlsrv_free_stmt($resultadoTipo);
        ?>
        <input type="submit" value="Crear Ticket">
    </form>
</body>
</html>
