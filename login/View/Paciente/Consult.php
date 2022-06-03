<div class="mt-5">
    <h3 class="display-4">Consultar Pacientes</h3>
</div>
<div class="mt-5">
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Cedula</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Direccion</th>
                <th>Telefono</th>
                <th>Genero</th>
                <th>Estrato</th>
                <th colspan="2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($pacientes as $pac){
            ?>
                <tr>
                    <td><?=$pac['pac_id']?></td>
                    <td><?=$pac['pac_docum']?></td>
                    <td><?=$pac['pac_nombre']?></td>
                    <td><?=$pac['pac_apellido']?></td>
                    <td><?=$pac['pac_direccion']?></td>
                    <td><?=$pac['pac_telefono']?></td>
                    <td><?=$pac['gen_id']?></td>
                    <td><?=$pac['estr_id']?></td>
                    <td><a href="<?=geturl('Paciente', 'Paciente', 'getUpdate', array('pac_id'=>$pac['pac_id']))?>"><button class='btn btn-primary'>Editar</button></a></td>
                    <td><a href="<?=geturl('Paciente', 'Paciente', 'getDelete', array('pac_id'=>$pac['pac_id']))?>"><button class='btn btn-danger'>Eliminar</button></a></td>    
                    <td><a href="<?= getUrl('Historia','Historia','getInsert', array('pac_id'=>$pac['pac_id']))?>"><button class='btn btn-secundary'>Crear historia</button></a></td>    
                    <td></td>
                </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
</div>