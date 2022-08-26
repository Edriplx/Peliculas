<?php include '../template/header.php' ?>
<?php include '../../controller/generos/index.php' ?>
<div class="row">
    <div class="col-3"></div>
    <div class="col-6 mt-5">
        <div class="card text-center">
            <div class="card-header">
                <div class="card-header">
                <h3>Lista de Géneros</h3>
                <hr>
                <a href="create.php"><button type="button" class="btn btn-outline-primary">Agregar nuevo género</button></a>
                  

                </div>

            </div>

        </div>
        <div class="card ">
            <table class="table table-hover align-middle" style="text-align: center;">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col" colspan="3">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<th scope="row">' . $row["gen_id"] . '</th>';
                            echo '<td>' . $row["gen_nombre"] . '</td>';
                            echo '
                                <td><button class="btn btn-outline-light"><a href="update.php?gen_id=' . $row["gen_id"] . '"><i class="fas fa-edit text-dark"></i></a></button> 
                                <button class="btn btn-outline-light" ><a href="view.php?gen_id=' . $row["gen_id"] . '"><i class="fa fa-eye text-secondary"></i></a></button>
                                <button class="btn btn-outline-light"><a href="delete.php?gen_id=' . $row["gen_id"] . '"><i class="fa fa-trash text-danger" aria-hidden="true"></i></a></button></td>';
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