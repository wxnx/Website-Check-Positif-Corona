<!DOCTYPE html>
<html>

<head>
	<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" />
	<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/style.css'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Register</title>
</head>

<body>
	<form action="<?= site_url('register/register') ?>" method="post" enctype="multipart/form-data">
		<h2>Register</h2>
		<?php if (isset($error_message)) { ?>
			<div class="alert alert-danger" role="alert">
				<?= $error_message ?>
			</div>
		<?php } ?>
		<div class="form-group">
			<input type="text" class="form-control" name="nama" placeholder="Nama" required>
		</div>
		<div class="form-group">
			<input type="text" class="form-control" name="email" placeholder="E-mail" required>
		</div>
		<div class="form-group">
			<input type="password" class="form-control" name="password" placeholder="Password" required>
		</div>
		<div class="form-group">
			<input type="password" class="form-control" name="re-password" placeholder="Re-Enter Password" required>
		</div>
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
		</div>
		<button type="submit" class="btn btn-primary">Register</button>
		<p>Already have an account? Login <a href="<?= site_url('login/index') ?>">here</a></p>
	</form>
	<script src="<?php echo base_url('assets/jquery-3.2.1.min.js'); ?>"></script>
	<script>
		$('.custom-file-input').on('change', function() {
			let fileName = $(this).val().split('\\').pop();
			$(this).next('.custom-file-label').addClass("selected").html(fileName);
		});
	</script>
</body>

</html>