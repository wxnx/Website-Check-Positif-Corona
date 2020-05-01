<div class="container">
    <div class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-header text-center">
                    Ubah Password
                </div>
                <div class="card-body">
                    <form action="<?php echo site_url('ubah_password/hasil') ?>" method="post">
                        <div class="form-group">
                            <label for="password">Masukkan Password Baru</label>
                            
							<input type="text" class="form-control" id="password" name="password">
                            <small class="form-text text-danger"><?= form_error('password') ?>.</small>
                        </div>
                        <button type="submit" class="btn btn-primary float-right">Ubah</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>