<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "ayni";

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $database);

    // Verificar la conexión
    if ($conn->connect_error) {
        //die("La conexión ha fallado: " . $conn->connect_error);
    }

    //echo "Conexión exitosa a la base de datos";
    //header("Location: index.php");

    //$conn->close();
?>
