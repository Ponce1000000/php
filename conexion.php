<?php
$serverName = "LAPTOP-8632NMPI\\SQLEXPRESS"; // Doble barra invertida para escapar
$connectionOptions = array(
    "Database" => "carrosss",
    "CharacterSet" => "UTF-8" // Opcional: Establecer el juego de caracteres
);

// Intentar conectar
$conn = sqlsrv_connect($serverName, $connectionOptions);

if ($conn) {
    // Conexión exitosa
} else {
    echo "Error al conectar<br>";
    die(print_r(sqlsrv_errors(), true)); // Mostrar detalles del error
}
?>
