<div class="mt-5">
    <h3 class="display-4">Editar Hobbie</h3>
</div>
<div class="mt-5">
    <?php
        foreach($hobbies as $hob){
    ?>
    <form action="<?php echo getUrl("Hobbies","Hobbies","postUpdate") ?>" method="post">
        <div class="row">
            <div class="col-md-4">
                <label class="form-label">Nombre</label>
                <input type="hidden" name="hob_id" value="<?php echo $hob['hob_id']; ?>">
                <input type="text" class="form-control" name="hob_nombre" placeholder="Ingrese el nombre del paciente" value="<?php echo $hob['hob_nombre']; ?>">
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