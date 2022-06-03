<div class="mt-5">
    <h3 class="display-4">Consultar Roles</h3>
</div>
<div class="mt-5">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Id</th>
                <th>Roles</th>
                <th colspan="2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($roles as $rol){
                ?>
                <tr>
                <td><?php echo $rol['rol_id']; ?></td>
                <td><?php echo $rol['rol_nombre']; ?></td>
                <td><a href="<?=geturl('Roles', 'Roles', 'getUpdate', array('rol_id'=>$rol['rol_id']))?>"><button class='btn btn-primary'>Editar</button></a></td>
                <td><a href="<?=geturl('Roles', 'Roles', 'getDelete', array('rol_id'=>$rol['rol_id']))?>"><button class='btn btn-danger'>Eliminar</button></a></td>
    
                <td></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>