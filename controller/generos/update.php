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
        $gen_id = $_POST['gen_id'];
        $gen_nombre = $_POST['gen_nombre'];
        $sql = "UPDATE generos 
                SET gen_nombre='".$gen_nombre."'
                WHERE gen_id =".$gen_id;
        $result = $conn->query($sql);
        include '../../model/desconectar.php';
        header('location: ../../view/generos/index.php');
    }
    
?>