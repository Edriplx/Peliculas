<?php include '../template/header.php' ?>
<?php include '../../controller/alquiler/create.php'?>
<div class="row">
    <div class="col-3"></div>
    <div class="col-6 mt-5">
        <div class="card">
            <div class="card-header">
                <b>Registrar Alquiler</b>
            </div>
        </div>
        <form action='../../controller/alquiler/create.php' method="POST" novalidate>
            <div class="mb-3 mt-3">
                <label class="form-label">Socio</label>
                <select name="soc_id" id="soc_id" class="form-control">
                    <?php
                        while($row = $result->fetch_assoc())
                        {
                            echo '<option value="'.$row['soc_id'].'">'.$row['soc_nombre'].'</option>';
                        }
                    ?>
                </select>
            </div>
            <div class="mb-3 mt-3">
                <label class="form-label">Pelicula</label>
                <select name="pel_id" id="pel_id" class="form-control">
                    <?php
                        while($row = $result2->fetch_assoc())
                        {
                            echo '<option value="'.$row['pel_id'].'">'.$row['pel_nombre'].'</option>';
                        }
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Fecha de Inicio</label>
                <input type="date" class="form-control" id="alq_fecha_desde" name="alq_fecha_desde" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Fecha de Finalización</label>
                <input type="date" class="form-control" id="alq_fecha_hasta" name="alq_fecha_hasta" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Valor</label>
                <input type="number" class="form-control" id="alq_valor" name="alq_valor" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Fechas de Estrega</label>
                <input type="date" class="form-control" id="alq_fecha_entrega" name="alq_fecha_entrega" required>
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