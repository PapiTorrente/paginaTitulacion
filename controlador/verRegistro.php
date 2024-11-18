<?php
include "./conexion.php";
mysqli_set_charset($conexion, 'utf8');

$sql = "SELECT * FROM persona";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    echo "<table><tr><th>Nombre</th><th>Apellido Paterno</th><th>Apellido Materno</th><th>Carrera</th><th>Número de Cuenta</th><th>Dirección</th><th>Teléfono</th><th>Email</th></tr>";
    while($row = $resultado->fetch_assoc()) {
        echo "<tr><td>" . $row["nombre"]. "</td><td>" . $row["ap_paterno"]. "</td><td>" . $row["ap_materno"]. "</td><td>" . $row["carrera"]. "</td><td>" . $row["no_cuenta"]. "</td><td>" . $row["direccion"]. "</td><td>" . $row["telefono"]. "</td><td>" . $row["email"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "No hay registros";
}

$conexion->close();
?>
