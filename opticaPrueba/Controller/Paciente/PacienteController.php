<?php

include_once '../model/Paciente/PacienteModel.php';

class PacienteController{

    public function getInsert(){
        $obj=new PacienteModel();
        $sql= "SELECT * FROM estratos";
        $estratos=$obj->consult($sql);
        $sql="SELECT * FROM generos";
        $generos=$obj->consult($sql);
        include_once '../view/Paciente/insert.php';        
    }

    public function postInsert(){
        $obj=new PacienteModel();
        $pac_id=$obj->autoincrement('pac_id','pacientes');
        $pac_docum=$_POST['pac_docum'];
        $pac_nombre=$_POST['pac_nombre'];
        $pac_direccion=$_POST['pac_direccion'];
        $pac_apellido=$_POST['pac_apellido'];
        $pac_telefono=$_POST['pac_telefono'];
        $gen_id=$_POST['gen_id'];
        $estr_id=$_POST['estr_id'];
        $sql="INSERT INTO pacientes VALUES($pac_id,$pac_docum,'$pac_nombre','$pac_apellido','$pac_direccion',$pac_telefono,$gen_id,$estr_id)";
        $ejecutar=$obj->insert($sql);
        if ($ejecutar){
            echo redirect(getUrl("Paciente","Paciente","getInsert"));
        }else{
            echo "No papi";
        }
    }

    public function consult(){
        $obj=new PacienteModel();
        $sql="SELECT p.pac_id,p.pac_docum, p.pac_nombre, p.pac_apellido, g.gen_nombre, e.estr_nombre FROM pacientes p, generos g, estratos e WHERE p.gen_id = g.gen_id AND p.estr_id=e.estr_id";
        $pacientes=$obj->consult($sql);
        include_once '../view/Paciente/consult.php';
    }

    public function getUpdate(){
      
        $obj=new PacienteModel();
        
       
        $pac_id=$_GET['pac_id'];
        
        $sql="SELECT * FROM pacientes WHERE pac_id= $pac_id";
        $pacientes=$obj->consult($sql);
        $paciente;
        foreach ($pacientes as $pac){
            $paciente=$pac;
        }
        
        $sql="SELECT * FROM estratos";
        $estratos=$obj->consult($sql);
        echo json_encode($paciente);
        //include_once '../view/Paciente/update.php';
    }
    public function getGenero(){
        $obj=new PacienteModel();
        $sql="SELECT * FROM generos";
        $generos=$obj->consult($sql);
        $array;
        $i=0;
        foreach ($generos as $gen){
            $array[$i] = $gen;
            $i++;
           
        }
        echo json_encode($array);

    }

    public function getEstrato(){
        $obj=new PacienteModel();
        $sql="SELECT * FROM estratos";
        $estratos=$obj->consult($sql);
        $array;
        $i=0;
        foreach ($estratos as $est){
            $array[$i] = $est;
            $i++;
           
        }
        echo json_encode($array);

    }

    public function postUpdate(){
        $obj=new PacienteModel();
        $pac_id=$_POST['pac_id'];
        $pac_docum=$_POST['pac_docum'];
        $pac_nombre=$_POST['pac_nombre'];
        $pac_apellido=$_POST['pac_apellido'];
        $pac_direccion=$_POST['pac_direccion'];
        $pac_telefono=$_POST['pac_telefono'];
        $gen_id=$_POST['gen_id'];
        $estr_id=$_POST['estr_id'];
        $sql="UPDATE pacientes SET pac_docum=$pac_docum, pac_nombre='$pac_nombre', pac_apellido='$pac_apellido', pac_direccion='$pac_direccion', pac_telefono='$pac_telefono', gen_id=$gen_id, estr_id=$estr_id WHERE pac_id = $pac_id";
        $ejecutar=$obj->update($sql);
        if($ejecutar){
            echo redirect(getUrl("Paciente","Paciente","consult"));
        }else{
            echo "No papi";
        }
    }

    public function getDelete(){
        $obj=new PacienteModel();
        $pac_id=$_GET['pac_id'];
        $sql="SELECT * FROM pacientes WHERE pac_id= $pac_id";
        $pacientes=$obj->consult($sql);
        $sql="SELECT * FROM generos";
        $generos=$obj->consult($sql);
        $sql="SELECT * FROM estratos";
        $estratos=$obj->consult($sql);
        include_once '../view/Paciente/delete.php';
    }

    public function postDelete(){
        $obj=new PacienteModel();
        $pac_id= $_POST['pac_id'];
        $sql="DELETE FROM pacientes WHERE pac_id=$pac_id";
        $ejecutar=$obj->delete($sql);
        if($ejecutar){
            redirect(getUrl("Paciente","Paciente","consult"));
        }else{
            echo "Error Papi";
        }
    }
}

?>