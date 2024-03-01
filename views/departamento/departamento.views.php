<?php require_once('../html/head2.php')  ?>

<!-- Basic Bootstrap Table -->
<div class="card">
    <button type="button" class="btn btn-outline-secondary"  data-bs-toggle="modal" data-bs-target="#ModalDepartamentos">Nuevo Departamento</button>


  <!-- Lista de Departamentos -->
<h5 class="card-header">Lista de Departamentos</h5>
<div class="table-responsive text-nowrap">
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Ubicacion</th>
                <th>Presupuesto</th>
                <th>Jefe</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody class="table-border-bottom-0" id="ListaDepartamentos">
            <!-- Aquí se listarían los departamentos -->
        </tbody>
    </table>
</div>

<!-- Modal Departamentos -->

<div class="modal" tabindex="-1" id="ModalDepartamentos">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tituloModal"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form id="form_departamentos" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="Nombre">Nombre</label>
                        <input type="text" name="Nombre" id="Nombre" class="form-control" placeholder="Ingrese el nombre del departamento" required>
                    </div>
                    <div class="form-group">
                        <label for="Ubicacion">Ubicacion</label>
                        <input type="text" name="Ubicacion" id="Ubicacion" class="form-control" placeholder="Ingrese la ubicacion del departamento" required>
                    </div>
                    <div class="form-group">
                        <label for="Presupuesto">Presupuesto</label>
                        <input type="text" name="Presupuesto" id="Presupuesto" class="form-control" placeholder="Ingrese el presupuesto del departamento" required>
                    </div>
                    <div class="form-group">
                        <label for="Jefe">Jefe</label>
                        <input type="text" name="Jefe" id="Jefe" class="form-control" placeholder="Ingrese el jefe del departamento" required>
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

<script src="./departamento.js"></script>