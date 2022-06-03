<?php

include_once '../model/Usuario/UsuarioModel.php';

class UsuarioController{

    public function getInsert(){
        $obj=new UsuarioModel();
        $sql="SELECT * FROM roles";
        $roles=$obj->consult($sql);
        include_once '../view/Usuario/insert.php';        
    }

    public function postInsert(){
        $obj=new UsuarioModel();

        $usu_id=$obj->autoincrement("usu_id","usuarios");
        $usu_docum=$_POST['usu_docum'];
        $usu_nombre=$_POST['usu_nombre'];
        $usu_clave=$_POST['usu_clave'];
        $rol_id=$_POST['rol_id'];
        $sql="INSERT INTO usuarios VALUES($usu_id,$usu_docum,'$usu_nombre','$usu_clave',$rol_id)";
        $ejecutar=$obj->insert($sql);
        if ($ejecutar){
            echo redirect(getUrl("Usuario","Usuario","getInsert"));
        }else{
            echo "No papi";
        }
    }

    public function consult(){
        $obj=new UsuarioModel();
        $sql="SELECT * FROM usuarios";
        $usuarios=$obj->consult($sql);
        $sql="SELECT * FROM roles";
        $roles=$obj->consult($sql);
        include_once '../view/Usuario/consult.php';
    }

    public function postConsult(){
        $obj=new UsuarioModel();
        $sql="SELECT * FROM usuarios";
        if (!empty($_POST['usu_nombre'])){
            $usu_nombre=$_POST['usu_nombre'];
            $sql.=" WHERE usu_nombre LIKE '%$usu_nombre%'";
            if(!empty($_POST['usu_docum'])){
                $usu_docum=$_POST['usu_docum'];
                $sql.=" AND usu_docum=$usu_docum";
            }
            if(!empty($_POST['rol_id'])){
                $rol_id=$_POST['rol_id'];
                $sql.=" AND rol_id=$rol_id";
            }  
        }/* elseif (isset($_POST['usu_docum'])){
            $usu_docum=$_POST['usu_docum'];
            $sql.=" WHERE usu_docum=$usu_docum";
            /* if(isset($_POST['rol_id'])){
                $rol_id=$_POST['rol_id'];
                $sql.="AND rol_id LIKE $rol_id";
            } 
        }elseif (isset($_POST['rol_id'])){
            $rol_id=$_POST['rol_id'];
            $sql=" WHERE rol_id=$rol_id";
        }else{
             $sql="SELECT * FROM usuarios"; 
        } */
        
        $usuarios=$obj->consult($sql);
        $sql="SELECT * FROM roles";
        $roles=$obj->consult($sql);
        include_once '../view/Usuario/consult.php';
    }

    public function getUpdate(){
        $obj=new UsuarioModel();
        $usu_id=$_GET['usu_id'];
        $sql="SELECT * FROM usuarios WHERE usu_id= $usu_id";
        $usuarios=$obj->consult($sql);
        $sql="SELECT * FROM roles";
        $roles=$obj->consult($sql);
        include_once '../view/Usuario/update.php';
    }

    public function postUpdate(){
        $obj=new UsuarioModel();
        $usu_id=$_POST['usu_id'];
        $usu_docum=$_POST['usu_docum'];
        $usu_nombre=$_POST['usu_nombre'];
        $usu_clave=$_POST['usu_clave'];
        $rol_id=$_POST['rol_id'];
        $sql="UPDATE usuarios SET usu_docum=$usu_docum, usu_nombre='$usu_nombre',usu_clave='$usu_clave', rol_id=$rol_id WHERE usu_id = $usu_id";
        $ejecutar=$obj->update($sql);
        if($ejecutar){
            echo redirect(getUrl("Usuario","Usuario","consult"));
        }else{
            echo "No papi";
        }
    }

    public function getDelete(){
        $obj=new UsuarioModel();
        $usu_id=$_GET['usu_id'];
        $sql="SELECT * FROM usuarios WHERE usu_id= $usu_id";
        $usuarios=$obj->consult($sql);
        $sql="SELECT * FROM roles";
        $roles=$obj->consult($sql);
        include_once '../view/Usuario/delete.php';
    }

    public function postDelete(){
        $obj=new UsuarioModel();
        $usu_id= $_POST['usu_id'];
        $sql="DELETE FROM usuarios WHERE usu_id=$usu_id";
        $ejecutar=$obj->delete($sql);
        if($ejecutar){
            redirect(getUrl("Usuario","Usuario","consult"));
        }else{
            echo "Error Papi";
        }
    }
}

?>