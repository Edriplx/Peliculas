<?php
if(isset($_GET['gen_id']))
{
    include '../../model/conectar.php';
    $id = $_GET['gen_id'];
    $sql = "SELECT * FROM generos 
            WHERE generos.gen_id = ".$id ;
    $result = $conn->query($sql);
    
    include '../../model/desconectar.php';
}
?>