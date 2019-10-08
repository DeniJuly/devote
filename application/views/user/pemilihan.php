<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<!-- bootstrap -->
		<link
			rel="stylesheet"
			href="<?= base_url() ?>public/css/bootstrap/bootstrap.min.css"
		/>
		<!-- my styles -->
		<link rel="stylesheet" href="<?= base_url() ?>public/css/pemilihan.css" />
		<!-- sweetalert -->
		<link
			rel="stylesheet"
			href="<?= base_url() ?>public/css/sweetalert2/sweetalert2.min.css"
		/>
		<title>Pemilihan - DeVote</title>
	</head>
	<body>
		<div class="background"></div>
		<div class="mid-right">
			<img src="<?= base_url() ?>public/img/decoration/mid_right.svg" alt="ilustration-mid-side">
		</div>
		<div class="container container-data_diri">
			<div class="judul-halaman">
				<h1>PEMILIHAN</h1>
			</div>
			<div class="row">
				<?php foreach ($calon as $calon) { ?>
				<div class="col-12 col-md-6 col-lg-6">
					<div class="card card-data_diri">
						<div class="title-calon"><h4>PASLON 1</h4></div>
						<div class="card-body">
							<div class="container">
								<h6 class="title-card m-auto">
									<?= $calon['nama_calon'] ?>
								</h6>
								<div class="row" style="padding:20px;">
									<img
										src="<?= base_url() ?>public/img/example.jpg"
										alt="foto profile"
										class="img-responsive img-profile"
									/>
								</div>
								<div class="row mt-3 button-footer">
									<a
										href="<?= site_url() ?>/devote/pemilihan"
										class="btn btn-visi_misi col-sm-4 col-4 offset-1"
										disabled="disabled"
										>Visi Misi</a
									>
									<a
										href="<?= site_url() ?>/devote/pemilihan"
										class="btn btn-pilih col-sm-5 col-5 offset-1"
										disabled="disabled"
										>Pilih</a
									>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
			</div>
		</div>
		<footer>
		<div class="left-bottom">
			<img src="<?= base_url() ?>public/img/decoration/left_bottom.svg" alt="ilustration-left-bottom">
		</div>
		</footer>
		<script src="<?= base_url() ?>public/js/fontawesome/fontawesome.js"></script>
		<script src="<?= base_url() ?>public/js/jquery.js"></script>
	</body>
</html>
