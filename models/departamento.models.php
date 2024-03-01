<?php
//TODO: Requerimientos 
require_once('../config/conexion.php');

class Departamento
{
    /*TODO: Procedimiento para sacar todos los registros*/
    public function todos()
    {
        $con = new ClaseConectar();
        $con = $con->ProcedimientoConectar();
        $cadena = "SELECT * FROM Departamento";
        $datos = mysqli_query($con, $cadena);
        $con->close();
        return $datos;
    }

    /*TODO: Procedimiento para sacar un registro*/
    public function uno($ID_departamento)
    {
        $con = new ClaseConectar();
        $con = $con->ProcedimientoConectar();
        $cadena = "SELECT * FROM `Departamento` WHERE `ID_departamento` = '$ID_departamento'";
        $datos = mysqli_query($con, $cadena);
        $con->close();
        return $datos;
    }

    /*TODO: Procedimiento para insertar */
    public function insertar($Nombre, $Ubicacion, $Presupuesto, $Jefe)
    {
        $con = new ClaseConectar();
        $con = $con->ProcedimientoConectar();
        $cadena = "INSERT INTO Departamento (Nombre, Ubicacion, Presupuesto, Jefe) VALUES ('$Nombre', '$Ubicacion', '$Presupuesto', '$Jefe')";
        $resultado = mysqli_query($con, $cadena);
        $con->close();
        return $resultado;
    }

    /*TODO: Procedimiento para actualizar */
    public function actualizar($ID_departamento, $Nombre, $Ubicacion, $Presupuesto, $Jefe)
    {
        $con = new ClaseConectar();
        $con = $con->ProcedimientoConectar();
        $cadena = "UPDATE Departamento SET Nombre = '$Nombre', Ubicacion = '$Ubicacion', Presupuesto = '$Presupuesto', Jefe = '$Jefe' WHERE ID_departamento = '$ID_departamento'";
        $resultado = mysqli_query($con, $cadena);
        $con->close();
        return $resultado;
    }

    /*TODO: Procedimiento para Eliminar */
    public function eliminar($ID_departamento)
    {
        $con = new ClaseConectar();
        $con = $con->ProcedimientoConectar();
        $cadena = "DELETE FROM Departamento WHERE ID_departamento = '$ID_departamento'";
        $resultado = mysqli_query($con, $cadena);
        $con->close();
        return $resultado;
    }
}
