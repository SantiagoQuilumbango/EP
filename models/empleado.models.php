<?php
//TODO: Requerimientos 
require_once('../config/conexion.php');

class Empleado
{
    /*TODO: Procedimiento para sacar todos los registros*/
    public function todos()
    {
        $con = new ClaseConectar();
        $con = $con->ProcedimientoConectar();
        $cadena = "SELECT * FROM Empleado";
        $datos = mysqli_query($con, $cadena);
        $con->close();
        return $datos;
    }

    /*TODO: Procedimiento para sacar un registro*/
    public function uno($ID_empleado)
    {
        $con = new ClaseConectar();
        $con = $con->ProcedimientoConectar();
        $cadena = "SELECT * FROM Empleado WHERE ID_empleado = '$ID_empleado'";
        $datos = mysqli_query($con, $cadena);
        $con->close();
        return $datos;
    }

    /*TODO: Procedimiento para insertar */
    public function insertar($Nombre, $Cargo, $Salario, $Fecha_contratacion)
    {
        $con = new ClaseConectar();
        $con = $con->ProcedimientoConectar();
        $cadena = "INSERT INTO Empleado (Nombre, Cargo, Salario, Fecha_contratacion) VALUES ('$Nombre', '$Cargo', '$Salario', '$Fecha_contratacion')";
        $resultado = mysqli_query($con, $cadena);
        $con->close();
        return $resultado;
    }

    /*TODO: Procedimiento para actualizar */
    public function actualizar($ID_empleado, $Nombre, $Cargo, $Salario, $Fecha_contratacion)
    {
        $con = new ClaseConectar();
        $con = $con->ProcedimientoConectar();
        $cadena = "UPDATE Empleado SET Nombre = '$Nombre', Cargo = '$Cargo', Salario = '$Salario', Fecha_contratacion = '$Fecha_contratacion' WHERE ID_empleado = '$ID_empleado'";
        $resultado = mysqli_query($con, $cadena);
        $con->close();
        return $resultado;
    }

    /*TODO: Procedimiento para Eliminar */
    public function eliminar($ID_empleado)
    {
        $con = new ClaseConectar();
        $con = $con->ProcedimientoConectar();
        $cadena = "DELETE FROM Empleado WHERE ID_empleado = '$ID_empleado'";
        $resultado = mysqli_query($con, $cadena);
        $con->close();
        return $resultado;
    }
}

