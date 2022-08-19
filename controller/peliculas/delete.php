<?php
    
    if(isset($_GET['pel_id']))
    {
        include '../../model/conectar.php';
        $id = $_GET['pel_id'];
        $sql = "SELECT p.pel_id, g.gen_nombre, p.pel_nombre, p.pel_costo, p.pel_fecha_estreno
        FROM peliculas p ,generos g WHERE p.gen_id = g.gen_id";
        $result = $conn->query($sql);
        include '../../model/desconectar.php';
    }
    if(isset($_POST['pel_id']))
    {
        include '../../model/conectar.php';
        $id = $_POST['pel_id'];
        $sql = "DELETE FROM peliculas
                WHERE pel_id =".$id;
        $result = $conn->query($sql);
        include '../../model/desconectar.php';
        header('location: ../../view/peliculas/index.php');
    }
    
?>