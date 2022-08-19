<?php
    
    if(isset($_GET['soc_id']))
    {
        include '../../model/conectar.php';
        $id = $_GET['soc_id'];
        $sql = "SELECT * FROM socios WHERE socios.soc_id=".$id;
        $result = $conn->query($sql);
        include '../../model/desconectar.php';
    }
    if(isset($_POST['soc_id']))
    {
        include '../../model/conectar.php';
        $id = $_POST['soc_id'];
        $sql = "DELETE  FROM socios WHERE socios.soc_id =".$id;
        $result = $conn->query($sql);
        include '../../model/desconectar.php';
        header('location: ../../view/socios/index.php');
    }
    
?>