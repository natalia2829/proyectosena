<?php

include_once '../model/Historia/HistoriaModel.php';

class HistoriaController{

    public function getInsert(){
        $obj=new HistoriaModel();
        $sql="SELECT * FROM pacientes";
        $pacientes=$obj->consult($sql);
        include_once '../view/Historia/insert.php';        
    }

    public function postInsert(){
        $obj=new HistoriaModel();
        $hist_id=$obj->autoincrement('hist_id','historias');
        $hist_motv=$_POST['hist_motv'];
        $hist_esfod=$_POST['hist_esfod'];
        $hist_cilod=$_POST['hist_cilod'];
        $hist_ejeod=$_POST['hist_ejeod'];
        $hist_esfoi=$_POST['hist_esfoi'];
        $hist_ciloi=$_POST['hist_ciloi'];
        $hist_ejeoi=$_POST['hist_ejeoi'];
        $hist_diaod=$_POST['hist_diaod'];
        $hist_diaoi=$_POST['hist_diaoi'];
        $hist_recom=$_POST['hist_recom'];
        $pac_id=$_POST['pac_id'];
        $sql="INSERT INTO historias VALUES($hist_id,'$hist_motv','$hist_esfod','$hist_cilod','$hist_ejeod','$hist_esfoi','$hist_ciloi','$hist_ejeoi','$hist_diaod','$hist_diaoi','$hist_recom',$pac_id)";
        $ejecutar=$obj->insert($sql);
        if ($ejecutar){
            echo redirect(getUrl("Historia","Historia","getInsert"));
        }else{
            echo "No papi";
        }
    }

    public function consult(){
        $obj=new HistoriaModel();
        $sql="SELECT * FROM historias";
        $historias=$obj->consult($sql);
        include_once '../view/Historia/consult.php';
    }

    public function getUpdate(){
        $obj=new HistoriaModel();
        $hist_id=$_GET['hist_id'];
        $sql="SELECT * FROM historias WHERE hist_id= $hist_id";
        $historias=$obj->consult($sql);
        $sql="SELECT * FROM pacientes";
        $pacientes=$obj->consult($sql);
        include_once '../view/Historia/update.php';
    }

    public function postUpdate(){
        $obj=new HistoriaModel();
        $hist_id=$_POST['hist_id'];
        $hist_motv=$_POST['hist_motv'];
        $hist_esfod=$_POST['hist_esfod'];
        $hist_cilod=$_POST['hist_cilod'];
        $hist_ejeod=$_POST['hist_ejeod'];
        $hist_esfoi=$_POST['hist_esfoi'];
        $hist_ciloi=$_POST['hist_ciloi'];
        $hist_ejeoi=$_POST['hist_ejeoi'];
        $hist_diaod=$_POST['hist_diaod'];
        $hist_diaoi=$_POST['hist_diaoi'];
        $hist_recom=$_POST['hist_recom'];
        $pac_id=$_POST['pac_id'];
        $sql="UPDATE historias SET hist_id=$hist_id,hist_motv='$hist_motv', hist_esfod='$hist_esfod',hist_cilod='$hist_cilod',hist_ejeod='$hist_ejeod',hist_esfoi='$hist_esfoi',hist_ciloi='$hist_ciloi',hist_ejeoi='$hist_ejeoi',hist_diaod='$hist_diaod',hist_diaoi='$hist_diaoi',hist_recom='$hist_recom',pac_id=$pac_id WHERE hist_id=$hist_id";
        $ejecutar=$obj->update($sql);
        if($ejecutar){
            echo redirect(getUrl("Historia","Historia","consult"));
        }else{
            echo "No papi";
        }
    }

    public function getDelete(){
        $obj=new HistoriaModel();
        $hist_id=$_GET['hist_id'];
        $sql="SELECT * FROM historias WHERE hist_id= $hist_id";
        $historias=$obj->consult($sql);
        $sql="SELECT * FROM pacientes";
        $pacientes=$obj->consult($sql);
        include_once '../view/Historia/delete.php';
    }

    public function postDelete(){
        $obj=new HistoriaModel();
        $hist_id= $_POST['hist_id'];
        $sql="DELETE FROM historias WHERE hist_id=$hist_id";
        $ejecutar=$obj->delete($sql);
        if($ejecutar){
            redirect(getUrl("Historia","Historia","consult"));
        }else{
            echo "Error Papi";
        }
    }
}

?>