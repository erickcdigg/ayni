<?php require('./layouts/inicio.php') ?>
<?php require('./layouts/header.php') ?>

<div class="content">
    <div class="main">
        <div class="cabecera">
            <h1>¡Estamos listos para apoyarte!</h1>
            <p class="parrafo">¿No te gustan los formularios? Envíanos un email o escríbenos por WhatsApp.</p>

            <img class="svg-contactanos" src="./imges/svgs/team-work-amico.svg" alt="">
        </div>
        <div class="formulario">
            <p class="parrafo">(*) Campos requeridos</p>
            <form action="#">
                <div class="campos">
                    <div class="campo">
                        <label for="nombre">Nombre Completo *</label>
                        <input type="text" id="nombre" placeholder="Nombres..." required>
                    </div>
                    <div class="campo">
                        <label for="email">Dirección de Email *</label>
                        <input type="email" id="email" placeholder="Email: @gmail o @hotmail..." required>
                    </div>
                    <div class="campo">
                        <label for="telefono">Teléfono</label>
                        <input type="tel" class="telefono" id="telefono" placeholder="Tel: 951-524...">
                    </div>
                    <div class="campo">
                        <label for="mensaje">Mensaje *</label>
                        <textarea id="mensaje" rows="5" required placeholder="Dejame un mensaje"></textarea>
                    </div>
                </div>
                <br><br><br><br><br>
                <div class="campos">
                    <div class="campo">
                        <button id="btnEnviar" type="submit">Enviar</button>
                        <br><br>
                        <p class="parrafo">Unete al grupo de Whatsapp scaneando el código QR desde tu celular.</p>
                    </div>
                    <div class="campo"> 
                        <img class="qr-whatsapp" src="./imges/ayni-whatsapp.PNG" alt="ayni-whatsapp" srcset="">
                    </div>
                </div>
                <div class="campos">
                    <div class="campo">
                        <a href="https://chat.whatsapp.com/DMLEqNp828REKSUGUrWjsg" target="_blank" class="contact-button w-inline-block">
                            <img src="app/svg/whatsapp-121.svg" width="30" height="30" alt="Whatsapp contacto">
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>

<?php require('./layouts/footer.php') ?>
<?php require('./layouts/fin.php') ?>