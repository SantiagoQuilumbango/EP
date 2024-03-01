<?php
error_reporting(0);
/*TODO: Requerimientos */
require_once('../config/sesiones.php');
require_once("../models/empleado.models.php");
//require_once("../models/Accesos.models.php");
$Empleados = new Empleado;
//$Accesos = new Accesos;
switch ($_GET["op"]) {
        /*TODO: Procedimiento para listar todos los registros */
    case 'todos':
        $datos = array();
        $datos = $Empleados->todos();
        while ($row = mysqli_fetch_assoc($datos)) {
            $todos[] = $row;
        }
        echo json_encode($todos);
        break;
        /*TODO: Procedimiento para sacar un registro */
    case 'uno':
        $ID_empleado = $_POST["ID_empleado"];
        $datos = array();
        $datos = $Empleados->uno($ID_empleado);
        $res = mysqli_fetch_assoc($datos);
        echo json_encode($res);
        break;
    case "unoconCedula":
        $Cedula = $_POST["cedula"];
        $datos = array();
        $datos = $Empleados->unoconCedula($Cedula);
        $res = mysqli_fetch_assoc($datos);
        echo json_encode($res);
        break;
        /*TODO: Procedimiento para insertar */
    case 'insertar':
        $Nombre = $_POST["Nombre"];
        $Cargo = $_POST["Cargo"];
        $Salario = $_POST["Salario"];
        $Fecha_contratacion = $_POST["Fecha_contratacion"];
        $datos = array();
        $datos = $Empleados->insertar($Nombre, $Cargo, $Salario, $Fecha_contratacion);
        echo json_encode($datos);
        break;
        /*TODO: Procedimiento para actualizar */
    case 'actualizar':
        $ID_empleado = $_POST["ID_empleado"];
        $Nombre = $_POST["Nombre"];
        $Cargo = $_POST["Cargo"];
        $Salario = $_POST["Salario"];
        $Fecha_contratacion = $_POST["Fecha_contratacion"];
        $datos = array();
        $datos = $Empleados->actualizar($ID_empleado, $Nombre, $Cargo, $Salario, $Fecha_contratacion);
        echo json_encode($datos);
        break;
        /*TODO: Procedimiento para eliminar */
    case 'eliminar':
        $ID_empleado = $_POST["ID_empleado"];
        $datos = array();
        $datos = $Empleados->eliminar($ID_empleado);
        echo json_encode($datos);
        break;
        /*TODO: Procedimiento para insertar */
    case 'login':
        // Aquí se puede implementar el procedimiento de inicio de sesión para empleados, si es necesario
        break;
}
