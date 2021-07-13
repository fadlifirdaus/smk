<?= $this->include('templates/header'); ?>
<?= $this->include('templates/navbar'); ?>
<?= $this->include('templates/sidebar'); ?>


<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row d-flex justify-content-around">
            <!-- contentttttttttttttttttttttttttttttttttttt -->
            <div class="card card-widget widget-user m-auto col-6 p-0">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-info">
                    <h3 class="widget-user-username"><strong>Fadli Firdaus</strong></h3>
                    <h5 class="widget-user-desc">Staff IT/CS</h5>
                </div>
                <div class="widget-user-image">
                    <img class="img-circle elevation-2" src="<?= base_url(); ?>/img/user1-128x128.jpg" alt="User Avatar">
                </div>
                <div class="card-footer px-0 pb-0">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <td class="text-muted">Nama</td>
                                <td>Fadli Firdaus</td>
                            </tr>
                            <tr>
                                <td class="text-muted">NIK</td>
                                <td>112233</td>
                            </tr>
                            <tr>
                                <td class="text-muted">Divisi</td>
                                <td>IT/CS</td>
                            </tr>
                            <tr>
                                <td class="text-muted">Jabatan</td>
                                <td>Staff</td>
                            </tr>
                            <tr>
                                <td class="text-muted">Email</td>
                                <td>fadli.firdaus@gmail.com</td>
                            </tr>
                            <tr>
                                <td class="text-muted">No. HP</td>
                                <td>08123456789</td>
                            </tr>

                        </tbody>
                    </table>
                    <div class="w-50 mx-auto my-3">
                        <a href="#" class="btn btn-primary btn-block"><b>Edit Profile</b></a>
                    </div>
                </div>
            </div>
            <!-- end of contentttttttttttttttttttttttttttttttttttt -->
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->
</div>
<!-- /.content -->
<?= $this->include('templates/footer'); ?>