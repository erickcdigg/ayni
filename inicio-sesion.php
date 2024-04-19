<?php require('./layouts/inicio.php') ?>
<?php require('./layouts/header.php') ?>

<?php //require('./layouts/aviso-en-construccion.php') 
?>
<div class="content">
    <div class="main">
        <div class="cabecera">
            <h1>Hola!, nos da gusto que estes otra vez aquí</h1>
            <p class="parrafo">No te olvides de estar siempre activo/a para que crescas y ayudar a crecer.</p>
            <img class="svg-login" src="./imges/svgs/tab-login-rafiki.svg" alt="">
        </div>
        <div class="formulario">
            <h3>Inicio de sesion</h3>
            <form id="formulario" class="formulario-login">
                <div class="campos">
                    <div class="campo">
                        <label for="usuario">usuario</label>
                        <input type="text" id="usuario" placeholder="Usuario" required>
                    </div>
                    <div class="campo">
                        <label for="password">Password</label>
                        <input type="password" id="password" placeholder="*******" required>
                    </div>
                    <div class="campo">
                        <button id="btnIngresar" type="submit">Ingresar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!--<script src="app/scripts/login.js"></script>-->
<?php require('./layouts/footer.php') ?>
<script src="app/scripts/login.js"></script>
<?php require('./layouts/fin.php') ?>