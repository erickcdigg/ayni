<?php require('./layouts/inicio.php') ?>
<?php require('./layouts/header.php') ?>

<div class="content">
    <div class="main">
        <div class="formulario">
            <p class="parrafo">Registro valido con link de invitación</p>
            <p class="parrafo">(*) Campos requeridos</p>
            <form action="#">
                <div class="campos">
                    <div class="campo">
                        <label for="nombre-usuario">Nombre de usuario *</label>
                        <input type="text" id="nombre-usuario" placeholder="Ejm: juanito24" required>
                    </div>
                    <div class="campo">
                        <label for="nombre">Nombres *</label>
                        <input type="text" id="nombre" placeholder="Nombres..." required>
                    </div>
                    <div class="campo">
                        <label for="apellido">Apellidos *</label>
                        <input type="text" id="apellido" placeholder="Apellidos..." required>
                    </div>
                    <div class="campo">
                        <label for="telefono">Celular *</label>
                        <input type="text" id="telefono" placeholder="992..." required>
                    </div>
                    <div class="campo">
                        <label for="email">Dirección de Email *</label>
                        <input type="email" id="email" placeholder="Email: @gmail o @hotmail..." required>
                    </div>
                    <div class="campo">
                        <label for="clave1">Password</label>
                        <input type="password" id="clave1" placeholder="********">
                    </div>
                    <div class="campo">
                        <label for="clave2">Repite tu password</label>
                        <input type="password" id="clave2" placeholder="********">
                    </div>
                    <div class="campo">
                        <label for="estado">Acepto todas las condiciones</label>
                        <input type="checkbox" id="estado">
                    </div>
                    <div class="campo">
                        <button id="btnEnviar" type="submit">Registrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>

<?php require('./layouts/footer.php') ?>
<?php require('./layouts/fin.php') ?>