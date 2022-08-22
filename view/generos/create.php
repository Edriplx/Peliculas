<?php  include '../template/header.php'?>
<?php  include '../../controller/generos/create.php'?>
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6 mt-5">
            <div class="card">
                <div class="card-header">
                    <b>Registrar Género</b>
                </div>
            </div>
            <form action='../../controller/generos/create.php' method='POST'>
            <div class="mb-3">
                <label for="nombreSocio" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="gen_nombre" name="gen_nombre" required>
                <br>
            <button type="submit" class="btn btn-secondary">Enviar</button>
            </form>
        </div>
    </div>

    </div>
    <?php  include '../template/footer.php'?>