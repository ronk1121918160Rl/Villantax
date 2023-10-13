<?php
    	require_once 'login.php';
        $conexion = pg_connect('host='.$hn.' port=5432 dbname='.$db.' user='.$un.' password='.$pw.'');

echo password_hash("", PASSWORD_DEFAULT)."\n";

?>
