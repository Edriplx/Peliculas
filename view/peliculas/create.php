<?php include '../template/header.php' ?>
<?php include '../../controller/peliculas/create.php'?>
<div class="row">
    <div class="col-3"></div>
    <div class="col-6 mt-5">
        <div class="card">
            <div class="card-header">
                <b>Registrar Pelicula</b>
            </div>
        </div>
        <form action='../../controller/peliculas/create.php' method="POST" novalidate>
            <div class="mb-3 mt-3">
                <label class="form-label">Género</label>
                <select name="gen_id" id="gen_id">
                    <?php
                        while($row = $result->fecth_assoc())
                        {
                            echo '<option value="'.$row['gen_id'].'">'.$row['gen_nombre'].'</option>';
                        }
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input type="text" class="form-control" id="pel_nombre" name="pel_nombre" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Costo</label>
                <input type="number" class="form-control" id="pel_costo" name="pel_costo" required>
            </div>
            <div class="mb-3">
                <label for="telefonoSocio" class="form-label">Fechas Estreno</label>
                <input type="date" class="form-control" id="pel_fecha_estreno" name="pel_fecha_estreno" required>
            </div>
            <button type="submit" class="btn btn-primary">Agregar</button>
        </form>
    </div>
</div>
<script>
(function() {
    'use strict'
    var forms = document.querySelectorAll('.needs-validation')
    Array.prototype.slice.call(forms)
        .forEach(function(form) {
            form.addEventListener('submit', function(event) {
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