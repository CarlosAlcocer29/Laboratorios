<?php
include 'db_connection.php';

// Consulta para obtener todos los registros de la tabla pagos
$sql = "SELECT id, deudor, cuota, cuota_capital, fecha_pago FROM pagos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Lista de Pagos</h2>";
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Deudor</th>
                <th>Cuota</th>
                <th>Cuota Capital</th>
                <th>Fecha de Pago</th>
            </tr>";
    // Mostrar cada fila de resultados
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['deudor']}</td>
                <td>{$row['cuota']}</td>
                <td>{$row['cuota_capital']}</td>
                <td>{$row['fecha_pago']}</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No se encontraron resultados.";
}

$conn->close();
?>
