<?php
error_reporting(0);
/*TODO: Requerimientos */
require_once('../config/sesiones.php');
require_once("../models/departamento.models.php");

$Departamentos = new Departamento;

switch ($_GET["op"]) {
    case 'todos':
        $datos = array();
        $datos = $Departamentos->todos();
        while ($row = mysqli_fetch_assoc($datos)) {
            $todos[] = $row;
        }
        echo json_encode($todos);
        break;

    case 'uno':
        $ID_departamento = $_POST["ID_departamento"];
        $datos = array();
        $datos = $Departamentos->uno($ID_departamento);
        $res = mysqli_fetch_assoc($datos);
        echo json_encode($res);
        break;

    case "insertar":
        $Nombre = $_POST["Nombre"];
        $Ubicacion = $_POST["Ubicacion"];
        $Presupuesto = $_POST["Presupuesto"];
        $Jefe = $_POST["Jefe"];
        $datos = array();
        $datos = $Departamentos->insertar($Nombre, $Ubicacion, $Presupuesto, $Jefe);
        echo json_encode($datos);
        break;

    case 'actualizar':
        $ID_departamento = $_POST["ID_departamento"];
        $Nombre = $_POST["Nombre"];
        $Ubicacion = $_POST["Ubicacion"];
        $Presupuesto = $_POST["Presupuesto"];
        $Jefe = $_POST["Jefe"];
        $datos = array();
        $datos = $Departamentos->actualizar($ID_departamento, $Nombre, $Ubicacion, $Presupuesto, $Jefe);
        echo json_encode($datos);
        break;

    case 'eliminar':
        $ID_departamento = $_POST["ID_departamento"];
        $datos = array();
        $datos = $Departamentos->eliminar($ID_departamento);
        echo json_encode($datos);
        break;
}

