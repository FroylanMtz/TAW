<html>
<head>
    <title>Sesiones | Ejercicio 2</title>
    <meta charset="UTF-8" />
</head>

    <body style="background-color: <?= $color ?> " >

        <?php

            if(isset($_GET['error'] ) ){

                if($_GET['error'] == 'si' ){
                    echo 'Tu usuario y/o contraseña no son correctos, intentalo de nuevo <br/>';
                }
                elseif ( $_GET['error'] == 'fuera' ){
                    echo 'No puedes entrar directamente en esta pagina. Introduce tu usuario y contrasena <br/>';
                }

            }
            
        ?>

        <form method="post" action="sesion3b.php">
            
            <label for="nombre"> Nombre del usuario </label>

            <input type="text" name="nombre" placeholder="Tu nombre" />

            <label for="pass" > Contraseña </label>

            <input type="password" name="pass" />

            <br/>

            <input type="submit" value="Entrar" />

        </form>

    </body>
</html>