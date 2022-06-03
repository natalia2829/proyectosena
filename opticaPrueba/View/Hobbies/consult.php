<div class="mt-5">
    <h3 class="display-4">Consultar Hobbies</h3>
</div>
<div class="mt-5">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Id</th>
                <th>Hobbies</th>
                <th colspan="2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($hobbies as $hob){
                ?>
                <tr>
                <td><?php echo $hob['hob_id']; ?></td>
                <td><?php echo $hob['hob_nombre']; ?></td>
                <td><a href="<?=geturl('Hobbies', 'Hobbies', 'getUpdate', array('hob_id'=>$hob['hob_id']))?>"><button class='btn btn-primary'>Editar</button></a></td>
                <td><a href="<?=geturl('Hobbies', 'Hobbies', 'getDelete', array('hob_id'=>$hob['hob_id']))?>"><button class='btn btn-danger'>Eliminar</button></a></td>
    
                <td></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>