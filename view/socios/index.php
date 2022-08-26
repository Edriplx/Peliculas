<?php  include '../template/header.php'?>
<?php  include '../../controller/socios/index.php' ?>
    <div class="row">
        <div class="col-2"></div>
        <div class="col-7 mt-5">
            <div class="card text-center">
                <div class="card-header">
                        <h3>Socios registrados</h3>
                        <hr>
                        <a href="create.php"><button type="button" class="btn btn-outline-primary">Agregar</button></a>
                </div>
            </div>
            <div class="card">
                <table class="table table-hover align-middle">
                    <thead>
                        <tr>
                            <th scope="col">Ord</th>
                            <th scope="col">Cédula</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Telefono</th>
                            <th scope="col">Opciones</th>
                        </tr>
                    </thead>
                    <?php
                            if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo'<tr>';
                                echo '<th scope="row">'.$row["soc_id"].'</th>';
                                echo'<td>'.$row["soc_cedula"].'</td>';
                                echo'<td>'.$row["soc_nombre"].'</td>';
                                echo'<td>'.$row["soc_telefono"].'</td>';
                                echo '
                                <td><button class="btn btn-outline-light"><a href="update.php?soc_id=' . $row["soc_id"] . '"><i class="fas fa-edit text-dark"></i></a></button> 
                                <button class="btn btn-outline-light"><a href="view.php?soc_id=' . $row["soc_id"] . '"><i class="fa fa-eye text-secondary"></i></a></button>
                                <button class="btn btn-outline-light"><a href="delete.php?soc_id=' . $row["soc_id"] . '"><i class="fa fa-trash text-danger" aria-hidden="true"></i></a></button></td>';
                            echo '</tr>';
                            }
                            } else {
                            echo "0 results";
                            }
                        ?>  
                </table>
            </div>
        </div>
    </div>
<?php  include '../template/footer.php'?>