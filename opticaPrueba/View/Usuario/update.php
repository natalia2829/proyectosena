<div class="mt-5">
    <h3 class="display-4">Editar Usuario</h3>
</div>
<div class="mt-5">
    <?php
        foreach ($usuarios as $usuarios){
    ?>
    <form action="<?php echo getUrl("Usuario","Usuario","postUpdate") ?>" method="post">
        <div class="row">
        <div class="col-md-4">
                <label class="form-label">Documento</label>
                <input type="text" class="form-control" name="usu_docum" placeholder="Ingrese el departamento" value="<?php echo $usuarios['usu_docum']; ?>" >
            </div>
            <div class="col-md-4">
                <label class="form-label">Nombre</label>
                <input type="hidden" name="usu_id" value="<?php echo $usuarios['usu_id']; ?>">
                <input type="text" class="form-control" name="usu_nombre" placeholder="Ingrese el nombre" value="<?php echo $usuarios['usu_nombre']; ?>" >
            </div>
            <div class="col-md-4">
                <label class="form-label">Clave</label>
                <input type="text" class="form-control" name="usu_clave" placeholder="Ingrese el apellido" value="<?php echo $usuarios['usu_clave']; ?>" >
            </div>
            <div class="col-md-4">
                <label class="form-label">Rol</label>
                <select name="rol_id" class="form-control" >
                    <option><--Seleccione--></option>
                    <?php
                    foreach ($roles as $rol){
                        if ($rol['rol_id']==$usuarios['rol_id']){
                            $select=" selected";
                        }else{
                            $select="";
                        }
                        echo "<option value='".$rol['rol_id']."' ".$select.">".$rol['rol_nombre']."</option>";

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
