<?php  include '../template/header.php'?>
<?php  include '../../controller/peliculas/delete.php'?>
<div class="row">
    <div class="col-3"></div>
    <div class="col-6 mt-5">
        <div class="card">
            <div class="card-header">
                <b>Eliminar peliculas</b>
            </div>
        </div>
        <form action="../../controller/peliculas/delete.php" method="post">
        <?php
                    $row = $result->fetch_assoc();
                ?>
            <div class="mb-3">
                <div class="mb-3">
                    <label for="pel_id" class="form-label">ID</label>
                    <input type="text" class="form-control" readonly id="gen_id" 
                    value="<?php echo $row['pel_id']?>">
                </div>
                <div class="mb-3">          
                    <label for="gen_nombre" class="form-label">Genero</label>
                    <input type="text" class="form-control" readonly id="gen_nombre" 
                    value="<?php echo $row['gen_nombre']?>">
                </div>
                <div class="mb-3">          
                    <label for="pel_nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" readonly id="pel_nombre" 
                    value="<?php echo $row['pel_nombre']?>">
                </div>
                <div class="mb-3">          
                    <label for="pel_costo" class="form-label">Costo</label>
                    <input type="text" class="form-control" readonly id="pel_costo" 
                    value="<?php echo $row['pel_costo']?>">
                </div>
                <div class="mb-3">          
                    <label for="pel_fecha_estreno" class="form-label">Fecha de Estreno</label>
                    <input type="text" class="form-control" readonly id="pel_fecha_estreno" 
                    value="<?php echo $row['pel_fecha_estreno']?>">
                </div>
                <input type="hidden" name="pel_id" value="<?php echo $row['pel_id']?>">
                <input type="submit" class="btn btn-danger" value="Eliminar"></input>
        </form>
    </div>
</div>
</div>

<?php  include '../template/footer.php'?>