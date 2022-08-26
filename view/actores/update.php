<?php  include '../template/header.php'?>
<?php include '../../controller/actores/update.php' ?>
    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6 mt-5">
            <div class="card">
                <div class="card-header">
                    <b>Actualizar Actor</b>
                </div>
            </div>
            <?php
                $row = $result->fetch_assoc();
            ?>
            <form action="../../controller/actores/update.php" method='POST'>
            <div class="mb-3">
            <label for="act_nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="act_nombre"
                value="<?php  echo $row['act_nombre']?>" required name="act_nombre">
                <br>
                <input type="hidden" name='act_id' value="<?php  echo $row['act_id']?>">
            <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </div>
    </section>
    <!-- /.content -->
    <?php  include '../template/footer.php'?>