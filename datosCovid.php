<?php

    listarDatos();

    function obtenerDatos(){
            include("conexion.php");
            $queryTablaCovid = "SELECT *FROM pais";
            $consulta = $pdo->prepare($queryTablaCovid);
            $consulta->execute();
            return $resultado = $consulta->fetchAll();
        }

    function listarDatos(){
            $datos = obtenerDatos();
            foreach($datos as $dato):
                echo "<tr>".
                        "<td>".$dato['pais']."</td>".
                        "<td>".$dato['confirmados']."</td>". 
                        "<td>".$dato['curados']."</td>". 
                        "<td>".$dato['fallecidos']."</td>" .
                        "<td>".$dato['poblacion']."</td>".
                    "</tr>";
            endforeach;
        }
    
?>