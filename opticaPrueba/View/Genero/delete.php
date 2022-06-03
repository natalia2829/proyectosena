<div class="mt-5">
    <h3 class="display-4">Eliminar Genero</h3>
</div>
<div class="mt-5">
    <?php
        foreach ($generos as $gene){
    ?>
    <form method="post">
        <div class="row">
            <div class="col-md-4">
                <label class="form-label">Nombre</label>
                <input type="hidden" name="gen_id" value="<?php echo $gene['gen_id']; ?>">
                <input type="text"  class="form-control" name="gen_nombre" placeholder="Ingrese el departamento" value="<?php echo $gene['gen_nombre']; ?>" readonly>
            </div>
            <div class="col-md-4 mt-4">
                <input type="submit" value="Aceptar" class="btn btn-success mt-2" formaction="<?php echo getUrl("Genero","Genero","postDelete") ?>">
                <input type="submit" value="Cancelar" class="btn btn-danger mt-2" formaction="<?php echo getUrl("Genero","Genero","consult");?>">
            </div>
        </div>
    </form>
    <?php
        }
    ?>
</div>