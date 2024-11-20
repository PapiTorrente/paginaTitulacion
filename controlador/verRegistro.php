<!-- Incluye la conexión a la base de datos y el header-->
<?php
include "./conexion.php";
include "head.html";
mysqli_set_charset($conexion, 'utf8');

$sql = "SELECT * FROM persona";
$resultado = $conexion->query($sql);
?>

<!-- Coloca el titulo de la página y un titulo para la tabla -->
<title>Registros | ICO</title>
<header class="Titulo" >
        <h3>Listado de Registros</h3>
</header>
<!-- Llena la tabla según los datos en la base de datos -->
<?php
if ($resultado->num_rows > 0) {
    echo '<table class="highlight"><thead><tr><th>Nombre</th><th>Apellido Paterno</th><th>Apellido Materno</th><th>Carrera</th><th>Número de Cuenta</th><th>Dirección</th><th>Teléfono</th><th>Correo</th></tr></thead> <tbody>';

    while($row = $resultado->fetch_assoc()) {
        echo "<tr><td>" . $row["nombre"]. "</td><td>" . $row["ap_paterno"]. "</td><td>" . $row["ap_materno"]. "</td><td>" . $row["carrera"]. "</td><td>" . $row["no_cuenta"]. "</td><td>" . $row["direccion"]. "</td><td>" . $row["telefono"]. "</td><td>" . $row["email"]. "</td></tr>";
    }
    echo "</tbody></table><br>";
} else {
    echo "<h3> No hay registros. </h3>";
}

$conexion->close();
?>

<!-- Incluye el footer -->
<?php
include "foot.html";
?>
