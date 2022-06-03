<div class="mt-5">
    <h3 class="display-4">Consultar Usuarios</h3>
</div>
<div class="mt-5">
    
    <form action="<?php echo getUrl("Usuario","Usuario","postConsult") ?>" method="post">
        <table class="table">
            <tr>
                <td><input type="text" name="usu_nombre" placeholder="Ingrese el nombre" class="form-control"></td>
                <td><input type="text" name="usu_docum" placeholder="Ingrese el documento" class="form-control"></td>
                <td><select name="rol_id" class="form-control">
                <option value="">Cualquiera</option>
                <?php
                    foreach($roles as $rol){
                ?>
                <option value="<?php echo $rol['rol_id'] ?>"><?php echo $rol['rol_nombre'] ?></option>
                <?php
                    }
                ?>
                </select>
                </td>
                <td><input type="submit" value="Buscar" class="btn btn-primary"></td>
            </tr>
        </table>
    </form>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Id</th>
                <th>Documento</th>
                <th>Nombre</th>
                <th>Clave</th>
                <th>Rol</th>
                <th colspan="2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($usuarios as $usu){
                ?>
                <tr>
                <td><?php echo $usu['usu_id']; ?></td>
                <td><?php echo $usu['usu_docum']; ?></td>
                <td><?php echo $usu['usu_nombre']; ?></td>
                <td><?php echo $usu['usu_clave']; ?></td>
                <td><?php echo $usu['rol_id']; ?></td>
                <td><a href="<?=geturl('Usuario', 'Usuario', 'getUpdate', array('usu_id'=>$usu['usu_id']))?>"><button class='btn btn-primary'>Editar</button></a></td>
                <td><a href="<?=geturl('Usuario', 'Usuario', 'getDelete', array('usu_id'=>$usu['usu_id']))?>"><button class='btn btn-danger'>Eliminar</button></a></td>
    
                <td></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>