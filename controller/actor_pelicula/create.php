<?php

    include '../../model/conectar.php';
    $sql = "SELECT * FROM actores ORDER BY act_nombre;";
    $result2 = $conn->query($sql);

    $sql = "SELECT * FROM peliculas ORDER BY pel_nombre;";
    $result = $conn->query($sql);

    include '../../model/desconectar.php';

    if(isset($_POST['act_id']) && isset($_POST['pel_id'])&& isset($_POST['apl_papel'])){
        include '../../model/conectar.php';
        $apl_id = 0;
        $act_id = $_POST['act_id'];
        $pel_id = $_POST['pel_id'];
        $apl_papel = $_POST['apl_papel'];

        $sql = "INSERT INTO actor_peliculas(apl_id,act_id, pel_id, apl_papel) 
        VALUES (0,'".$act_id."','".$pel_id."','".$apl_papel."')";
        $result3 = $conn->query($sql);
        include '../../model/desconectar.php';
        header('Location: ../../view/actor_peliculas/index.php');
    }
    
?>