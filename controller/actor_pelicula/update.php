<?php
    include '../../model/conectar.php';
    $sql = "SELECT * FROM actores ORDER BY act_nombre;";
    $result = $conn->query($sql);

    $sql = "SELECT * FROM peliculas ORDER BY pel_nombre;";
    $result2 = $conn->query($sql);
    include '../../model/desconectar.php';

    if(isset($_GET['apl_id'])){
        include '../../model/conectar.php';
        $apl_id = $_GET['apl_id'];
        $sql1 = "SELECT ap.apl_id, a.act_id, p.pel_id, ap.apl_papel  FROM actor_peliculas ap, actores a,  peliculas p
                WHERE ap.apl_id = ap.apl_id
                AND ap.act_id = a.act_id
                AND ap.pel_id = p.pel_id
                AND apl_id =".$apl_id;
                
        
        $result3 = $conn->query($sql1);
        //Proceso de creacion de tabla y relleno de datos de la BDD
        include '../../model/desconectar.php';
    }
    if(isset($_POST['pel_id'])){
        include '../../model/conectar.php';
        $apl_id = $_POST['apl_id'];
        $act_id = $_POST['act_id'];
        $pel_id = $_POST['pel_id'];
        $apl_papel = $_POST['apl_papel'];
        
        $sql = "UPDATE actor_peliculas SET act_id = '".$act_id."', pel_id = ".$pel_id.", apl_papel = '".$apl_papel."'
        WHERE apl_id = ".$apl_id;
        $result = $conn->query($sql);
        include '../../model/desconectar.php';
        header('Location: ../../view/peliculas/index.php');
    }
?>