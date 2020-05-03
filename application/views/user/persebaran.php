<div class="container">
    <div class="row mt-5">
        <div class="col">
            <h3 class="text-center">Data Persebaran COVID-19</h3>
            <table class="table mt-5">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">NO</th>
                        <th class="text-center" scope="col">KECAMATAN</th>
                        <th class="text-center" scope="col">JUMLAH</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($datapenyebaran as $data) :
                        $kecamatan = $data['kecamatan'];
                        $jumlah = $data['jumlah']; ?>
                        <tr>
                            <td class="text-center"><?php echo $no++ ?></td>
                            <td class="text-center"><?php echo $kecamatan ?></td>
                            <td class="text-center"><?php echo $jumlah ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>