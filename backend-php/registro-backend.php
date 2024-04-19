<?php
session_start();
header("Content-type: application/json");
$datos = json_decode(file_get_contents("http//input"), true);
require("conexion.php");

if($_SERVER["REQUEST_METHOD"]==="POST" && isset($datos["urlAnfitrion"], $datos["usuario"])){
    $urlAnfitrion = $datos["urlanfitrion"];

    $consultaUrlAnfitrion = $conn->prepare("SELECT * FROM anfitrion WHERE nom_anfitrion = ?");
    $consultaUrlAnfitrion->bind_param("s", $urlAnfitrion);
    $consultaUrlAnfitrion->execute();

    $resultado = $consultaUrlAnfitrion->get_result();

    if($resultado->num_rows > 0){
        while($arrAnfitrion = $resultado->fetch_assoc()){
            $nom_anfitriobDB = $arrAnfitrion['nom_anfitrion'];
            if($nom_anfitriobDB === $urlAnfitrion){
                $registroActivo = true;
                exit;
            }else{
                $registroActivo = false;
            }
        }
        
        $consultaUrlAnfitrion->close();
    }
    
    if(!$registroActivo){
        echo json_encode(array("anfitrionNull"=>"No se encontro al anfitrion en la base de datos"));
    }else{
        $usuario = $datos["usuario"];
        $nombre = $datos["nombre"];
        $apellido = $datos["apellido"];
        $telefono = $datos["telefono"];
        $correo = $datos["correo"];
        $password = $datos["clave1"];
        $repitPass = $datos["clave2"];
        $estado = $datos["estado"];

        $idAnfitrion = $datos["idAnfitrion"];

        $fechacreacion = $datos["fechaCreacion"];
        $fechaActivacion = $datos["fechaActivacion"];
        $fechaDesactivacion =$datos["fechaDesactivacion"];

        $consultaRegistro = $conn->prepare("INSERT()");
    }
}