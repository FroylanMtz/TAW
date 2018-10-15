<?php
session_start();

if( isset($_SESSION['verificado']) ){

    echo 'Esta es tu pagina privada';

}else{

    header('Location: sesion3a.php?error=fuera');
}


?>