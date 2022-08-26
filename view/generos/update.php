<?php  include '../template/header.php'?>
<?php include '../../controller/generos/update.php' ?>
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6 mt-5">
            <div class="card">
                <div class="card-header">
                    <b>Actualizar Género</b>
                </div>
            </div>
            <?php
                $row = $result->fetch_assoc();
            ?>
            <form action="../../controller/generos/update.php" method='POST'>
            <div class="mb-3">
                <label for="nombreSocio" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="gen_nombre"
                value="<?php  echo $row['gen_nombre']?>" required name="gen_nombre">
                <br>
                <input type="hidden" name='gen_id'
                value="<?php  echo $row['gen_id']?>">
            <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </div>
</div>

<?php  include '../template/footer.php'?>