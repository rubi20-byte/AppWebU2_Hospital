<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'proyectos_db';

$mysqli = new mysqli($host, $user, $pass, $db);
if ($mysqli->connect_error) {
    die('Error de conexión: ' . $mysqli->connect_error);
}

$id = $_POST['id_proyecto'];
$nombre = $_POST['nombre_proyecto'];
$descripcion = $_POST['descripcion_proyecto'];
$descripcion_larga = $_POST['descripcion_larga_proyecto'];  
$fecha_creacion = $_POST['fecha_creacion'];
$fecha_terminacion = $_POST['fecha_terminacion'];
$costo = $_POST['costo_proyecto'];
$responsable = $_POST['responsable_proyecto'];

echo "ID Proyecto: " . $id . "<br>";
echo "Nombre: " . $nombre . "<br>";
echo "Descripción: " . $descripcion . "<br>";
echo "Descripción Larga: " . $descripcion_larga . "<br>";
echo "Fecha de Creación: " . $fecha_creacion . "<br>";
echo "Fecha de Terminación: " . $fecha_terminacion . "<br>";
echo "Costo: " . $costo . "<br>";
echo "Responsable: " . $responsable . "<br>";
?>