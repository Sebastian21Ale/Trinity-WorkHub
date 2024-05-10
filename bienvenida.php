<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trinity WorkHub</title>
    <link rel="stylesheet" type="text/css" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="styles.css">

    <style>
        .boton-cerrar-sesion {
    display: flex;
    justify-content: center;
    margin-top: 1rem;
}

.boton-cerrar-sesion .boton {
    padding: 10px 20px;
    background-image: linear-gradient(45deg, #008000, #000000);
    color: white;
    border: none;
    border-radius: 8px;
    text-decoration: none;
    font-weight: bold;
    box-shadow: 0 2px 5px rgba(0,0,0,0.2);
    transition: background-color 0.3s, box-shadow 0.3s;
}

.boton-cerrar-sesion .boton:hover {
    background-color: #9A2FEF;  /* Color más oscuro al pasar el ratón */
    box-shadow: 0 4px 8px rgba(0,0,0,0.3);
}

.boton-cerrar-sesion .boton:active {
    background-color: #8812DB;  /* Color aún más oscuro al hacer clic */
    box-shadow: 0 2px 4px rgba(0,0,0,0.25);
}
    </style>
</head>

<body>
    <section class="seccion-perfil-usuario">
        <div class="perfil-usuario-header">
            <div class="perfil-usuario-portada">
                <div class="perfil-usuario-avatar">
                    <img src="img/foto-de-perfil.jpg" alt="img-avatar">
                    <button type="button" class="boton-avatar">
                        <i class="far fa-image"></i>
                    </button>
                </div>
                <button type="button" class="boton-portada">
                    <i class="far fa-image"></i> Cambiar fondo
                </button>
            </div>
        </div>
        <div class="perfil-usuario-body">
            <div class="perfil-usuario-bio">
                <h3 class="titulo">Juan Sebastian Escobar Cordoba</h3>
                <p class="texto">Desarrollador de software con experiencia en Java EE, Java SE, Spring, HTML, CSS, JavaScript, Git y Docker </p>
            </div>
            <div class="perfil-usuario-footer">
                <ul class="lista-datos">
                    <li><i class="icono fas fa-map-signs"></i> Identificación de Empleado: 123456</li>
                    <li><i class="icono fas fa-phone-alt"></i> Telefono: 3115367858</li>
                    <li><i class="icono fas fa-briefcase"></i> Trabaja en: TRINITY FS</li>
                    <li><i class="icono fas fa-building"></i> Cargo: Desarrollador Back-End</li>
                </ul>
                <ul class="lista-datos">
                    <li><i class="icono fas fa-map-marker-alt"></i> Ubicacion: Neiva, Huila</li>
                    <li><i class="icono fas fa-calendar-alt"></i> Fecha nacimiento: 27/Jun/2001</li>
                    <li><i class="icono fas fa-user-check"></i> Estado: Activo</li>
                    <li><i class="icono fas fa-share-alt"></i> Redes sociales.</li>
                </ul>
            </div>
            <div class="redes-sociales">
                <a href="" class="boton-redes facebook fab fa-facebook-f"></a>
                <a href="" class="boton-redes twitter fab fa-twitter"></a>
                <a href="" class="boton-redes instagram fab fa-instagram"></a>
            </div>
        </div>
    </section>

    <div class="boton-cerrar-sesion">
        <a href="php/cerrar_sesion.php" class="boton">Cerrar Sesión</a>
    </div>
    <div class="mis-redes">
        <p>Trinity FS</p>
        <div>
            <a target="_blank" href="https://www.facebook.com/profile.php?id=100092230729327&mibextid=LQQJ4d"><i class="fab fa-facebook-square"></i></a>
            <a target="_blank" href="https://www.instagram.com/trinity_fs?igsh=YTh2ODRyZnd3Mzh5"><i class="fab fa-instagram"></i></a>
        </div>
    </div>

    <script src="scripts.js"></script>
</body>

</html>
