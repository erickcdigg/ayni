<?php
session_start();

require("conexion.php");

header("Content-Type: application/json");

if (!isset($_SESSION['usuarioId'])) {
    // Si el usuario no está autenticado, redirigirlo a la página de inicio de sesión o mostrar un mensaje de error
    echo json_encode(array("redireccion"=>"./inicio-sesion.php"));
    exit;
}

$usuarioID = $_SESSION['usuarioId'];

$sql = "SELECT * FROM usuario WHERE id = ?"; // Usar consultas preparadas para evitar inyección SQL
$consulta = $conn->prepare($sql);
$consulta->bind_param("i", $usuarioID); // Vincular parámetros
$consulta->execute();

$resultado = $consulta->get_result();

$datosDB = array(); // Inicializar el array aquí

if ($resultado->num_rows > 0) {
    while ($registro = $resultado->fetch_assoc()) {
        $datosDB[] = $registro; // Agregar cada registro al array
    }
    echo json_encode(array("objRegistro" => $datosDB)); // Finalizar la ejecución después del bucle
} else {
    echo json_encode(array("error" => "No se encontraron resultados."));
}

$consulta->close(); // Cerrar la consulta
$conn->close();
?>
