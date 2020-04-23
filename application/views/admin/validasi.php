<class="container">
    <div class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-header text-center">
                    Form Validasi Pasien
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                            <small class="form-text text-danger"><?= form_error('nama') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="text">Email</label>
                            <input type="text" class="form-control" id="user_email" name="user_email">
                            <small class="form-text text-danger"><?= form_error('user_email') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="text">Kecamatan</label>
                            <input type="text" class="form-control" id="kecamatan" name="kecamatan">
                            <small class="form-text text-danger"><?= form_error('Kecamatan') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="text">Tanggal</label>
                            <input type="text" class="form-control" id="tanggal" name="tanggal">
                            <small class="form-text text-danger"><?= form_error('Tanggal') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="text">Jam</label>
                            <input type="text" class="form-control" id="jam" name="jam">
                            <small class="form-text text-danger"><?= form_error('Jam') ?>.</small>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>