<?php require('./config/dbconex.php'); ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de Contactos</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div class="container">
            <div>
                <h1>Agenda de Contactos</h1>
            </div>
            <div class="menu">
                <ul>
                    <li><a id="btnIngresar">Ingresar</a></li>
                    <li><a id="btnConsultar">Consultar</a></li>
                </ul>
            </div>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="panel">
                <h2 id="mensaje-inicial">Por favor seleccione una opción</h2>

                <div id="insertar">
                    <form id="insertarForm" action="" method="post">
                        <div class="column">
                            <h3 class="titulo">Agregar Contacto</h3>
                            <label for="nombres">Nombres</label>
                            <input type="text" name="nombres" id="nombres">
                            <label for="apellidos">Apellidos</label>
                            <input type="text" name="apellidos" id="apellidos">
                            <label for="direccion">Dirección</label>
                            <input type="text" name="direccion" id="direccion">
                            <label for="teltrabajo">Teléfono del trabajo</label>
                            <input type="text" name="teltrabajo" id="teltrabajo">
                            <label for="telmovil">Teléfono móvil</label>
                            <input type="text" name="telmovil" id="telmovil">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email">
                            <input type="button" onclick="insertar()" value="Guardar" class="submit">
                        </div>
                    </form>
                </div>
                <div id="consultar"></div>
            </div>
            <div id="respuestas" class="respuestas"></div>
            <hr>
            <h3>Presentado por:<br>
            Héctor Mauricio Martínez Díaz<br>
            Servidores y servicios web / 51220<br>
            Ingeniería de Sistemas
            <a href="https://github.com/maoworshipper/agenda.git" target="_blank">Ver repositorio en GitHub</a></h3>
        </div>
    </main>
    <script src="./assets/js/main.js"></script>
</body>

</html>