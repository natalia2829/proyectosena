<script>
function getGenero(genero){
    var url='http://localhost/opticaPrueba/Web/indexController.php?modulo=Paciente&controlador=Paciente&funcion=getGenero';
    $.ajax({
  method: "GET",
  url:url,
 
})
  .done(function( msg ) {
     
      var data=JSON.parse(msg);
      for(var i=0;i<data.length;i++){
        $("#gen_id").append("<option value='"+data[i].gen_id+"'>"+data[i].gen_nombre+"</option>");


      }
      $("#gen_id").val(genero);
     
  });  
}
function getEstrato(estrato){
    var url='http://localhost/opticaPrueba/Web/indexController.php?modulo=Paciente&controlador=Paciente&funcion=getEstrato';
    $.ajax({
  method: "GET",
  url:url,
 
})
  .done(function( msg ) {
     
      var data=JSON.parse(msg);
      for(var i=0;i<data.length;i++){
        $("#estr_id").append("<option value='"+data[i].estr_id+"'>"+data[i].estr_nombre+"</option>");


      }

      $("#estr_id").val(estrato);
  });  
}
    function getpaciente(paciente_id){
       
        var url='http://localhost/opticaPrueba/Web/indexController.php?modulo=Paciente&controlador=Paciente&funcion=getUpdate';
        console.log(url);
        $.ajax({
  method: "GET",
  url:url+'&pac_id='+paciente_id,
 
})
  .done(function( msg ) {
   var data=JSON.parse(msg);
   console.log(data);
    $("#pac_docum").val(data.pac_docum);
    $("#pac_nombre").val(data.pac_nombre);
    $("#pac_apellido").val(data.pac_apellido);
    $("#pac_direccion").val(data.pac_direccion);
    $("#pac_telefono").val(data.pac_telefono);
    getGenero(data.gen_id);
    getEstrato(data.estr_id);

   $("#staticBackdrop").modal("show");
  });
    }
</script>
<div class="mt-5">
    <h3 class="display-4">Consultar Pacientes</h3>
</div>
<div class="mt-5">
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Cedula</th>
                <th>Nombres</th>
                <th>Apellidos</th>
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
                    <td><?=$pac['pac_docum']?></td>
                    <td><?=$pac['pac_nombre']?></td>
                    <td><?=$pac['pac_apellido']?></td>
                    <td><?=$pac['gen_nombre']?></td>
                    <td><?=$pac['estr_nombre']?></td>
                    <td><button class='btn btn-primary' onclick="getpaciente(<?=$pac['pac_id'];?>)">Editar</button></td>
                    <td><a href="<?=geturl('Paciente', 'Paciente', 'getDelete', array('pac_id'=>$pac['pac_id']))?>"><button class='btn btn-danger'>Eliminar</button></a></td>    
                    <td><a href="<?= getUrl('Historia','Historia','getInsert', array('pac_id'=>$pac['pac_id']))?>"><button class='btn btn-warning'>Crear historia</button></a></td>    
                    <td><a href="<?= getUrl('Historia','Historia','consult', array('pac_id'=>$pac['pac_id']))?>"><button class='btn btn-success'>Ver historia</button></a></td>    
                    <td></td>
                </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
    
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Editar paciente</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
<div class="mt-5">
   
    <form action="<?php echo getUrl("Paciente","Paciente","postUpdate") ?>" method="post">
        <div class="row">
        <div class="col-md-4">
                <label class="form-label">Documento</label>
                <input type="number" class="form-control" id="pac_docum" name="pac_docum" placeholder="Ingrese el departamento" >
            </div>
            <div class="col-md-4">
                <label class="form-label">Nombre</label>
                <input type="hidden" name="pac_id" value="<?php echo $pac['pac_id']; ?>">
                <input type="text" class="form-control" id="pac_nombre" name="pac_nombre" placeholder="Ingrese el nombre" >
            </div>
            <div class="col-md-4">
                <label class="form-label">Apellido</label>
                <input type="text" class="form-control" id="pac_apellido" name="pac_apellido" placeholder="Ingrese el apellido" >
            </div>
            <div class="col-md-4">
                <label class="form-label">Direccion</label>
                <input type="text" class="form-control" id="pac_direccion" name="pac_direccion" placeholder="Ingrese el apellido" >
            </div>
            <div class="col-md-4">
                <label class="form-label">Telefono</label>
                <input type="text" class="form-control" id="pac_telefono" name="pac_telefono" placeholder="Ingrese el apellido"  >
            </div>
            <div class="col-md-4">
                <label class="form-label">Genero</label>
                <select id="gen_id" name="gen_id" class="form-control">
                    <option><--Seleccione--></option>
                    
                </select>
            </div>
            <div class="col-md-4">
                <label class="form-label">Estrato</label>
                <select id="estr_id" name="estr_id" class="form-control">
                    <option><--Seleccione--></option>
                  
                   
                </select>
            </div>
            <div class="col-md-4 mt-4">
                <input type="submit" value="Enviar" class="btn btn-success mt-2">
            </div>
        </div>
    </form>
    
</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>
</div>