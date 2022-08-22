<?php
    if(isset($_POST['soc_cedula']))
    {
        include '../../model/conectar.php';
        $soc_id=0;
        $soc_cedula = $_POST['soc_cedula'];
        $soc_nombre = $_POST['soc_nombre'];
        $soc_direccion = $_POST['soc_direccion'];
        $soc_telefono = $_POST['soc_telefono'];
        $soc_correo = $_POST['soc_correo'];
        $sql = "INSERT INTO socios(soc_id,soc_cedula,soc_nombre,soc_direccion,soc_telefono,soc_correo)
                VALUE (0,'".$soc_cedula."','".$soc_nombre."','".$soc_direccion."','".$soc_telefono."','".$soc_correo."')";
        $result = $conn->query($sql);
        include '../../model/desconectar.php';
        header('location: ../../view/socios/index.php');
    }
?>