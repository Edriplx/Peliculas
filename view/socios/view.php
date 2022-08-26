<?php  include '../template/header.php'?>
<?php  include '../../controller/socios/delete.php'?>
<div class="row">
    <div class="col-3"></div>
    <div class="col-6 mt-5">
        <div class="card">
            <div class="card-header">
                <b>Visualizar Socio</b>
            </div>
        </div>
        <form action="../../controller/socios/delete.php" method="post">
            <?php
                    $row = $result->fetch_assoc();
                ?>
            <div class="mb-3">
                <div class="mb-3">
                    <label for="soc_id" class="form-label">ID</label>
                    <input type="text" class="form-control" readonly id="soc_id" 
                    value="<?php echo $row['soc_id']?>">
                </div>
                <div class="mb-3">          
                    <label for="soc_cedula" class="form-label">Cédula</label>
                    <input type="text" class="form-control" readonly id="soc_cedula" 
                    value="<?php echo $row['soc_cedula']?>">
                </div>
                <div class="mb-3">          
                    <label for="soc_nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" readonly id="soc_nombre" 
                    value="<?php echo $row['soc_nombre']?>">
                </div>
                <div class="mb-3">          
                    <label for="soc_direccion" class="form-label">Dirección</label>
                    <input type="text" class="form-control" readonly id="soc_direccion" 
                    value="<?php echo $row['soc_direccion']?>">
                </div>
                <div class="mb-3">          
                    <label for="soc_telefono" class="form-label">Teléfono</label>
                    <input type="text" class="form-control" readonly id="soc_telefono" 
                    value="<?php echo $row['soc_telefono']?>">
                </div>
                <div class="mb-3">          
                    <label for="soc_correo" class="form-label">Correo</label>
                    <input type="text" class="form-control" readonly id="soc_correo" 
                    value="<?php echo $row['soc_correo']?>">
                </div>
                <input type="hidden" name="soc_id" value="<?php echo $row['soc_id']?>">
        </form>
    </div>
</div>
</div>

<?php  include '../template/footer.php'?>