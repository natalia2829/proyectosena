<div class="mt-5">
    <h3 class="display-4">Consultar Generos</h3>
</div>
<div class="mt-5">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Id</th>
                <th>Generos</th>
                <th colspan="2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($generos as $gene){
                ?>
                <tr>
                <td><?php echo $gene['gen_id']; ?></td>
                <td><?php echo $gene['gen_nombre']; ?></td>
                <td><a href="<?=geturl('Genero', 'Genero', 'getUpdate', array('gen_id'=>$gene['gen_id']))?>"><button class='btn btn-primary'>Editar</button></a></td>
                <td><a href="<?=geturl('Genero', 'Genero', 'getDelete', array('gen_id'=>$gene['gen_id']))?>"><button class='btn btn-danger'>Eliminar</button></a></td>
    
                <td></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>