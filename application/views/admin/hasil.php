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
                            <td><button type="button" class="btn btn-" data-toggle="modal" data-target="#edit">Validasi Status</button></td>
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
    <div class="modal fade" id="edit" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Input Status</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- isi form ini -->
                    <form method="post" action="<?php echo base_url('validasi_pasien/validasi'); ?>">
                        <input type="hidden" class="form-control" id="formGroupExampleInput" placeholder="Email" name="email" value="<?php echo $d->email ?>" required>
                        <div class="form-group">
                            <label for="formGroupExampleInput">status</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="status" name="status" value="<?php echo $d->status ?>" required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                    <input type="submit" class="btn btn-primary" id="hapus" value="Submit" placeholder="Simpan"> </div>
                </form>
            </div>
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