<class="container">
    <div class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-header text-center">
                    Form Hasil Test Covid-19
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $user['id'] ?>">

                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $tbl_users['nama']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="user_email">Email</label>
                            <input type="text" class="form-control" id="user_email" name="user_email" value="<?= $tbl_users['user_emails']; ?>">
                            <small class="form-text text-danger"><?= form_error('email') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="text">Kecamatan</label>
                            <input type="text" class="form-control" id="kecamatan" name="kecamatan" value="<?= $tbl_users['kecamatan']; ?>">
                            <small class="form-text text-danger"><?= form_error('kecamatan') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="text">Status</label>
                            <input type="text" class="form-control" id="status" name="status" value="<?= $tbl_users['status']; ?>">
                            <small class="form-text text-danger"><?= form_error('status') ?>.</small>
                        </div>
                </div>
                <button type="submit" name="tambah" class="btn btn-primary float-right">Simpan Data</button>
                </form>
            </div>
        </div>

    </div>
    </div>
    </div>