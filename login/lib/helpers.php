<?php

function getUrl($modulo, $controlador, $funcion, $parametros=FALSE){
    $url= "index2.php?modulo=$modulo&controlador=$controlador&funcion=$funcion";

    if($parametros!=FALSE){
        foreach($parametros as $key=>$value){
            $url.="&$key=$value";
        }
    }
    return $url;
}

function redirect($url){
    echo "<script type='text/javascript'>"."window.location.href='$url'"."</script>";
}

function resolve(){
    $modulo=ucwords($_GET['modulo']);
    $controlador=ucwords($_GET['controlador']);
    $funcion=ucwords($_GET['funcion']);

    if (is_dir("../Controller/$modulo")){
        if(is_file("../Controller/$modulo/".$modulo."Controller.php")){

            include_once "../Controller/$modulo/".$controlador."Controller.php";

            $nombreClase=$controlador."Controller";
            $objeto= new $nombreClase();

            if (method_exists($objeto,$funcion)){
                $objeto->$funcion();
            }else{
                echo "La funcion no existe";
            }
        }else{
            echo "<br> El Controlador no existe";
        }
    }else{
        echo "<br> El Modulo no existe";
    }
}

?>