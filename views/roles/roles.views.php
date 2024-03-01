<?php require_once('../html/head2.php')  ?>

<!-- Basic Bootstrap Table -->
<div class="card">
    <button type="button" class="btn btn-outline-secondary" onclick="roles()" data-bs-toggle="modal" data-bs-target="#ModalRoles">Nuevo Rol</button>


    <!-- Lista de Roles -->
<h5 class="card-header">Lista de Roles</h5>
<div class="table-responsive text-nowrap">
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Rol</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody class="table-border-bottom-0" id="ListaRoles">
            <!-- Aquí se listarían los roles -->
        </tbody>
    </table>
</div>

<!-- Modal Roles -->

<div class="modal" tabindex="-1" id="ModalRoles">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tituloModal"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form id="form_roles" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="Rol">Rol</label>
                        <input type="text" name="Rol" id="Rol" class="form-control" placeholder="Ingrese el nombre del rol" required>
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

<script src="./usuarios.js"></script>
