<?php

include ('ConexionDB/Conexion.php');
    
$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$consulta = $conexion->query("SELECT * FROM autores");

echo '<table id="tabla-autores">';
echo '<thead>';
echo '<tr>';
echo '<th>ID</th>';
echo '<th>Apellido</th>';
echo '<th>Nombre</th>';
echo '<th>Telefono</th>';
echo '<th>Direccion</th>';
echo '<th>Ciudad</th>';
echo '<th>Estado</th>';
echo '<th>Pais</th>';
echo '<th>Codigo Postal</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';

while ($fila = $consulta->fetch(PDO::FETCH_ASSOC)) {
    echo '<tr>';
    echo '<td>' . $fila['id_autor'] . '</td>';
    echo '<td>' . $fila['apellido'] . '</td>';
    echo '<td>' . $fila['nombre'] . '</td>';
    echo '<td>' . $fila['telefono'] . '</td>';
    echo '<td>' . $fila['direccion'] . '</td>';
    echo '<td>' . $fila['ciudad'] . '</td>';
    echo '<td>' . $fila['estado'] . '</td>';
    echo '<td>' . $fila['pais'] . '</td>';
    echo '<td>' . $fila['cod_postal'] . '</td>';
    echo '</tr>';
}
$conexion = null;
?>