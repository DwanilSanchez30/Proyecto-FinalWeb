<?php
include ('ConexionDB/Conexion.php');

$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$consulta = $conexion->query("SELECT * FROM contacto");

// Imprimir los resultados en una tabla HTML
echo '<table id="tabla-contacto">';
echo '<thead>';
echo '<tr>';
echo '<th>ID</th>';
echo '<th>Fecha</th>';
echo '<th>Nombre</th>';
echo '<th>Correo Electronico</th>';
echo '<th>Asunto</th>';
echo '<th>Comentario</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';

while ($fila = $consulta->fetch(PDO::FETCH_ASSOC)) {
    echo '<tr>';
    echo '<td>' . $fila['id'] . '</td>';
    echo '<td>' . $fila['fecha'] . '</td>';
    echo '<td>' . $fila['nombre'] . '</td>';
    echo '<td>' . $fila['correo'] . '</td>';
    echo '<td>' . $fila['asunto'] . '</td>';
    echo '<td>' . $fila['comentario'] . '</td>';
    echo '</tr>';
}
echo '</tbody>';
echo '</table>';

// Cerrar la conexión a la base de datos
$conexion = null;
?>