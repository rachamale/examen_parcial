<h1 class="text-center">ASIGNAR PERMISOS</h1>
<div class="row justify-content-center mb-5">
    <form class="col-lg-8 border bg-light p-3" id="formularioPermiso">
        <input type="hidden" name="permiso_id" id="permiso_id">
        <div class="row mb-3">
            <div class="col">
                <label for="permiso_usuario">USUARIO</label>
                <select name="permiso_usuario" id="permiso_usuario" class="form-control">
                    <option value="">SELECCIONE...</option>
                    <?php foreach ($usuarios as $usuario): ?>
                        <option value="<?= $usuario['usu_id'] ?>"><?= $usuario['usu_nombre'] ?></option>
                    <?php endforeach ?>
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="permiso_rol">ASIGNAR UN ROL</label>
                <select name="permiso_rol" id="permiso_rol" class="form-control">
                    <option value="">SELECCIONE...</option>
                    <?php foreach ($roles as $rol): ?>
                        <option value="<?= $rol['rol_id'] ?>"><?= $rol['rol_nombre'] ?></option>
                    <?php endforeach ?>
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <button type="submit" form="formularioPermiso" id="btnGuardar" data-saludo="hola"
                    class="btn btn-primary w-100">Guardar</button>
            </div>
            <div class="col">
                <button type="button" id="btnModificar" class="btn btn-warning w-100">Modificar</button>
            </div>
            <div class="col">
                <button type="button" id="btnBuscar" class="btn btn-info w-100">Buscar</button>
            </div>
            <div class="col">
                <button type="button" id="btnCancelar" class="btn btn-danger w-100">Cancelar</button>
            </div>
        </div>
    </form>
</div>
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div id="formularioModificarContraseña" style="display: none;" class="bg-light p-4 rounded">
                <h2 class="mb-3">Modificar Contraseña</h2>
                <form>
                    <div class="mb-3">
                        <label for="nuevaContraseña" class="form-label">Contraseña Actual:</label>
                        <input type="password" id="nuevaContraseña" name="nuevaContraseña" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="nuevaContraseña" class="form-label">Nueva Contraseña:</label>
                        <input type="password" id="nuevaContraseña" name="nuevaContraseña" class="form-control">
                    </div>
                    <button id="btnGuardarContraseña" class="btn btn-primary">Guardar</button>
                    <button id="btnCancelarContraseña" class="btn btn-danger">Cancelar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<h1>Datatable de Permisos</h1>
<div class="row justify-content-center">
    <div class="col table-responsive">
        <table id="tablaPermisos" class="table table-bordered table-hover">
        </table>
    </div>
</div>
<script src="<?= asset('./build/js/permiso/index.js') ?>"></script>