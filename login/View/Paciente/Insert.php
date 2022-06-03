<div class="mt-5">
    <h3 class="display-4">Registrar Paciente</h3>
</div>
<div class="mt-5">
    <form action="<?php echo getUrl("Paciente","Paciente","postInsert") ?>" method="post">
        <div class="row">
        <div class="col-md-4">
                <label class="form-label">Cedula</label>
                <input type="number" class="form-control" name="pac_docum" placeholder="Ingrese el numero de documento del paciente" required>
            </div>
            <div class="col-md-4">
                <label class="form-label">Nombre</label>
                <input type="text" class="form-control" name="pac_nombre" placeholder="Ingrese el nombre del paciente" required>
            </div>
            <div class="col-md-4">
                <label class="form-label">Apellidos</label>
                <input type="text" class="form-control" name="pac_apellido" placeholder="Ingrese el paciente">
            </div>
            <div class="col-md-4">
                <label class="form-label">Direcci&oacute;n</label>
                <input type="text" class="form-control" name="pac_direccion" placeholder="Ingrese la direcci&oacute;n del paciente">
            </div>
            <div class="col-md-4">
                <label class="form-label">N&uacute;mero de telefono</label>
                <input type="number" class="form-control" name="pac_telefono" placeholder="Ingrese el numero de telefono del paciente">
            </div>
            <div class="col-md-4">
                <label class="form-label">Genero</label>
                <select name="gen_id" class="form-control">
                    <option><--Seleccione--></option>
                    <?php
                    foreach ($generos as $gene){
                        ?>
                        <option value="<?=$gene['gen_id'] ?>"> <?=$gene['gen_nombre'] ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="col-md-4">
                <label class="form-label">Estratos</label>
                <select name="estr_id" class="form-control">
                    <option><--Seleccione--></option>
                    <?php
                    foreach ($estratos as $estr){
                        ?>
                        <option value="<?=$estr['estr_id'] ?>"> <?=$estr['estr_nombre'] ?></option>
                    <?php
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