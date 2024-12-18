<?php
  include ("./header.html");
?>
<title>Registro de Modalidad | ICO</title>

<div class="row">
<div class="col s8">
    <header class="Titulo" >
        <h3>Registro de Modalidad</h3>
    </header>

    <div class="Formulario" >
        <form action="./controlador/enviarRegistro.php" method="post">
          <hr>
          <div>
                    <div class="row">
                        <div class="input-field col s4">
                        <i class="material-icons prefix">account_circle</i>
                            <input type="text" id="nombre" name="nombre" class="validate" required maxlength="100" pattern="[a-zA-Z ]+">
                            <label for="nombre">Nombre(s)</label>
                            <span class="helper-text" data-error="solo letras"></span>
                        </div>

                        <div class="input-field col s4">
                            <input type="text" id="primer_apellido" name="ap_paterno" class="validate" required maxlength="100" pattern="[a-zA-Z ]+">
                            <label for="primer_apellido">Primer apellido</label>
                            <span class="helper-text" data-error="solo letras"></span>
                        </div>

                        <div class="input-field col s4">
                            <input type="text" id="segundo_apellido" name="ap_materno" class="validate" required maxlength="100" pattern="[a-zA-Z ]+">
                            <label for="segundo_apellido">Segundo apellido</label>
                            <span class="helper-text" data-error="solo letras"></span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">class</i>
                            <select name="carrera">
                            <option value="" disabled selected>Carrera</option>
                            <optgroup label="Ciencias Físico-Matemáticas y de las Ingenierías">
                            <option value="Ingenieria Civil">Ingeniería Civil</option>
                            <option value="Ingenieria en Computación">Ingeniería en Computación</option>
                            <option value="Ingenieria Electrica Electrónica">Ingeniería Eléctrica Electronica</option>
                            <option value="Ingenieria Industrial">Ingeniería Industrial</option>
                            <option value="Ingenieria Mecánica">Ingeniería Mecanica</option>
                            <optgroup label="Ciencias Sociales">
                            <option value="Comunicación y Periodismo">Comunicación y Periodismo</option>
                            <option value="Derecho">Derecho</option>
                            <option value="Economía">Economía</option>
                            <option value="Planificación para el Desarrollo">Planificacion para el Desarrollo</option>
                            <option value="Relaciones Internacionales">Relaciones Internacionales</option>>
                            <option value="Sociología">Sociología</option>
                            <optgroup label="Humanidades y Artes">
                            <option value="Arquitectura">Arquitectura</option>
                            <option value="Diseño Industrial">Diseño Industrial</option>
                            <option value="Pedagogía">Pedagogía</option>
                            <select>
                        </div>

                        <div class="input-field col s6">
                            <input type="text" id="no_cuenta" name="no_cuenta" class="validate" required maxlenght="9" pattern="\d{1,9}">
                            <label for="no_cuenta">Número de cuenta</label>
                            <span class="helper-text" data-error="maximo de 9 numeros sin guion"></span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">email</i>
                            <input type="email" id="correo" name="email" class="validate" required maxlength="100">
                            <label for="correo">Correo Institucional</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">call</i>
                            <input type="text" id="telefono" name="telefono" class="validate" required maxlength="10" pattern="\d{1,10}">
                            <label for="telefono">Teléfono particular</label>
                            <span class="helper-text" data-error="maximo de 10 numeros"></span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">home</i>
                            <input type="text" id="direccion" name="direccion" class="validate" required maxlength="100">
                            <label for="direccion">Dirección particular</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">visibility_off</i>
                            <input type="password" id="password" name="password" class="validate" required maxlength="8">
                            <label for="password">Contraseña</label>
                        </div>
                    </div>

                <button class="btn waves-effect waves-light" type="submit" name="submit">Enviar
                    <i class="material-icons right">send</i>
                </button>
            </div>
        </form>
    </div>

    <br>
    <a class="waves-effect waves-light btn" href="controlador/verRegistro.php">Ver Registro</a>

  </div>
</div>

<?php
  include ("./footer.html");
?>