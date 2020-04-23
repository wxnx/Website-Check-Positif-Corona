<div class="container">
    <div class="row mt-5">
        <div class="col">
            <h3 class="text-center">Hasil Test</h3>

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
                	<?php foreach ($tbl_users as $user): ?>
                    <tr>
                            <td class="text-center"><?php echo $user['nama']?></td>
                            <td class="text-center"><?php echo $user['user_email']?></td>
                            <td class="text-center"><?php echo $user['kecamatan']?></td>
                            <td class="text-center"><?php echo $user['status_user']?></td>
                    </tr>
             		<?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
