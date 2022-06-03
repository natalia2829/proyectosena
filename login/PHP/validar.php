<?php
$documento=$_POST['documento'];
$contraseña=$_POST['contraseña'];
session_start();

$_SESSION['documento']=$documento;

$conexion=mysqli_connect("localhost","root","","historia_clinica");

$consulta="SELECT * FROM usuarios where usu_docum='$documento' and usu_clave='$contraseña'";

$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas['rol_id']==1){ //administrador
    header("location:home.php");

}else
if($filas['rol_id']==2){ //optometra
header("location:optometra.php");
}
else{
    
   echo" <script>
    location.href = '../index.PHP';
    </script>";
}
mysqli_free_result($resultado);
mysqli_close($conexion);


?>