<title>¡ATENCIÓN!</title>

<style>
    .centrado {
        text-align: center;
        align-self: center;
    }
</style>
<?php
include "./conexion.php";
include "head.html";
mysqli_set_charset($conexion,'utf8');

$buscarusuario="SELECT * FROM persona WHERE no_cuenta ='$_POST[no_cuenta]'";

$resultado = $conexion -> query($buscarusuario);
$count=mysqli_num_rows($resultado);
if($count==1){
    echo'<h3 class="centrado"> El usuario ya esta registrado </h3>';
    echo'<div class="centrado"><a class="waves-effect waves-light btn" href="../registro.php">Nuevo Registro</a></div>';
    echo"<p></p>";
}else{
    mysqli_query($conexion,"INSERT INTO persona(
        nombre,ap_paterno,ap_materno,carrera,no_cuenta,email,telefono,direccion,password)
        VALUES(
            '$_POST[nombre]',
            '$_POST[ap_paterno]',
            '$_POST[ap_materno]',
            '$_POST[carrera]',
            '$_POST[no_cuenta]',
            '$_POST[email]',
            '$_POST[telefono]',
            '$_POST[direccion]',
            '$_POST[password]'
        )");
        echo "<br> <h1>Usuario creado con exito</h1>";
        echo "<a href='../registro.php'>Puedes generar un Nuevo registro</a>";
        echo "<br> <a href='./verRegistro.php'>Ver registros</a>";
}
?>