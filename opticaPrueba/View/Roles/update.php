<div class="mt-5">
    <h3 class="display-4">Editar Rol</h3>
</div>
<div class="mt-5">
    <?php
        foreach($roles as $rol){
    ?>
    <form action="<?php echo getUrl("Roles","Roles","postUpdate") ?>" method="post">
        <div class="row">
            <div class="col-md-4">
                <label class="form-label">Nombre</label>
                <input type="hidden" name="rol_id" value="<?php echo $rol['rol_id']; ?>">
                <input type="text" class="form-control" name="rol_nombre" placeholder="Ingrese el nombre del paciente" value="<?php echo $rol['rol_nombre']; ?>">
            </div>
            <div class="col-md-4 mt-4">
                <input type="submit" value="Enviar" class="btn btn-success mt-2">
            </div>
        </div>
    </form>
    <?php
        }
    ?>
</div>