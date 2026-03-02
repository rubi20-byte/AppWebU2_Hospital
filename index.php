<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Proyectos</title>
</head>
<body>

    <h2>Formulario</h2>

    <form action="conexion.php" method="post">
        <label>ID Proyecto:</label><br>
        <input type="number" name="id_proyecto" required><br><br>

        <label>Nombre:</label><br>
        <input type="text" name="nombre_proyecto" required><br><br>

        <label>Descripción corta del proyecto:</label><br>
        <textarea name="descripcion_proyecto" rows="4" cols="50" maxlength="300"></textarea><br><br>

        <label>Descripción larga del proyecto:</label><br>
        <textarea name="descripcion_larga_proyecto" rows="6" cols="50" maxlength="500"></textarea><br><br>

        <label>Fecha de creación:</label><br>
        <input type="date" name="fecha_creacion" required><br><br>

        <label>Fecha de terminación:</label><br>
        <input type="date" name="fecha_terminacion"><br><br>    

        <label>Costo del proyecto:</label><br>
        <input type="number" name="costo_proyecto" step="0.01"><br><br>

        <label>Nombre del Responsable del Proyecto:</label><br>
        <input type="text" name="responsable_proyecto"><br><br>

        <input type="submit" value="Registrar Proyecto">
    </form>

</body>
</html>