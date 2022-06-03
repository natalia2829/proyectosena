<div class="mt-5">
    <h3 class="display-4">Editar Historia</h3>
</div>
<div class="mt-5">
        <?php
            foreach($historias as $hist){
        ?>
    <form action="<?php echo getUrl("Historia","Historia","postUpdate") ?>" method="post">
        <div class="row">
            <div class="col-md-4">
                <label class="form-label">Motivo</label>
                <input type="hidden" name="hist_id" value="<?php echo $hist['hist_id']; ?>">
                <input type="text" class="form-control" name="hist_motv" placeholder="Ingrese el motivo" value="<?php echo $hist['hist_motv']; ?>" required>
            </div>
            <div class="col-md-4">
                <label class="form-label">Esfod</label>
                <input type="text" class="form-control" name="hist_esfod" placeholder="Ingrese el nombre del paciente" value="<?php echo $hist['hist_esfod']; ?>" required>
            </div>
            <div class="col-md-4">
                <label class="form-label">Cilod</label>
                <input type="text" class="form-control" name="hist_cilod" placeholder="Ingrese el nombre del paciente" value="<?php echo $hist['hist_cilod']; ?>" required>
            </div>
            <div class="col-md-4">
                <label class="form-label">Ejeod</label>
                <input type="text" class="form-control" name="hist_ejeod" placeholder="Ingrese el nombre del paciente"  value="<?php echo $hist['hist_ejeod']; ?>"required>
            </div>
            <div class="col-md-4">
                <label class="form-label">Esfoi</label>
                <input type="text" class="form-control" name="hist_esfoi" placeholder="Ingrese el nombre del paciente"  value="<?php echo $hist['hist_esfoi']; ?>"required>
            </div>
            <div class="col-md-4">
                <label class="form-label">Ciloi</label>
                <input type="text" class="form-control" name="hist_ciloi" placeholder="Ingrese el nombre del paciente" value="<?php echo $hist['hist_ciloi']; ?>" required>
            </div>
            <div class="col-md-4">
                <label class="form-label">Ejeoi</label>
                <input type="text" class="form-control" name="hist_ejeoi" placeholder="Ingrese el nombre del paciente" value="<?php echo $hist['hist_ejeoi']; ?>" required>
            </div>
            <div class="col-md-4">
                <label class="form-label">Diaod</label>
                <input type="text" class="form-control" name="hist_diaod" placeholder="Ingrese el nombre del paciente" value="<?php echo $hist['hist_diaod']; ?>" required>
            </div>
            <div class="col-md-4">
                <label class="form-label">Diaoi</label>
                <input type="text" class="form-control" name="hist_diaoi" placeholder="Ingrese el nombre del paciente" value="<?php echo $hist['hist_diaoi']; ?>" required>
            </div>
            <div class="col-md-4">
                <label class="form-label">Recom</label>
                <input type="text" class="form-control" name="hist_recom" placeholder="Ingrese el nombre del paciente" value="<?php echo $hist['hist_recom']; ?>" required>
            </div>
            <div class="col-md-4">
                <label class="form-label">Paciente</label>
                <select name="pac_id" class="form-control" >
                    <option><--Seleccione--></option>
                    <?php
                    foreach ($pacientes as $pac){
                        if ($pac['pac_id']==$hist['pac_id']){
                            $select=" selected";
                        }else{
                            $select="";
                        }
                        echo "<option value='".$pac['pac_id']."' ".$select.">".$pac['pac_nombre']."</option>";
                        ?>
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
    <?php
        }
    ?>
</div>    
