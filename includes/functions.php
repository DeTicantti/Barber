<?php


function getServices() : array{


try {
    require 'database.php';
    $sql = 'SELECT * FROM usuarios';
    $consulta = mysqli_query($con,$sql);

    //arreglo vaciio
    $usuarios = [];
    $i=0;
    while ($row = mysqli_fetch_assoc($consulta)){
        $usuarios[$i]['id'] = $row['id'];
        $usuarios[$i]['nombre'] = $row['nombre'];
        $usuarios[$i]['password'] = $row['password'];
        $usuarios[$i]['usuario'] = $row['usuario'];
        //echo '<pre>';
        //var_dump($row);
        //echo '</pre>';
    $i++;
    }
    

    return $usuarios;

    
    
} catch (\Throwable $th) {
    //throw $th;
}
}
