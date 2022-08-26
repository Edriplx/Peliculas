<?php include '../template/header.php' ?>
<?php include '../../controller/dashboard/index.php' ?>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
                <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-file-video"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Total Peliculas</span>
                    <span class="info-box-number">
                        <?php echo $total_peliculas ?>
                    </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-user-check"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Cantidad de Socios</span>
                    <span class="info-box-number"><?php echo $total_socios ?></span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <!-- fix for small devices only -->
        <div class="clearfix hidden-md-up"></div>

        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-ticket-alt"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Cantidad de Alquileres</span>
                    <span class="info-box-number"><?php echo $total_alquiler ?></span>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-exclamation-circle"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Número de Atrasos</span>
                    <span class="info-box-number"><?php echo $atrasos_alquiler ?></span>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header border-0">
            <div class="d-flex justify-content-between">
                <h3 class="card-title">Alquileres Totales</h3>
                <a href="javascript:void(0);">Reporte anual</a>
            </div>
        </div>
        <div class="card-body">
            <div class="d-flex">
                <p class="d-flex flex-column">
                    <span class="text-bold text-lg">$<?php echo $total_valor ?></span>
                    <span>Total hasta agosto</span>
                </p>
                <p class="ml-auto d-flex flex-column text-right">
                    <span class="text-muted">Desde enero</span>
                </p>
            </div>
            <!-- /.d-flex -->

            <div>
                <canvas id="myChart"></canvas>
            </div>
        </div>
    </div>

    <div>
        <canvas id="myChart"></canvas>
    </div>

</section>

<script>
    const labels = [
        'Enero',
        'Febrero',
        'Marzo',
        'Abril',
        'Mayo',
        'Junio',
        'Julio',
        'Agosto',
    ];

    const data = {
        labels: labels,
        datasets: [{
            backgroundColor: '#499BF2',
            borderColor: '#499BF2',
            data: [],
        }]
    };

    const config = {
        type: 'line',
        data: data,
        options: {}
    };
</script>
<script>
    const myChart = new Chart(
        document.getElementById('myChart'),
        config
    );
</script>

<!-- /.content -->
<?php include '../template/footer.php' ?>