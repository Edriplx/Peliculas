<?php include '../template/header.php' ?>
<?php include '../../controller/actores/delete.php' ?>

<!-- Main content -->
<section class="content">
    <!-- /.aqui empieza el dashboard para la programacion ------------------------------------------------------------->
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6 mt-5">
            <div class="card">
                <div class="card-header">
                    <b>Vizualizar Actor</b>
                </div>
            </div>
            <form action="../../controller/actores/delete.php" method="post">
            <?php
                    $row = $result->fetch_assoc();
                ?>
                <div class="mb-3">
                    <label for="act_id" class="form-label">ID</label>
                    <input type="text" class="form-control" readonly id="act_id" value="<?php echo $row['act_id'] ?>">
                </div>
                <div class="mb-3">
                    <label for="act_nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" readonly id="act_nombre" value="<?php echo $row['act_nombre'] ?>">
                </div>
                <input type="hidden" name="act_id" value="<?php echo $row['act_id'] ?>">


            </form>
        </div>
    </div>
    </div>
</section>

<?php include '../template/footer.php' ?>
