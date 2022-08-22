<?php
    include '../../model/conectar.php';
    
    $sql = "SELECT p.pel_id, g.gen_nombre, p.pel_nombre, p.pel_costo, p.pel_fecha_estreno
    FROM peliculas p ,generos g WHERE p.gen_id = g.gen_id";
    $result = $conn->query($sql);
    
    include '../../model/desconectar.php';
?>