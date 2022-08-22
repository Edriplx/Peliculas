<?php include '../template/header.php' ?>
<?php include '../../controller/actor_pelicula/index.php' ?>
<div class="row">
    <div class="col-3"></div>
    <div class="col-6 mt-5">
        <div class="card">
            <div class="card-header">
                <b>Peliculas registradass</b>
                <a href="create.php"><button type="button" class="btn btn-success" style="margin-left:450px;">Agregar</button></a>
            </div>
            <table class="table table-hover align-middle">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Actor</th>
                        <th scope="col">Pelicula</th>
                        <th scope="col">Papel</th>
                        <th scope="col" colspan="3">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<th scope="row">' . $row["apl_id"] . '</th>';
                            echo '<td>' . $row["act_nombre"] . '</td>';
                            echo '<td>' . $row["pel_nombre"] . '</td>';
                            echo '<td>' . $row["apl_papel"] . '</td>';
                            echo '
                                <td><button><a href="update.php?gen_id=' . $row["apl_id"] . '"><i class="fa fa-pen text-success"></i></a></button> 
                                <button><a href="view.php?gen_id=' . $row["apl_id"] . '"><i class="fa fa-eye text-primary"></i></a></button>
                                <button><a href="delete.php?gen_id=' . $row["apl_id"] . '"><i class="fa fa-trash text-danger" aria-hidden="true"></i></a></button></td>';
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