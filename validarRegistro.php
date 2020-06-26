<?php
    $errores = Array();
    $mensajeExitoso = Array();
    $nombrePais;
    $poblacion ;
    $fallecidos;
    $curados;
    $confirmados;

    obtenerValores($nombrePais,$poblacion,$fallecidos,$curados,$confirmados);
    if(validarEspaciosEnBlanco($nombrePais,$poblacion,$fallecidos,$curados,$confirmados)){
        array_push($errores,"<p class='error'>Debe completar todos los espacios</p>");
    }else{
        if(agregarRegistro($nombrePais,$poblacion,$fallecidos,$curados,$confirmados)){
            array_push($mensajeExitoso,"<p class='mensajeExitoso'>Agregado exitosamente</p>");

        }else{
            array_push($errores,"<p class='exito'>Se agrega de forma erronea</p>");

        }
        
        
    }

    recorrerElemento($errores);
    recorrerElemento($mensajeExitoso);

    function recorrerElemento($array){
        for($i=0;$i<count($array);$i++){
            echo $array[$i];
        }
    }

    function obtenerValores(&$nombrePais,&$poblacion,&$fallecidos,&$curados,&$confirmados){
        $nombrePais = $_POST['nombrePais'];
        $poblacion = $_POST['poblacion'];
        $fallecidos = $_POST['nFallecidos'];
        $curados = $_POST['nCurados'];
        $confirmados = $_POST['nConfirmados'];
    }

    function validarEspaciosEnBlanco($nombrePais,$poblacion,$fallecidos,$curados,$confirmados){
        if(empty($nombrePais) || empty($poblacion) || empty($fallecidos) || empty($curados) || empty($confirmados)){
            return true;
        }else{
            return false;

        }
        
    }

    function agregarRegistro($nombrePais,$poblacion,$fallecidos,$curados,$confirmados){
        include_once 'conexion.php';
        $queryInsert = "INSERT INTO pais(pais,confirmados,curados,fallecidos,poblacion) VALUES('$nombrePais','$confirmados','$curados','$fallecidos','$poblacion')";
        $consulta = $pdo->prepare($queryInsert);
        return $consulta->execute();
        //$consulta->fetchAll();
    }



?>