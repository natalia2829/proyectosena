<div class="mt-5">
    <h3 class="display-4">Consultar Historias</h3>
</div>
<div class="mt-5">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Id</th>
                <th>Paciente</th>
                <th>Motivo</th>
                <th>Recomendaciones</th>
                <th colspan="2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($historias as $hist){
                ?>
                <tr>
                <td><?php echo $hist['hist_id']; ?></td>
                <td><?php echo $hist['pac_id']; ?></td>
                <td><?php echo $hist['hist_motv']; ?></td>
                <td><?php echo $hist['hist_recom']; ?></td>
                <td><a href="<?=geturl('Historia', 'Historia', 'getUpdate', array('hist_id'=>$hist['hist_id']))?>"><button class='btn btn-primary'>Editar</button></a></td>
                <td><a href="<?=geturl('Historia', 'Historia', 'getDelete', array('hist_id'=>$hist['hist_id']))?>"><button class='btn btn-danger'>Eliminar</button></a></td>    
                <td></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>