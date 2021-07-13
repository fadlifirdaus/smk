<?= $this->include('templates/header'); ?>
<?= $this->include('templates/navbar'); ?>
<?= $this->include('templates/sidebar'); ?>
  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <!-- <div class="row"> -->
      <!-- contentttttttttttttttttttttttttttttttttttt -->
      <!-- general form elements -->
      <div class="card card-primary mx-3">
        <div class="card-header">
          <h3 class="card-title">Tambah User</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form>
          <div class="card-body">
            <div class="row">
              <div class="form-group col-6">
                <label for="InputNIK">NIK</label>
                <input type="text" class="form-control" id="InputNIK" placeholder="Nomor Induk Karyawan">
              </div>
              <div class="form-group col-6">
                <label for="InputNama">Nama</label>
                <input type="text" class="form-control" id="InputNama" placeholder="Nama Karyawan">
              </div>
              <div class="form-group col-12">
                <label>Divisi</label>
                <select class="form-control">
                  <option>Marketing</option>
                  <option>Finance</option>
                  <option>IT/CS</option>
                </select>
              </div>
              <div class="form-group col-6">
                <label for="InputEmail1">Email address</label>
                <input type="email" class="form-control" id="InputEmail1" placeholder="Enter email">
              </div>
              <div class="form-group col-6">
                <label for="InputPassword1">Password</label>
                <input type="password" class="form-control" id="InputPassword1" placeholder="Password">
              </div>
            </div>
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
      <!-- /.card -->
      <!-- end of contentttttttttttttttttttttttttttttttttttt -->
      <!-- </div> -->
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </div>
  <!-- /.content -->
<?= $this->include('templates/footer'); ?>