<?php

    // Conexión a la base de datos
    $host = 'localhost';
    $dbname = 'zonabeauty';
    $username = 'root';
    $password = '';

    try {
        // Intentar la conexión
        $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        // Establecer el modo de error de PDO para que genere excepciones
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    }
    catch(PDOException $e) {
        die( $e->getMessage() ."<br>" . "No se ha podido conectar a la base de datos: ");
    }

?>