<!DOCTYPE html>
<html lang="es">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="./css/foundation.css" />
    <link rel="stylesheet" href="./css/main.css" />
    <script src="./js/vendor/modernizr.js"></script>

</head>
<body>
    
    <!-- PAGINA DEL LOGIN-->

    <!--Esto de aqui es una barra superior color negra con un logo-->
    <nav class="top-bar" data-topbar role="navigation">
        <ul class="title-area">
            <li class="name">
                <img src="./img/logo.png" height=200 width=200  />
            </li>
        </ul>
    </nav>

    <!--El contenido principal de esta pagina en la cual se encuentra el formulario de inicio-->
    <div class="content">

        <!--La informacion la manda con metodo POST al archivo iniciar_session.php el cual valida todos los datos incluso manda llamar una funcion de database_utilities que valida que el usuario exista, sino lo regresa a esta misma pagina-->
        <form class="log-in-form" method="POST" action="iniciar_session.php">

            <h3 class="text-center"> Login </h3>
            <label> Correo
                <input type="email" name="correo" placeholder="Correo">
            </label>

            <label> Contraseña
            <input type="password" name="contrasena" placeholder="Contraseña">
            </label>

            <p class="text-center"><input type="submit" class="button expanded" value="Log in"></p>

        </form>
    </div>

    <!-- Se manda llamar el footer pero sin el boton de inicio para que no pueda acceder a el hasta que no se haya logeado-->
    <?php require_once('footer.php'); ?>
</body>
</html>