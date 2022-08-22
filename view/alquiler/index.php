<?php  include '../template/header.php'?>
<?php  include '../../controller/alquiler/index.php' ?>
    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-1"></div>
        <div class="col-9 mt-5">
            <div class="card">
                <div class="card-header">
                    <b>Alquileres Registrados</b>
                    <a href="create.php"><button type="button" class="btn btn-success"
                            style="margin-left:720px;">Agregar</button></a>
                </div>
                <table class="table table-hover align-center">
                    <thead>
                        <tr>
                            <th scope="col">Ord</th>
                            <th scope="col">Socio ID</th>
                            <th scope="col">Película ID</th>
                            <th scope="col">Fecha Inicio</th>
                            <th scope="col">Fecha Fin</th>
                            <th scope="col">Valor a Pagar</th>
                            <th scope="col">Fecha Entrega</th>
                            <th scope="col" colspan="3" class="text-aling">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo'<tr>';
                                echo '<th scope="row">'.$row["alq_id"].'</th>';
                                echo'<td>'.$row["soc_nombre"].'</td>';
                                echo'<td>'.$row["pel_nombre"].'</td>';
                                echo'<td>'.$row["alq_fecha_desde"].'</td>';
                                echo'<td>'.$row["alq_fecha_hasta"].'</td>';
                                echo'<td>'.$row["alq_valor"].'</td>';
                                echo'<td>'.$row["alq_fecha_entrega"].'</td>';
                                echo'
                                <td><button><a href="update.php?alq_id='.$row["alq_id"].'"><i class="fa fa-pen text-success"></i></a></button> 
                                <button><a href="view.php?alq_id='.$row["alq_id"].'"><i class="fa fa-eye text-primary"></i></a></button>
                                <button><a href="delete.php?alq_id='.$row["alq_id"].'"><i class="fa fa-trash text-danger" aria-hidden="true"></i></a></button></td>';
                                echo '</tr>';
                            }
                            } else {
                            echo "0 results";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </section>
    <!-- /.content -->
    <?php  include '../template/footer.php'?>
    