<?php require_once('../html/head2.php')  ?>

<!-- Basic Bootstrap Table -->
<div class="card">
    <button type="button" class="btn btn-outline-secondary"  data-bs-toggle="modal" data-bs-target="#ModalEmpleado">Nuevo Empleado</button>


  <!-- Lista de Empleados -->
<h5 class="card-header">Lista de Empleados</h5>
<div class="table-responsive text-nowrap">
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Cargo</th>
                <th>Salario</th>
                <th>Fecha de Contratacion</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody class="table-border-bottom-0" id="ListaEmpleados">
            <!-- Aquí se listarían los empleados -->
        </tbody>
    </table>
</div>

<!-- Modal Empleado -->

<div class="modal" tabindex="-1" id="ModalEmpleado">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tituloModal"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form id="form_empleado" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="Nombre">Nombre</label>
                        <input type="text" name="Nombre" id="Nombre" class="form-control" placeholder="Ingrese el nombre del empleado" required>
                    </div>
                    <div class="form-group">
                        <label for="Cargo">Cargo</label>
                        <input type="text" name="Cargo" id="Cargo" class="form-control" placeholder="Ingrese el cargo del empleado" required>
                    </div>
                    <div class="form-group">
                        <label for="Salario">Salario</label>
                        <input type="text" name="Salario" id="Salario" class="form-control" placeholder="Ingrese el salario del empleado" required>
                    </div>
                    <div class="form-group">
                        <label for="FechaContratacion">Fecha de Contratacion</label>
                        <input type="text" name="FechaContratacion" id="FechaContratacion" class="form-control" placeholder="Ingrese la fecha de contratacion" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!--Falta contraseña y algo mas-->






<?php require_once('../html/scripts2.php') ?>

<script src="./empleado.js"></script>

