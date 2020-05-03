<div class="container">
    <div class="row mt-5">
        <div class="col">
            <h3 class="text-center">Hasil Test COVID-19</h3>
            <table class="table mt-5">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">NAMA</th>
                        <th class="text-center" scope="col">EMAIL</th>
                        <th class="text-center" scope="col">KECAMATAN</th>
                        <th class="text-center" scope="col">STATUS</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center"><?php echo $this->session->userdata('nama'); ?></td>
                        <td class="text-center"><?php echo $this->session->userdata('email'); ?></td>
                        <td class="text-center"><?php echo $this->session->userdata('kecamatan'); ?></td>
                        <td class="text-center"><?php echo $this->session->userdata('status'); ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>