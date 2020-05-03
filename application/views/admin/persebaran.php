<div class="container">
    <div class="box">
        <h2>Data Persebaran COVID-19</h2>
        <p>Tabel Data Persebaran COVID-19</p>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit1">TAMBAH DATA</button>
        <br><br>
        <table class="table table-bordered" id="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kecamatan</th>
                    <th>Jumlah</th>
                    <th>Edit</th>
                    <th>Hapus</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($datapenyebaran as $d) { ?>
                    <tr>
                        <form action="">
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $d->kecamatan ?></td>
                            <td><?php echo $d->jumlah ?></td>

                            <td><button type="button" class="btn btn-" data-toggle="modal" data-target="#edit<? echo $d->id ?>">Edit</button></td>

                            <td><a type="button" class="btn btn-danger" href="<?php echo base_url('index.php/data_penyebaran/hapus/' . $d->id); ?>" onClick="return confirm('Apakah Anda Yakin?')"><i class="fas fa-user-times"></i></a></td>
                        </form>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<?php $no = 1;
foreach ($datapenyebaran as $d) { ?>
    <div class="modal fade" id="edit<? echo $d->id ?>">
        <div class="modal-dialog">
            <form method="post" action="<?php echo site_url('data_penyebaran/edit') ?>">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" class="form-control" id="formGroupExampleInput" placeholder="id" name="id" value="<? echo $d->id ?>" required>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Jumlah</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="jumlah" name="jumlah" value="<? echo $d->jumlah ?>" required>
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

<div class="modal fade" id="edit1">
    <div class="modal-dialog">
        <form method="POST" action="<?php echo site_url('data_penyebaran/tambah/'); ?>">
            <div class="modal-content">
                <div class="modal-header">
                    <center>
                        <h2>TAMBAH DATA</h2>
                    </center>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="kecamatan">Kecamatan</label>
                        <select class="form-control" id="kecamatan" name="kecamatan">
                            <option value="Andir">Andir</option>
                            <option value="Astana Anyar">Astana Anyar</option>
                            <option value="Antapani">Antapani</option>
                            <option value="Arcamanik">Arcamanik</option>
                            <option value="Babakan Ciparay">Babakan Ciparay</option>
                            <option value="Bandung Kidul">Bandung Kidul</option>
                            <option value="Bandung Kulon">Bandung Kulon</option>
                            <option value="Bandung Wetan">Bandung Wetan</option>
                            <option value="Batununggal">Batununggal</option>
                            <option value="Bojongloa Kaler">Bojongloa Kaler</option>
                            <option value="Bojongloa Kidul">Bojongloa Kidul</option>
                            <option value="Buah Batu">Buah Batu</option>
                            <option value="Cibeunying Kaler">Cibeunying Kaler</option>
                            <option value="Cibeunying Kidul">Cibeunying Kidul</option>
                            <option value="Cibiru">Cibiru</option>
                            <option value="Cicendo">Cicendo</option>
                            <option value="Cicadap">Cicadap</option>
                            <option value="Cinambo">Cinambo</option>
                            <option value="Coblong">Coblong</option>
                            <option value="Gedebage">Gedebage</option>
                            <option value="Kiaracondong">Kiaracondong</option>
                            <option value="Lengkong">Lengkong</option>
                            <option value="Mandalajati">Mandalajati</option>
                            <option value="Panyileukan">Panyileukan</option>
                            <option value="Rancasari">Rancasari</option>
                            <option value="Regol">Regol</option>
                            <option value="Sukajadi">Sukajadi</option>
                            <option value="Sukasari">Sukasari</option>
                            <option value="Sumur Bandung">Sumur Bandung</option>
                            <option value="Ujungberung">Ujungberung</option>
                        </select>
                        <small class="form-text text-danger"><?= form_error('kecamatan') ?>.</small>
                    </div>
                    <div class="form-group">
                        <label for="jumlah">Jumlah</label>
                        <input type="text" class="form-control" id="jumlah" name="jumlah">
                        <small class="form-text text-danger"><?= form_error('jumlah') ?>.</small>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <input type="submit" class="btn btn-primary" id="hapus" value="Submit" placeholder="Simpan">
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

</body>
<script type="text/javascript">
    $(document).ready(function() {
        $('#table').DataTable();
    });
</script>

</html>