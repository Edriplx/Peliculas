<?php  include '../template/header.php'?>
<?php  include '../../controller/socios/create.php'?>
    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6 mt-5">
            <div class="card">
                <div class="card-header">
                    <b>Registrar socio</b>
                </div>
            </div>
            <form action='../../controller/socios/create.php' method="POST">
            <div class="mb-3 mt-3">
                <label for="soc_cedula" class="form-label">Cédula</label>
                <input type="number" class="form-control" id="soc_cedula" name="soc_cedula" aria-describedby="emailHelp" required>
                <div id="emailHelp" class="form-text">No compartiremos sus datos personales con nadie.</div>
            </div>
            <div class="mb-3">
                <label for="soc_nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="soc_nombre" name="soc_nombre" required>
            </div>
            <div class="mb-3">
                <label for="soc_direccion" class="form-label">Direccion</label>
                <input type="text" class="form-control" id="soc_direccion" name="soc_direccion" required>
            </div>
            <div class="mb-3">
                <label for="soc_telefono" class="form-label">Telefono</label>
                <input type="text" class="form-control" id="soc_telefono" name="soc_telefono" required>
            </div>
            <div class="mb-3">
                <label for="soc_correo" class="form-label">Correo</label>
                <input type="text" class="form-control" id="soc_correo" name="soc_correo" required>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
    </section>
    <!-- /.content -->
    <?php  include '../template/footer.php'?>