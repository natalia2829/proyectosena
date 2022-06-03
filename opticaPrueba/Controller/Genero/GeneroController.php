<?php

include_once '../model/Genero/GeneroModel.php';

class GeneroController{

    public function getInsert(){
        include_once '../view/Genero/insert.php';        
    }

    public function postInsert(){
        $obj=new GeneroModel();

        $gen_id=$obj->autoincrement("gen_id","generos");
        $gen_nombre=$_POST['gen_nombre'];
        $sql="INSERT INTO generos VALUES($gen_id,'$gen_nombre')";
        $ejecutar=$obj->insert($sql);
        if ($ejecutar){
            echo redirect(getUrl("Genero","Genero","getInsert"));
        }else{
            echo "No papi";
        }
    }

    public function consult(){
        $obj=new GeneroModel();
        $sql="SELECT * FROM generos";
        $generos=$obj->consult($sql);
        include_once '../view/Genero/consult.php';
    }

    public function getUpdate(){
        $obj=new GeneroModel();
        $gen_id=$_GET['gen_id'];
        $sql="SELECT * FROM generos WHERE gen_id= $gen_id";
        $generos=$obj->consult($sql);
        include_once '../view/Genero/update.php';
    }

    public function postUpdate(){
        $obj=new GeneroModel();
        $gen_id=$_POST['gen_id'];
        $gen_nombre=$_POST['gen_nombre'];
        $sql="UPDATE generos SET gen_nombre='$gen_nombre' WHERE gen_id = $gen_id";
        $ejecutar=$obj->update($sql);
        if($ejecutar){
            echo redirect(getUrl("Genero","Genero","consult"));
        }else{
            echo "No papi";
        }
    }

    public function getDelete(){
        $obj=new GeneroModel();
        $gen_id=$_GET['gen_id'];
        $sql="SELECT * FROM generos WHERE gen_id= $gen_id";
        $generos=$obj->consult($sql);
        include_once '../view/Genero/delete.php';
    }

    public function postDelete(){
        $obj=new GeneroModel();
        $gen_id= $_POST['gen_id'];
        $sql="DELETE FROM generos WHERE gen_id=$gen_id";
        $ejecutar=$obj->delete($sql);
        if($ejecutar){
            redirect(getUrl("Genero","Genero","consult"));
        }else{
            echo "Error Papi";
        }
    }
}

?>