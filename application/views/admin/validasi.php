<div class="container">
    <div class="box">
        <h2>Form Validasi Pasien</h2>
        <table class="table table-bordered" id="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Jadwal</th>
                    <th>Edit</th>
                    <th>Hapus</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($datapasien as $d) { ?>
                    <tr>
                        <form action="">
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $d->nama ?></td>
                            <td><?php echo $d->email ?></td>
                            <td><?php echo $d->jadwal ?></td>
                            <td><button type="button" class="btn btn-" data-toggle="modal" data-target="#edit<?php echo $d->id ?>">Validasi</button></td>
                            <td><a type="button" class="btn btn-danger" href="<?php echo base_url('index.php/validasi_pasien/hapus_data/' . $d->id); ?>" onClick="return confirm('Apakah Anda Yakin?')"><i class="fas fa-user-times"></i></a></td>
                        </form>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<?php $no = 1;
foreach ($datapasien as $d) { ?>
    <div class="modal fade" id="edit<?php echo $d->id ?>">
        <div class="modal-dialog">
            <form method="post" action="<?php echo site_url('validasi_pasien/validasi'); ?>">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Input Jadwal</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" class="form-control" id="formGroupExampleInput" placeholder="id" name="id" value="<?php echo $d->id ?>" required>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Jadwal</label>
                            <input type="date" class="form-control" id="formGroupExampleInput" placeholder="jadwal" name="jadwal" value="<?php echo $d->jadwal ?>" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                        <input type="submit" class="btn btn-primary" value="Submit">
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php } ?>