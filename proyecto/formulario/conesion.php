<?php
    $conectar = new mysqli("localhost","root","","base_de_datos") ;
    //verificamos la conexion
    if(!$conectar){
        echo"No Se Pudo Conectar Con El Servidor";
    }else{

        $base=mysql_select_db('pedidos');
        if(!$base){
            echo"No Se Encontro La Base De Datos";          
        }
    }
    //recuperar las variables
    $nombre=$_POST['nombre'];
    $email=$_POST['email'];
    $telefono=$_POST['telefono'];
    $direccion=$_POST['direccion'];
    //hacemos la sentencia de sql
    $sql="INSERT INTO datos VALUES('$nombre',
                                   '$email',
                                   '$telefono',
                                   '$direccion')";
    
    $ejecutar=mysql_query($sql);
    //verificamos la ejecucion
    if(!$ejecutar){
        echo"Hubo Algun Error";
    }else{
        echo"Datos Guardados Correctamente<br><a href='proyecto/index.html'>Volver</a>";
    }
?>