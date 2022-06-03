<div class="mt-5">
    <h3 class="display-4">Registrar Usuario</h3>
</div>
<div class="mt-5">
    <form action="<?php echo getUrl("Usuario","Usuario","postInsert") ?>" method="post">
        <div class="row">
            <div class="col-md-4">
                <label class="form-label">Documento</label>
                <input type="number" class="form-control" name="usu_docum" placeholder="Ingrese el nombre del paciente" required>
            </div>
            <div class="col-md-4">
                <label class="form-label">Nombre</label>
                <input type="text" class="form-control" name="usu_nombre" placeholder="Ingrese el nombre del paciente" required>
            </div>
            <div class="col-md-4">
                <label class="form-label">Clave</label>
                <input type="text" class="form-control" name="usu_clave" placeholder="Ingrese el nombre del paciente" required>
            </div>
            <div class="col-md-4">
                <label class="form-label">Rol</label>
                <select name="rol_id" class="form-control">
                    <option><--Seleccione--></option>
                    <?php
                    foreach ($roles as $rol){
                        echo "<option value='".$rol['rol_id']."' ".$select.">".$rol['rol_nombre']."</option>";               
                    }
                    ?>
                </select>
            </div>
            <div class="col-md-4 mt-4">
                <input type="submit" value="Enviar" class="btn btn-success mt-2">
            </div>
        </div>
    </form>
</div>