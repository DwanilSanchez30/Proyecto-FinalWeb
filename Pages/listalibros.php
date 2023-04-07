<?php
include ('ConexionDB/Conexion.php');

$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$consulta = $conexion->query("SELECT * FROM titulos");

echo '<table id="tabla-libros">';
echo '<thead>';
echo '<tr>';
echo '<th>ID</th>';
echo '<th>Titulo</th>';
echo '<th>Tipo</th>';
echo '<th>Id Publicacion</th>';
echo '<th>Precio</th>';
echo '<th>Avance</th>';
echo '<th>Total ventas</th>';
echo '<th>Notas</th>';
echo '<th>Fecha</th>';
echo '<th>Contrato</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';

while ($fila = $consulta->fetch(PDO::FETCH_ASSOC)) {
    echo '<tr>';
    echo '<td>' . $fila['id_titulo'] . '</td>';
    echo '<td>' . $fila['titulo'] . '</td>';
    echo '<td>' . $fila['tipo'] . '</td>';
    echo '<td>' . $fila['id_pub'] . '</td>';
    echo '<td>' . $fila['precio'] . '</td>';
    echo '<td>' . $fila['avance'] . '</td>';
    echo '<td>' . $fila['total_ventas'] . '</td>';
    echo '<td>' . $fila['notas'] . '</td>';
    echo '<td>' . $fila['fecha_pub'] . '</td>';
    echo '<td>' . $fila['contrato'] . '</td>';
    echo '</tr>';
}

echo '</tbody>';
echo '</table>';


$conexion = null;
?>
