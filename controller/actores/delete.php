<?php
    
    if(isset($_GET['act_id']))
    {
        include '../../model/conectar.php';
        $id = $_GET['act_id'];
        $sql = "SELECT * FROM actores WHERE actores.act_id=".$id;
        $result = $conn->query($sql);
        include '../../model/desconectar.php';
    }
    if(isset($_POST['act_id']))
    {
        include '../../model/conectar.php';
        $id = $_POST['act_id'];
        $sql = "DELETE  FROM actores WHERE actores.act_id =".$id;
        $result = $conn->query($sql);
        include '../../model/desconectar.php';
        header('location: ../../view/actores/index.php');
    }
    
?>