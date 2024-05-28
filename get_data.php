<?php
include 'conexion.php';

function obtenerDatos($tabla) {
    $conn = sqlsrv_connect($serverName, $connectionOptions);
    if (!$conn) {
        die("Error al conectar a la base de datos");
    }

    $sql = "SELECT DISTINCT descripcion FROM $tabla";
    $result = sqlsrv_query($conn, $sql);
    if ($result === false) {
        die(print_r(sqlsrv_errors(), true)); // Mostrar detalles del error
    }

    if (sqlsrv_has_rows($result)) {
        while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
            echo "<option value='" . $row['descripcion'] . "'>" . $row['descripcion'] . "</option>";
        }
    } else {
        echo "No se encontraron registros en la tabla $tabla";
    }

    sqlsrv_free_stmt($result);
    sqlsrv_close($conn);
}
?>
