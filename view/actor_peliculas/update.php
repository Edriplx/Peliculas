<?php include '../template/header.php' ?>
<?php include '../../controller/actor_pelicula/update.php' ?>
<section class="content">
<div class="row">
<?php $row3 = $result3->fetch_assoc() ?>
    <div class="col-3"></div>
    <div class="col-6 mt-5">
      <div class="card">
        <div class="card-header">
          <b>Actualizar Actor Película</b>
        </div>
      </div>

      <form action="../../controller/actor_pelicula/update.php" method='POST'>
        <label for="apl_papel" class="form-label">Actor</label>
        <select class="form-select form-control" id="act_id" name="act_id" required>
          <option selected disabled value="">Seleccione..</option>
          <?php  
          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              if ($row3["act_id"] == $row["act_id"]) {
                echo '<option selected disable name="act_id" value="' . $row["act_id"] . '">' . $row["act_nombre"] . '</option>';
              } else {
                echo '<option name="act_id" value="' . $row["act_id"] . '">' . $row["act_nombre"] . '</option>';
              }
            }
          } 
          ?>
        </select>
        <br>
        <label for="apl_papel" class="form-label">Pelicula</label>
        <select class="form-select form-control" id="pel_id" name="pel_id" required>
          <option selected disabled value="">Selecione..</option>
          <?php 
          if ($result2->num_rows > 0) {
            while ($row = $result2->fetch_assoc()) {
              if ($row3["pel_id"] == $row["pel_id"]) {
                echo '<option selected disable name="pel_id" value="' . $row["pel_id"] . '">' . $row["pel_nombre"] . '</option>';
              } else {
                echo '<option name="pel_id" value="' . $row["pel_id"] . '">' . $row["pel_nombre"] . '</option>';
              }
            }
          } 
          ?>
        </select>
        

        <div class="mb-3">
          <label for="apl_papel" class="form-label">Papel</label>
          <input type="text" class="form-control" id="apl_papel" name="apl_papel" value="<?php echo $row3['apl_papel'] ?>" required>
        </div>
        
        <input type="hidden" name="apl_id" value="<?php echo $row3['apl_id']; ?>">
        <button type="submit" class="btn btn-primary">Actualizar</button>
      </form>
    </div>
  </div>
</section>

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
<?php include '../template/footer.php' ?>