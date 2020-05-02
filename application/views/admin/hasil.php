<div class="container">
    <div class="box">
        <h2>Form Hasil Test COVID-19</h2>
        <table class="table table-bordered" id="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Kecamatan</th>
                    <th>Status</th>
                    <th>Edit</th>
                    <th>Hapus</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($datapasien as $d) { ?>
                    <tr>
                        <!--HINT UNTUK MENGHAPUS USER KALIAN DAPAT MENGGUNAKAN FORM, MENGGUNAKAN ANCHOR ATAU HREF PADA BUTTON-->
                        <form action="">
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $d->nama ?></td>
                            <td><?php echo $d->email ?></td>
                            <td><?php echo $d->kecamatan ?></td>
                            <td><?php echo $d->status ?></td>
                            <td><button type="button" class="btn btn-" data-toggle="modal" data-target="#edit<?php echo $d->nama ?>">Validasi Status</button></td>
                            <td><a type="button" class="btn btn-danger" href="<?php echo base_url('index.php/status_pasien/hapus_data/' . $d->email); ?>" onClick="return confirm('Apakah Anda Yakin?')"><i class="fas fa-user-times"></i></a></td>
                        </form>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Modal Input Jadwal -->

<?php $no = 1;
foreach ($datapasien as $d) { ?>
    <div class="modal fade" id="edit<?php echo $d->nama ?>">
        <div class="modal-dialog">
            <form method="post" action="<?php echo site_url('status_pasien/hasil'); ?>">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Input Status</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- isi form ini -->

                        <input type="hidden" class="form-control" id="formGroupExampleInput" placeholder="nama" name="nama" value="<?php echo $d->nama ?>" required>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Status</label>
                            <select class="form-control" id="formGroupExampleInput" name="status" value="<?php echo $d->status ?>" required>
                                <option value="Positif (+)">Positif (+)</option>
                                <option value="Negatif (-)">Negatif (-)</option>
                            </select>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                        <input type="submit" class="btn btn-primary" value="Submit" placeholder="Simpan"> </div>
                </div>
            </form>
        </div>
    </div>
<?php } ?>

</body>
<script type="text/javascript">
    $(document).ready(function() {
        $('#table').DataTable();
    });
</script>

</html>