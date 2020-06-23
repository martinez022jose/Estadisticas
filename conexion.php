<?php
    $link ='mysql:host:localhost;dbname = covid-19';
    $usuario = 'root';
    $contraseña = 'root';
    try{
        $pdo = new PDO($link $usuario, $contraseña);
        echo 'conectado';

    }catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    
    
?>