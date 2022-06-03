<div class="mt-5">
    <h3 class="display-4">Eliminar Historia</h3>
</div>
<div class="mt-5">
    <?php
        foreach ($historias as $hist){
    ?>
    <form action="<?php echo getUrl("Historia","Historia","postUpdate") ?>" method="post">
        <div class="row">
        <div class="col-md-4">
                <label class="form-label">Motivo</label>
                <input type="hidden" name="hist_id" value="<?php echo $hist['hist_id']; ?>">
                <input type="text" class="form-control" name="hist_motv" placeholder="Ingrese el motivo" value="<?php echo $hist['hist_motv']; ?>" readonly>
            </div>
            <div class="col-md-4">
                <label class="form-label">Recom</label>
                <input type="text" class="form-control" name="hist_recom" placeholder="Ingrese el nombre del paciente" value="<?php echo $hist['hist_recom']; ?>" readonly>
            </div>
            <div class="col-md-4">
                <label class="form-label">Paciente</label>
                <select name="pac_id" class="form-control" readonly>
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
                <input type="submit" value="Aceptar" class="btn btn-success mt-2" formaction="<?php echo getUrl("Historia","Historia","postDelete") ?>">
                <input type="submit" value="Cancelar" class="btn btn-danger mt-2" formaction="<?php echo getUrl("Historia","Historia","consult");?>">
            </div>
        </div>
    </form>
    <?php
        }
    ?>
</div>            

