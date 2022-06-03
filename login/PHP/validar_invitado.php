<?php

$conexion=mysqli_connect("localhost","root","","historia_clinica");

$nombre = $_POST ['nombre'];
$apellido = $_POST ['apellido'];
$correo = $_POST['correo'];

$visita= "INSERT INTO visitas values ('$nombre' , '$apellido' , '$correo' )";;

$query = mysqli_query($conexion, $visita);


if ($query) {
    echo"<h1><script> alert ('CORRECTO')
    location.href = '../visitante.php';
    </script></h1>";

}else {
    
    echo "<h1><script> alert ('incorrecto');
    location.href = '../index.PHP';
    </script></h1>";
}
?>