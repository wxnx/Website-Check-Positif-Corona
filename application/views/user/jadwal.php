<div class="container">
    <div class="row mt-5">
        <div class="col">
            <h3 class="text-center">Jadwal Test COVID-19</h3>

            <table class="table mt-5">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">NAMA</th>
                        <th class="text-center" scope="col">EMAIL</th>
                        <th class="text-center" scope="col">JADWAL</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center"><?php echo $this->session->userdata('nama'); ?></td>
                        <td class="text-center"><?php echo $this->session->userdata('email'); ?></td>
                        <td class="text-center"><?php echo $this->session->userdata('jadwal'); ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>