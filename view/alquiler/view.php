<?php include '../template/header.php' ?>
<?php include '../../controller/alquiler/delete.php' ?>

<!-- Main content -->
<section class="content">
    <!-- /.aqui empieza el dashboard para la programacion ------------------------------------------------------------->
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6 mt-5">
            <div class="card">
                <div class="card-header">
                    <b>Eliminar Alquiler</b>
                </div>
            </div>
            <form action="../../controller/alquiler/delete.php" method="post">
            <?php
                    $row = $result->fetch_assoc();
                ?>
                <div class="mb-3">
                    <label for="alq_id" class="form-label">ID</label>
                    <input type="text" class="form-control" readonly id="alq_id" value="<?php echo $row['alq_id'] ?>">
                </div>
                <div class="mb-3">
                    <label for="soc_nombre" class="form-label">Nombre de Socio</label>
                    <input type="text" class="form-control" readonly id="soc_nombre" value="<?php echo $row['soc_nombre'] ?>">
                </div>
                <div class="mb-3">
                    <label for="pel_nombre" class="form-label">Nombre de pelicula</label>
                    <input type="text" class="form-control" readonly id="pel_nombre" value="<?php echo $row['pel_nombre'] ?>">
                </div>
                <div class="mb-3">
                    <label for="alq_fecha_desde" class="form-label">Fecha de inicio</label>
                    <input type="text" class="form-control" readonly id="alq_fecha_desde" value="<?php echo $row['alq_fecha_desde'] ?>">
                </div>
                <div class="mb-3">
                    <label for="alq_fecha_hasta" class="form-label">Fecha máxima</label>
                    <input type="text" class="form-control" readonly id="alq_fecha_hasta" value="<?php echo $row['alq_fecha_hasta'] ?>">
                </div>
                <div class="mb-3">
                    <label for="alq_valor" class="form-label">Valor</label>
                    <input type="text" class="form-control" readonly id="alq_valor" value="<?php echo $row['alq_valor'] ?>">
                </div>
                <div class="mb-3">
                    <label for="alq_fecha_entrega" class="form-label">Fecha de entrega</label>
                    <input type="text" class="form-control" readonly id="alq_fecha_entrega" value="<?php echo $row['alq_fecha_entrega'] ?>">
                </div>
                <input type="hidden" name="alq_id" value="<?php echo $row['alq_id'] ?>">
            </form>
        </div>
    </div>
    </div>
</section>

<?php include '../template/footer.php' ?>
