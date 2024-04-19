<?php session_start(); 

if (!isset($_SESSION['usuarioId'])) {
    // Si el usuario no está autenticado, redirigirlo a la página de inicio de sesión o mostrar un mensaje de error
    header("location: inicio-sesion.php");
    exit;
}

?>
<?php require('./layouts/inicio.php') ?>
<?php require('./layouts/header-perfil.php') ?>
<div class="content">
    <div class="main contenedor-perfil">
        <h3 id="datosPrincipales"></h3>
        <p class="parrafo-content">Este es tu link de invitacion =><a href="" id="link-invitacion" class="link-invitacion" target="_blank"></a><input type="button" class="btn-copiar" id="btn-copiar" value="Copiar   "></p>
        <p>Tu anfitrión es Erick Loza Tavera (erickalt)</p>
        <p>Tienes 0 invitados</p>
        <hr>
        <hr>
        <div class="panel">
            <div class="filas">
                <h3>Tablero de informacion de tu anfitrión</h3>
            </div>
            <div class="filas">
                <table>
                    <thead>
                        <th>Tablero</th><th>Beneficiario</th><th>Contacto</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>nivel</td><td>Erick Loza Tavera</td><td>902747650</td>
                        </tr>
                        <tr>
                            <td>0</td><td>(ericklt)</td><td>erickcdigg@gmail.com</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <hr>
        <p>Puedes unirte a un tablero nuevamente después de enviar tu donacion</p>
        <hr>
        <a class="boton-niveles" href="#tabla-niveles">Niveles ↓</a>
        <hr>
    </div>

    <div class="main tabla-niveles" id="tabla-niveles">
        <div class="filas-nivel fila-cabecera">
            <h3>Niveles</h3>
        </div>
        <div class="filas-nivel fila-cuerpo">
            <div class="columnas-nivel">
                <div class="box-level nivel1">
                    <a href="http://" class="box-link">
                        <i class="fa-duotone fa-ball-pile"></i>
                        <img src="./imges/piramide2.png" alt="" class="imagen-level">
                        <p class="box-text">nivel 1</p>
                    </a>
                </div>

                <div class="box-level nivel3">
                    <a href="http://" class="box-link">
                        <i class="fa-duotone fa-ball-pile"></i>
                        <img src="./imges/piramide2.png" alt="" class="imagen-level">
                        <p class="box-text">nivel 3</p>
                    </a>
                </div>

                <div class="box-level nivel5">
                    <a href="http://" class="box-link">
                        <i class="fa-duotone fa-ball-pile"></i>
                        <img src="./imges/piramide2.png" alt="" class="imagen-level">
                        <p class="box-text">nivel 5</p>
                    </a>
                </div>

            </div>
            <div class="columnas-nivel">
                <div class="box-level nivel2">
                    <a href="http://" class="box-link">
                        <i class="fa-duotone fa-ball-pile"></i>
                        <img src="./imges/piramide2.png" alt="" class="imagen-level">
                        <p class="box-text">nivel 2</p>
                    </a>
                </div>
                <div class="box-level nivel4">
                    <a href="http://" class="box-link">
                        <i class="fa-duotone fa-ball-pile"></i>
                        <img src="./imges/piramide2.png" alt="" class="imagen-level">
                        <p class="box-text">nivel 4</p>
                    </a>
                </div>
                <div class="box-level nivel6">
                    <a href="http://" class="box-link">
                        <i class="fa-duotone fa-ball-pile"></i>
                        <img src="./imges/piramide2.png" alt="" class="imagen-level">
                        <p class="box-text">nivel 6</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!--<script src="app/scripts/login.js"></script>-->
<?php require('./layouts/footer.php') ?>
<script src="app/scripts/perfil.js"></script>
<?php require('./layouts/fin.php') ?>
