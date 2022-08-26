<?php include '../template/header.php' ?>
<?php include '../../controller/actor_pelicula/create.php' ?>
<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-3"></div>
    <div class="col-6 mt-5">
      <div class="card">
        <div class="card-header">
          <b>Registrar Actor-Pelicula</b>
        </div>
      </div>
      <form action='../../controller/actor_pelicula/create.php' method="POST" novalidate>
        <div class="mb-3 mt-3">
          <label class="form-label ">Actor ID</label>
          <select class="form-control" id="act_id" name="act_id">
            <?php
            while ($row = $result2->fetch_assoc()) {
              echo '<option value="' . $row['act_id'] . '">' . $row['act_nombre'] . '</option>';
            }
            ?>
          </select>
        </div>
        <div class="mb-3 mt-3">
          <label for="PeliculaId" class="form-label mb-3 mt-3">Pelicula ID</label>
          <select class="form-control" id="pel_id" name="pel_id">
            <?php
            while ($row = $result->fetch_assoc()) {
              echo '<option value="' . $row['pel_id'] . '">' . $row['pel_nombre'] . '</option>';
            }
            ?>
          </select>

        </div>
        <div class="mb-3">
          <label for="correoSocio" class="form-label">Papel de la Pelicula</label>
          <select class="form-control" id="apl_papel" name= "apl_papel">
            <option value="1">Personaje Principal</option>
            <option value="2">Antagonista</option>
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>
    </div>
  </div>
</section>
<!-- /.content -->
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