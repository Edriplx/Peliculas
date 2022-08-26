<?php include '../template/header.php' ?>
<?php include '../../controller/socios/update.php' ?>
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
      <form action="../../controller/socios/update.php" method='POST'>
        <div class="mb-3">
          <label for="soc_nombre" class="form-label">Nombre</label>
          <input type="text" class="form-control" id="soc_nombre" value="<?php echo $row['soc_nombre'] ?>" required name="soc_nombre">
        </div>

        <div class="mb-3">
          <label for="soc_direccion" class="form-label">Direccion</label>
          <input type="text" class="form-control" id="soc_direccion" value="<?php echo $row['soc_direccion'] ?>" required name="soc_direccion">
        </div>

        <div class="mb-3">
          <label for="soc_telefono" class="form-label">Teléfono</label>
          <input type="text" class="form-control" id="soc_telefono" value="<?php echo $row['soc_telefono'] ?>" required name="soc_telefono">
        </div>

        <div class="mb-3">
          <label for="soc_correo" class="form-label">Correo</label>
          <input type="text" class="form-control" id="soc_correo" value="<?php echo $row['soc_correo'] ?>" required name="soc_correo">
        </div>
        <input type="hidden" name='soc_id' value="<?php echo $row['soc_id'] ?>">
        <button type="submit" class="btn btn-primary">Actualizar</button>
      </form>
    </div>
  </div>
</section>
<!-- /.content -->
<?php include '../template/footer.php' ?>