<?php
include 'db_connection.php';

// Obtener datos del formulario
$deudor = $_POST['deudor'];
$cuota = $_POST['cuota'];
$cuota_capital = $_POST['cuota_capital'];
$fecha_pago = $_POST['fecha_pago'];

// Preparar la consulta SQL para insertar
$sql = "INSERT INTO pagos (deudor, cuota, cuota_capital, fecha_pago)
        VALUES ('$deudor', $cuota, $cuota_capital, '$fecha_pago')";

if ($conn->query($sql) === TRUE) {
    echo "Pago registrado correctamente. <a href='listar_pagos.php'>Ver todos los pagos</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
