<div class="mt-5">
    <h3 class="display-4">Eliminar Hobbie</h3>
</div>
<div class="mt-5">
    <?php
        foreach ($hobbies as $hob){
    ?>
    <form method="post">
        <div class="row">
            <div class="col-md-4">
                <label class="form-label">Nombre</label>
                <input type="hidden" name="hob_id" value="<?php echo $hob['hob_id']; ?>">
                <input type="text"  class="form-control" name="hob_nombre" placeholder="Ingrese el departamento" value="<?php echo $hob['hob_nombre']; ?>" readonly>
            </div>
            <div class="col-md-4 mt-4">
                <input type="submit" value="Aceptar" class="btn btn-success mt-2" formaction="<?php echo getUrl("Hobbies","Hobbies","postDelete") ?>">
                <input type="submit" value="Cancelar" class="btn btn-danger mt-2" formaction="<?php echo getUrl("Hobbies","Hobbies","consult");?>">
            </div>
        </div>
    </form>
    <?php
        }
    ?>
</div>