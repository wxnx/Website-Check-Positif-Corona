<div class="container">
    <div class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-header text-center">
                    Ubah Kecamatan
                </div>
                <div class="card-body">
                    <form action="<?php echo site_url('ubah_kecamatan/hasil') ?>" method="post">
                        <div class="form-group">
                            <label for="kecamatan">Kecamatan</label>
                            <input type="text" class="form-control" id="kecamatan" name="kecamatan">
                            <small class="form-text text-danger"><?= form_error('kecamatan') ?>.</small>
                        </div>
                        <button type="submit" class="btn btn-primary float-right">Ubah</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>