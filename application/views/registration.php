<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Daftar</title>

	<!-- Custom fonts for this template-->
	<link href="<?= base_url(); ?>/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet"
		type="text/css">
	<link
		href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
		rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="<?= base_url(); ?>/assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

	<div class="container">

		<div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
			<div class="card-body p-0">
				<!-- Nested Row within Card Body -->
				<div class="row">
					<div class="col-lg">
						<div class="p-5">
							<div class="text-center">
								<h1 class="h4 text-gray-900 mb-4">Daftar Sia</h1>
							</div>
							<?php echo form_open_multipart('/daftar/proses'); ?>
								<div class="form-group">
									<input type="text" class="form-control form-control-user" id="name" name="nama"
										placeholder="Nama Lengkap">

								</div>
								<div class="form-group">
									<input type="text" class="form-control form-control-user" id="nim" name="nim"
										placeholder="NIM">
								</div>

								<div class="form-group">
									<select required class="form-control" id="prodi" name="prodi">
										<option disabled>--Pilih Prodi--</option>
										<option value="Teknik Informatika">Teknik Informatika</option>
										<option value="Teknik Elektro">Teknik Elektro</option>
										<option value="Teknik Mesin">Teknik Mesin</option>
										<option value="Pendidikan Teknik Informatika">Pendidikan Teknik Informatika
										</option>
										<option value="Pendidikan Teknik Elektro">Pendidikan Teknik Elektro</option>
										<option value="Pendidikan Teknik Mesin">Pendidikan Teknik Mesin</option>
									</select>
								</div>
								<div class="custom-file">
									<input type="file" accept=".jpg, .jpeg, .png" class="custom-file-input" name="foto"
										id="foto" required>
									<label class="custom-file-label" for="foto">Pilih Foto</label>
									<small id="foto" class="text-muted">
										Format file: (JPG, JPEG, PNG)
									</small>
								</div>

								<div class="form-group">
									<input type="password" class="form-control form-control-user" id="password"
										name="password" placeholder="Password">
								</div>

								<button type="submit" class="btn btn-success shadow-lg btn-user btn-block">
									Daftar
								</button>

							<?php echo form_close(); ?>
							<hr>
							<!--<div class="text-center">
                            <a class="small" href="<?php /*echo base_url('auth/forgotpassword');*/ ?>">Forgot Password?</a>
                        </div>-->
							<div class="text-center">
								<a class="small" href="#">Already have an account? Login!</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>



	<!-- Bootstrap core JavaScript-->
	<script src="<?php echo base_url(); ?>/assets/vendor/jquery/jquery.min.js"></script>
	<script src="<?= base_url(); ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Core plugin JavaScript-->
	<script src="<?= base_url(); ?>/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

	<!-- Custom scripts for all pages-->
	<script src="<?= base_url(); ?>/assets/js/sb-admin-2.min.js"></script>
	<!-- Upload Gambar js -->
	<script type="application/javascript">
		$('input[type="file"]').change(function (e) {
			var fileName = e.target.files[0].name;
			$('.custom-file-label').html(fileName);
		});
	</script>
</body>

</html>