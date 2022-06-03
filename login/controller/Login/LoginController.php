<?php

include_once '../Model/Login/LoginModel.php';

class LoginController{
    public function getLogin(){
        $obj= new LoginModel();
        $sql="SELECT * FROM roles";
        $roles=$obj->consult($sql);
        include_once 'login.php';
    }

    public function validarInvitado(){
$obj= new LoginModel();
$nombre = $_POST ['nombre'];
$apellido = $_POST ['apellido'];
$correo = $_POST['correo'];

$sql= "INSERT INTO visitas values ('$nombre' , '$apellido' , '$correo' )";;

$query =$obj->insert($sql);


if ($query) {
    echo redirect(getUrl('Login','Login','validadoInvitado'));

}else {
    
    echo redirect(getUrl('Login','Login','error'));

}
    }

    public function validar(){
    $obj= new LoginModel();
    $documento=$_POST['documento'];
    $contraseña=$_POST['contraseña'];
    session_start();
    $_SESSION['documento']=$documento;


    $sql="SELECT * FROM usuarios where usu_docum='$documento' and usu_clave='$contraseña'";

    $resultado=$obj->consult($sql);

    foreach ($resultado as $resul){
    if($resul['rol_id']==1){ //administrador
        echo redirect("http://localhost/opticaPrueba/Web");

    }else
    if($resul['rol_id']==2){ //optometra
        echo redirect("http://localhost/opticaPrueba/Web");
    }
else{
    echo "error";
    }
    }
    }

    public function validadoOptometra(){
        include_once 'optometra.php';
    }
    public function validadoAdmin(){
        include_once 'visitante.php';
    }
    public function validadoInvitado(){
        include_once 'visitante.php';
    }
    public function error(){
        include_once 'index.php';
    }
}

?>