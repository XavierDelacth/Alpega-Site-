

<?php

    
    session_start();
    session_unset();
    session_destroy();

    header("Location: http://projetofinal.test/Administrador.php");

    
?>