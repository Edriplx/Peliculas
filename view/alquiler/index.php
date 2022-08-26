<?php include '../template/header.php' ?>
<?php include '../../controller/alquiler/index.php' ?>
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-1"></div>
        <div class="col-9 mt-5">
            <div class="card text-center">
                <div class="card-header">
                    <h3>Alquileres Registrados</h3>
                    <a href="create.php"><button type="button" class="btn btn-outline-primary">Agregar</button></a>
                </div>

            </div>
            <div class="card">
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
                            while ($row = $result->fetch_assoc()) {
                                echo '<tr>';
                                echo '<th scope="row">' . $row["alq_id"] . '</th>';
                                echo '<td>' . $row["soc_nombre"] . '</td>';
                                echo '<td>' . $row["pel_nombre"] . '</td>';
                                echo '<td id="alq_fecha_desde">' . $row["alq_fecha_desde"] . '</td>';
                                echo '<td id="alq_fecha_hasta">' . $row["alq_fecha_hasta"] . '</td>';
                                echo '<td>' . $row["alq_valor"] . '</td>';
                                echo '<td id="alq_fecha_entrega" >' . $row["alq_fecha_entrega"] . '</td>';
                                echo '
                                <td><button class="btn btn-outline-light"><a href="update.php?alq_id=' . $row["alq_id"] . '"><i class="fas fa-edit text-dark"></i></a></button> 
                                <button class="btn btn-outline-light"><a href="view.php?alq_id=' . $row["alq_id"] . '"><i class="fa fa-eye text-seconday"></i></a></button>
                                <button class="btn btn-outline-light"><a href="delete.php?alq_id=' . $row["alq_id"] . '"><i class="fa fa-trash text-danger" aria-hidden="true"></i></a></button></td>';
                                echo '</tr>';
                            }
                        } else {
                            echo "0 results";
                        }
                        ?>
                        <script>
                            var fecha1 = <?php echo $row["alq_fecha_desde"]?>;
                            var fecha2 = new Date(document.getElementById("alq_fecha_hasta").value);
                            var fecha3 = new Date(document.getElementById("alq_fecha_entrega").value);

                            var base = new Date(0000, 00, 0);
                            console.log(fecha1)
                            console.log("xdddddddddddd")

                            if (fecha3 == base) {
                                document.getElementById("alq_fecha_entrega").style.backgroundColor = "yellow";
                                console.log(fecha3)
                                console.log(base)
                                
                            }
                            else{
                                console.log("No se pudo obtener")
                            }
                        </script>
                    </tbody>
                </table>
            </div>
            <div class="card-header text-center">
                <button class="btn btn-warning btn-sm btn-lg disabled"> Entrega atrasada</button>
                <button class="btn btn-danger btn-sm btn-lg disabled"> Sin entregar</button>
            </div>
        </div>
    </div>

</section>
<!-- /.content -->
<?php include '../template/footer.php' ?>

