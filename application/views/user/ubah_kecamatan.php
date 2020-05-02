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
                        <button type="submit" class="btn btn-primary float-right">Ubah</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>