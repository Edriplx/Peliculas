<?php include '../template/header.php' ?>
<?php include '../../controller/peliculas/index.php' ?>
<div class="row">
    <div class="col-3"></div>
    <div class="col-6 mt-5">
        <div class="card text-center">
            <div class="card-header">
                <h3>Peliculas registradas</h3>
                <hr>
                <a href="create.php"><button type="button" class=" btn btn-outline-primary">Agregar nueva película</button></a>
            </div>
        </div>
        <div class="card">
            <table class="table table-hover align-middle">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Genero</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Costo</th>
                        <th scope="col">Fecha de Estreno</th>
                        <th scope="col" colspan="3">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<th scope="row">' . $row["pel_id"] . '</th>';
                            echo '<td>' . $row["gen_nombre"] . '</td>';
                            echo '<td>' . $row["pel_nombre"] . '</td>';
                            echo '<td>' . $row["pel_costo"] . '</td>';
                            echo '<td>' . $row["pel_fecha_estreno"] . '</td>';
                            echo '
                                <td><button class="btn btn-outline-light"><a href="update.php?pel_id=' . $row["pel_id"] . '"><i class="fas fa-edit text-dark"></i></a></button> 
                                <button class="btn btn-outline-light"><a href="view.php?pel_id=' . $row["pel_id"] . '"><i class="fa fa-eye text-secondary"></i></a></button>
                                <button class="btn btn-outline-light"><a href="delete.php?pel_id=' . $row["pel_id"] . '"><i class="fa fa-trash text-danger" aria-hidden="true"></i></a></button></td>';
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
<?php include '../template/footer.php' ?>