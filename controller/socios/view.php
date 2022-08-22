<?php
if(isset($_GET['soc_id']))
{
    include '../../model/conectar.php';
    $id = $_GET['soc_id'];
    $sql = "SELECT * FROM socios 
            WHERE socios.soc_id = ".$id ;
    $result = $conn->query($sql);
    
    include '../../model/desconectar.php';
}
?>