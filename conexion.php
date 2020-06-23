<?php
    $link ='mysql: host=localhost;dbname=covid-19';
    $usuario = 'root';
    $contraseña = '';
    try{
        $pdo = new PDO($link, $usuario, $contraseña);
    
    }catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    
    
?>