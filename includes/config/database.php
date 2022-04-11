<?php
    function conectarDB(): mysqli{
        //Hay que cambiarlo a poo
        $conn = new mysqli('localhost', 'root', 'root', 'bienes_raices');
        
        if(!$conn){
            echo "Error no se pudo conectar";
            exit;
        }
        return $conn;
    }

  

 
?>