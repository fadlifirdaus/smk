<?= $this->include('templates/header'); ?>
<?= $this->include('templates/navbar'); ?>
<?= $this->include('templates/sidebar'); ?>

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row d-flex justify-content-around mb-5">
                <a class="btn disabled bg-success col-4 p-5">
                    <i class="fas fa-fingerprint fa-4x pb-2"></i>
                    <br />
                    Absen Masuk
                    <br />
                    <h5>11:12:00</h5>
                </a>
                <a class="btn bg-danger col-4 p-5">
                    <i class="fas fa-fingerprint fa-4x pb-2"></i>
                    <br />
                    Absen Keluar
                    <br />
                    <h5>11:12:00</h5>
                </a>
            </div>
            <!-- /.row -->

            <div class="row ">
                <div class="card w-100 mx-3">
                    <div class="card-header">
                        <h3 class="card-title">Riwayat Absensi</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <table class="table table-striped text-center">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Tanggal</th>
                                    <th>Absen Masuk</th>
                                    <th>Absen Keluar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>12-06-21</td>
                                    <td>12-06-21 07:01</td>
                                    <td>12-06-21 15:02</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>11-06-21</td>
                                    <td>11-06-21 06:55</td>
                                    <td>11-06-21 15:04</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>10-06-21</td>
                                    <td>10-06-21 07:00</td>
                                    <td>10-06-21 15:00</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>9-06-21</td>
                                    <td>9-06-21 07:05</td>
                                    <td>9-06-21 15:05</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->

<?= $this->include('templates/footer'); ?>