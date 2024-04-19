<?php
session_start();
require("conexion.php");

header("Content-Type: application/json");

$datos = json_decode(file_get_contents("php://input"), true);

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($datos['usuario']) && isset($datos['password'])) {
    $usuario = $datos['usuario'];
    $password = $datos['password'];

    if (!is_string($usuario) || !is_string($password)) {
        echo json_encode(array("error" => "Datos no válidos."));
        exit;
    }

    $consulta = $conn->prepare("SELECT * FROM usuario WHERE usuario = ?");
    $consulta->bind_param("s", $usuario);
    $consulta->execute();

    if ($consulta->error) {
        echo json_encode(array("error" => "Error al ejecutar la consulta: " . $consulta->error));
        exit;
    }

    $resultado = $consulta->get_result();

    if ($resultado->num_rows > 0) {
        while($fila = $resultado->fetch_assoc()){
            $passwordBD = $fila['clave1'];
            $usuarioBD = $fila['usuario'];
            
            if ($password === $passwordBD && $usuario === $usuarioBD) {
                $_SESSION['usuarioId'] = $fila['id'];

                // Enviar un mensaje indicando la redirección
                echo json_encode(array("redirigir" => "perfil.php"));
                exit;
            } else {
                echo json_encode(array("error" => "Usuario o contraseña incorrectos."));
                exit;
            }
        }
    } else {
        echo json_encode(array("error" => "Usuario o contraseña incorrectos."));
    }

    $consulta->close();
    $conn->close();
} else {
    echo json_encode(array("error" => "Solicitud no válida."));
}
?>
