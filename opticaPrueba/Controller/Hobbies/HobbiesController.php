<?php

include_once '../model/Hobbies/HobbiesModel.php';

class HobbiesController{

    public function getInsert(){
        include_once '../view/Hobbies/insert.php';        
    }

    public function postInsert(){
        $obj=new HobbiesModel();

        $hob_id=$obj->autoincrement("hob_id","hobbies");
        $hob_nombre=$_POST['hob_nombre'];
        $sql="INSERT INTO hobbies VALUES($hob_id,'$hob_nombre')";
        $ejecutar=$obj->insert($sql);
        if ($ejecutar){
            echo redirect(getUrl("Hobbies","Hobbies","getInsert"));
        }else{
            echo "No papi";
        }
    }

    public function consult(){
        $obj=new HobbiesModel();
        $sql="SELECT * FROM hobbies";
        $hobbies=$obj->consult($sql);
        include_once '../view/Hobbies/consult.php';
    }

    public function getUpdate(){
        $obj=new HobbiesModel();
        $hob_id=$_GET['hob_id'];
        $sql="SELECT * FROM hobbies WHERE hob_id= $hob_id";
        $hobbies=$obj->consult($sql);
        include_once '../view/Hobbies/update.php';
    }

    public function postUpdate(){
        $obj=new HobbiesModel();
        $hob_id=$_POST['hob_id'];
        $hob_nombre=$_POST['hob_nombre'];
        $sql="UPDATE hobbies SET hob_nombre='$hob_nombre' WHERE hob_id = $hob_id";
        $ejecutar=$obj->update($sql);
        if($ejecutar){
            echo redirect(getUrl("Hobbies","Hobbies","consult"));
        }else{
            echo "No papi";
        }
    }

    public function getDelete(){
        $obj=new HobbiesModel();
        $hob_id=$_GET['hob_id'];
        $sql="SELECT * FROM hobbies WHERE hob_id= $hob_id";
        $hobbies=$obj->consult($sql);
        include_once '../view/Hobbies/delete.php';
    }

    public function postDelete(){
        $obj=new HobbiesModel();
        $hob_id= $_POST['hob_id'];
        $sql="DELETE FROM hobbies WHERE hob_id=$hob_id";
        $ejecutar=$obj->delete($sql);
        if($ejecutar){
            redirect(getUrl("Hobbies","Hobbies","consult"));
        }else{
            echo "Error Papi";
        }
    }
}

?>