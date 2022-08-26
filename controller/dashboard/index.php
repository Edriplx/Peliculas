<?php
  include '../../model/conectar.php';

  $sql ="SELECT count(pel_id) as total_peliculas
         FROM peliculas";
  $result =$conn -> query($sql);
  $row= $result ->fetch_assoc();
  $total_peliculas=$row['total_peliculas'];

  $sql ="SELECT count(soc_id) as total_socios
  FROM socios";
  $result =$conn -> query($sql);
  $row= $result ->fetch_assoc();
  $total_socios=$row['total_socios'];

  $sql ="SELECT count(alq_id) as total_alquiler
  FROM alquileres";
  $result =$conn -> query($sql);
  $row= $result ->fetch_assoc();
  $total_alquiler=$row['total_alquiler'];

  $sql ="SELECT count(alq_id) as atrasos_alquiler
  FROM alquileres where alq_fecha_hasta > alq_fecha_entrega";
  $result =$conn -> query($sql);
  $row= $result ->fetch_assoc();
  $atrasos_alquiler=$row['atrasos_alquiler'];

  $sql ="SELECT SUM(alq_valor) as total_valor
  FROM alquileres";
  $result =$conn -> query($sql);
  $row= $result ->fetch_assoc();
  $total_valor=$row['total_valor'];
  
  $sql="SELECT SUM(alq_valor) as enero FROM alquileres WHERE alq_fecha_desde >='2022-01-01' and alq_fecha_desde <= '2022-01-31'";
  $result =$conn -> query($sql);
  $row= $result ->fetch_assoc();
  $enero=$row['enero'];

  $sql="SELECT SUM(alq_valor) as febrero FROM alquileres WHERE alq_fecha_desde >='2022-02-01' and alq_fecha_desde <= '2022-02-28'";
  $result =$conn -> query($sql);
  $row= $result ->fetch_assoc();
  $febrero=$row['febrero'];

  $sql="SELECT SUM(alq_valor) as marzo FROM alquileres WHERE alq_fecha_desde >='2022-03-01' and alq_fecha_desde <= '2022-03-31'";
  $result =$conn -> query($sql);
  $row= $result ->fetch_assoc();
  $marzo=$row['marzo'];
  
  $sql="SELECT SUM(alq_valor) as abril FROM alquileres WHERE alq_fecha_desde >='2022-04-01' and alq_fecha_desde <= '2022-04-30'";
  $result =$conn -> query($sql);
  $row= $result ->fetch_assoc();
  $abril=$row['abril'];

  $sql="SELECT SUM(alq_valor) as mayo FROM alquileres WHERE alq_fecha_desde >='2022-05-01' and alq_fecha_desde <= '2022-05-31'";
  $result =$conn -> query($sql);
  $row= $result ->fetch_assoc();
  $mayo=$row['mayo'];

  $sql="SELECT SUM(alq_valor) as junio FROM alquileres WHERE alq_fecha_desde >='2022-06-01' and alq_fecha_desde <= '2022-06-30'";
  $result =$conn -> query($sql);
  $row= $result ->fetch_assoc();
  $junio=$row['junio'];

  $sql="SELECT SUM(alq_valor) as julio FROM alquileres WHERE alq_fecha_desde >='2022-07-01' and alq_fecha_desde <= '2022-07-31'";
  $result =$conn -> query($sql);
  $row= $result ->fetch_assoc();
  $julio=$row['julio'];

  $sql="SELECT SUM(alq_valor) as agosto FROM alquileres WHERE alq_fecha_desde >='2022-08-01' and alq_fecha_desde <= '2022-08-30'";
  $result =$conn -> query($sql);
  $row= $result ->fetch_assoc();
  $agosto=$row['agosto'];

  $array_meses=['$enero','$febrero','$marzo','$abril','$mayo','$junio','$julio','$agosto'];

  include '../../model/desconectar.php';

  include '../../model/conectar.php';
    $sql = "SET lc_time_names = 'es_ES'; ";
    $sql_mes = "SELECT DISTINCT MONTHNAME(alq_fecha_desde) AS mes FROM alquileres ORDER BY MONTH(alq_fecha_desde) ;";
    $result = $conn->query($sql);
    $result_mes = $conn->query($sql_mes);
    $i = 0; 
    $total_mes=array();
    if ($result_mes->num_rows > 0) {          
        while($row = $result_mes->fetch_assoc()) {
            $total_mes[$i]=("'".$row['mes']."'");
            $i++;
        }
    }
    $meses = "['',".implode(",",$total_mes)."]";
    //Suma de alquileres por mes
    $sql_alq_mes = "SELECT SUM(alq_valor) as suma FROM alquileres GROUP BY MONTH(alq_fecha_desde) ORDER BY MONTH(alq_fecha_desde) ;";
    $result = $conn->query($sql);
    $result_alq_mes = $conn->query($sql_alq_mes);
    $i = 0; 
    $total_alq_mes=array();
    if ($result_alq_mes->num_rows > 0) {          
        while($row = $result_alq_mes->fetch_assoc()) {
            $total_alq_mes[$i]=("'".$row['suma']."'");
            $i++;
        }
    }
    $alq_meses = "['0',".implode(",",$total_alq_mes)."]";

  include '../../model/desconectar.php';

?>