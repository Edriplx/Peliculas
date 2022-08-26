<?php  include '../template/header.php'?>
<?php include '../../controller/peliculas/update.php' ?>
    <div class="row">
    <?php $row1 = $result1->fetch_assoc() ?>
        <div class="col-3"></div>
        <div class="col-6 mt-5">
            <div class="card">
                <div class="card-header">
                    <b>Actualizar Película</b>
                </div>
            </div>

            <form action="../../controller/peliculas/update.php" method='POST' >
            <?php
                $row = $result->fetch_assoc();
            ?>
            <select class="form-select form-control" id="gen_id" name="gen_id" required>
                    <option selected disabled value="">Género</option>
                    <?php
                    if ($result->num_rows > 0){
                        while($row = $result->fetch_assoc()) {
                            if($row1["gen_id"]==$row["gen_id"]){
                                echo '<option selected disable name="gen_id" value="'.$row["gen_id"].'">'.$row["gen_nombre"].'</option>';
                            }else{
                                echo '<option name="gen_id" value="'.$row["gen_id"].'">'.$row["gen_nombre"].'</option>';
                            }
                            
                        }
                    }
                    ?>
                    
                </select>
            <div class="mb-3">
                <label for="pel_nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control"
                value="<?php echo $row1["pel_nombre"]?>" required id="pel_nombre" name="pel_nombre">
            </div>
            <div class="mb-3">
                <label for="pel_costo" class="form-label">Costo</label>
                <input type="number" class="form-control" id="pel_costo" name="pel_costo"
                value="<?php  echo $row1['pel_costo']?>" required>
            </div>
            <div class="mb-3">
                <label for="pel_fecha_estreno" class="form-label">Fechas Estreno</label>
                <input type="date" class="form-control" id="pel_fecha_estreno" name="pel_fecha_estreno"
                value="<?php  echo $row1['pel_fecha_estreno']?>" required>
            </div>
            <input type="hidden" name="pel_id" value="<?php echo $row1['pel_id'];?>">
            <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </div>
    <script>
        (function () {
            'use strict'
            var forms = document.querySelectorAll('.needs-validation')
            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
    <?php  include '../template/footer.php'?>