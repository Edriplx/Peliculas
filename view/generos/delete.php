<?php  include '../template/header.php'?>
<?php  include '../../controller/generos/delete.php'?>
<div class="row">
    <div class="col-3"></div>
    <div class="col-6 mt-5">
        <div class="card">
            <div class="card-header">
                <b>Eliminar Género</b>
            </div>
        </div>
        <form action="../../controller/generos/delete.php" method="post">
            <?php
                    $row = $result->fetch_assoc();
                ?>
            <div class="mb-3">
                <div class="mb-3">
                    <label for="gen_id" class="form-label">ID</label>
                    <input type="text" class="form-control" readonly id="gen_id" 
                    value="<?php echo $row['gen_id']?>">
                </div>
                <div class="mb-3">          
                    <label for="gen_nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" readonly id="gen_nombre" 
                    value="<?php echo $row['gen_nombre']?>">
                </div>
                <input type="hidden" name="gen_id" value="<?php echo $row['gen_id']?>">
                <input type="submit" class="btn btn-danger" value="Eliminar"></input>
        </form>
    </div>
</div>
</div>

<?php  include '../template/footer.php'?>