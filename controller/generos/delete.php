<?php
    
    if(isset($_GET['gen_id']))
    {
        include '../../model/conectar.php';
        $id = $_GET['gen_id'];
        $sql = "SELECT * FROM generos WHERE generos.gen_id=".$id;
        $result = $conn->query($sql);
        include '../../model/desconectar.php';
    }
    if(isset($_POST['gen_id']))
    {
        include '../../model/conectar.php';
        $id = $_POST['gen_id'];
        $sql = "DELETE FROM generos WHERE generos.gen_id =".$id;
        $result = $conn->query($sql);
        include '../../model/desconectar.php';
        header('location: ../../view/generos/index.php');
    }
    
?>