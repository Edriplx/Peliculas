<?php
    include '../../model/conectar.php';
    
    $sql = "SELECT ap.apl_id, a.act_nombre,p.pel_nombre,ap.apl_papel FROM actor_peliculas as ap,actores as a,peliculas as p
            WHERE ap.pel_id = p.pel_id 
            AND ap.act_id = a.act_id";
    $result = $conn->query($sql);
    
    include '../../model/desconectar.php';
?>