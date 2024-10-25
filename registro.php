<?php
  include ("./header.php");
?>

<div class="row">
<div class="col s8">
    <header class="Titulo" >
        <h3>Registro en mi DB</h3>
    </header>

    <div class="Formulario" >
        <form action="./controlador/enviarRegistro.php" method="post">

  <div class="row">
    <div class="input-field col s6">
      <input type="text" class="validate" name="nombre_usuario" required maxlength="100" placeholder="Ingresa tu Nombre de Usuario">
      <label class="active" for="nombre_usuario">Nombre de Usuario: </label>
    </div>
  </div>

  <div class="row">
    <div class="input-field col s6">
      <input type="text" class="validate" name="carrera" required maxlength="100" placeholder="Ingresa tu Carrera">
      <label class="active" for="carrera">Carrera: </label>
    </div>
  </div>

      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate" nam="email" required maxlength="100" placeholder="Ingresa tu Correo">
          <label for="email">Correo: </label>
        </div>
      </div>

  <div class="row">
    <div class="input-field col s6">
      <input type="text" class="validate" name="no_cuenta" required maxlength="9" placeholder="Ingresa tu Número de Cuenta">
      <label class="active" for="no_cuenta">No de Cuenta: </label>
    </div>
  </div>

  <div class="row">
    <div class="input-field col s6">
      <input type="text" class="validate" name="direccion" required maxlength="100" placeholder="Ingresa tu Dirección Particular">
      <label class="active" for="no_cuenta">Dirección Particular: </label>
    </div>
  </div>

  <div class="row">
    <div class="input-field col s6">
      <input type="text" class="validate" name="telefono" required maxlength="12" placeholder="Ingresa tu Teléfono">
      <label class="active" for="telefono">Teléfono: </label>
    </div>
  </div>

      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate" name="password" require maxlength="8" placeholder="Ingresa tu Contraseña">
          <label for="password">Contraseña: </label>
        </div>
      </div>

             <button type="submit" name="submit">Enviar registro</button>
        </form>
    </div>
<a href='Registro.php'>Nuevo registro</a>
<a href='index.php'>Ver registro</a>

</div>
</div>
<?php
  include ("./footer.php");
?>