<div class="mt-5">
    <h3 class="display-4">Eliminar Paciente</h3>
</div>
<div class="mt-5">
    <?php
        foreach ($pacientes as $pac){
    ?>
    <form action="<?php echo getUrl("Paciente","Paciente","postUpdate") ?>" method="post">
        <div class="row">
        <div class="col-md-4">
                <label class="form-label">Documento</label>
                <input type="number" class="form-control" name="pac_docum" placeholder="Ingrese el departamento" value="<?php echo $pac['pac_docum']; ?>" readonly>
            </div>
            <div class="col-md-4">
                <label class="form-label">Nombre</label>
                <input type="hidden" name="pac_id" value="<?php echo $pac['pac_id']; ?>">
                <input type="text" class="form-control" name="pac_nombre" placeholder="Ingrese el nombre" value="<?php echo $pac['pac_nombre']; ?>" readonly>
            </div>
            <div class="col-md-4">
                <label class="form-label">Apellido</label>
                <input type="text" class="form-control" name="pac_apellido" placeholder="Ingrese el apellido" value="<?php echo $pac['pac_apellido']; ?>" readonly>
            </div>
            <div class="col-md-4">
                <label class="form-label">Direccion</label>
                <input type="text" class="form-control" name="pac_direccion" placeholder="Ingrese el apellido" value="<?php echo $pac['pac_direccion']; ?>" readonly>
            </div>
            <div class="col-md-4">
                <label class="form-label">Telefono</label>
                <input type="text" class="form-control" name="pac_telefono" placeholder="Ingrese el apellido" value="<?php echo $pac['pac_telefono']; ?>" readonly>
            </div>
            <div class="col-md-4">
                <label class="form-label">Genero</label>
                <select name="gen_id" class="form-control" disabled>
                    <option><--Seleccione--></option>
                    <?php
                    foreach ($generos as $gene){
                        if ($gene['gen_id']==$pac['gen_id']){
                            $select=" selected";
                        }else{
                            $select="";
                        }
                        echo "<option value='".$gene['gen_id']."' ".$select.">".$gene['gen_nombre']."</option>";

                        ?>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="col-md-4">
                <label class="form-label">Estrato</label>
                <select name="estr_id" class="form-control" disabled>
                    <option><--Seleccione--></option>
                    <?php
                    foreach ($estratos as $estr){
                        if ($estr['estr_id']==$pac['estr_id']){
                            $select=" selected";
                        }else{
                            $select="";
                        }
                        echo "<option value='".$estr['estr_id']."' ".$select.">".$estr['estr_nombre']."</option>";

                        ?>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="col-md-4 mt-4">
                <input type="submit" value="Aceptar" class="btn btn-success mt-2" formaction="<?php echo getUrl("Paciente","Paciente","postDelete") ?>">
                <input type="submit" value="Cancelar" class="btn btn-danger mt-2" formaction="<?php echo getUrl("Paciente","Paciente","consult");?>">
            </div>
        </div>
    </form>
    <?php
        }
    ?>
</div>