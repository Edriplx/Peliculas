<?php  include '../template/header.php'?>
<?php  include '../../controller/actores/create.php'?>
    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6 mt-5">
            <div class="card">
                <div class="card-header">
                    <b>Registrar Actor</b>
                </div>
            </div>
            <form action='../../controller/actores/create.php' method="POST">
            <div class="mb-3">
                <label for="act_nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="act_nombre" name="act_nombre" required>
                <br>
            <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
    </section>
    <!-- /.content -->
    <?php  include '../template/footer.php'?>