<div class="mt-5">
    <h3 class="display-4">Editar Genero</h3>
</div>
<div class="mt-5">
    <?php
        foreach($generos as $gene){
    ?>
    <form action="<?php echo getUrl("Genero","Genero","postUpdate") ?>" method="post">
        <div class="row">
            <div class="col-md-4">
                <label class="form-label">Nombre</label>
                <input type="hidden" name="gen_id" value="<?php echo $gene['gen_id']; ?>">
                <input type="text" class="form-control" name="gen_nombre" placeholder="Ingrese el nombre del paciente" value="<?php echo $gene['gen_nombre']; ?>">
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