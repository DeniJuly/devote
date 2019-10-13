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

				<?php $no_paslon = 1 ; foreach ($calon as $calon) { ?>
				<div class="col-12 col-md-6 col-lg-6">
					<div class="card card-data_diri">
						<div class="title-calon"><h4>PASLON <?= $no_paslon++ ?></h4></div>
						<div class="card-body">
							<div class="container">
								<h6 class="title-card m-auto">
									<?= $calon['nama_calon'] ?>
								</h6>
								<div class="row" style="padding:20px;">
									<img
										src="<?= base_url() ?>public/img/foto_calon/<?php echo $calon['foto']?>"
										alt="foto profile"
										class="img-responsive img-profile"
									/>
								</div>
								<div class="row mt-3 button-footer">
									<button type="button"
										class="btn btn-visi_misi col-sm-4 col-4 offset-1 visi-btn" id="3" data-toggle="modal" data-target="#visimodal<?= $calon['id_calon'] ?>"
										>Visi Misi</button
									>
									<a
										href="<?= site_url() ?>/devote/pilih_input/<?= $calon['id_calon'] ?>"
										class="btn btn-pilih col-sm-5 col-5 offset-1 pilih-btn"
										>Pilih</a
									>
								</div>
							</div>
						</div>
					</div>
				</div>


				<!-- Modal -->
				<div class="modal fade" id="visimodal<?= $calon['id_calon'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h4 class="modal-title text-center" id="exampleModalLabel">Visi - Misi</h4>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				       <h5 class="modal-sub_title">Visi</h5>
				       <?= $calon['visi'] ?>
				       <br>
				       <h5 class="modal-sub_title">Misi</h5>
				       <?= $calon['misi'] ?>
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
		<script src="<?= base_url() ?>public/js/sweetalert2/sweetalert2.all.min.js"></script>
		<script src="<?= base_url() ?>public/js/jquery.js"></script>
		<script src="<?= base_url() ?>public/js/bootstrap/bootstrap.min.js" ></script>
		<script type="text/javascript">

			$('.pilih-btn').on('click',function(e){

				e.preventDefault();
				const href = $(this).attr('href');
				Swal.fire({
				  title: 'Apakah anda Yakin?',
				  text: "",
				  type: 'question',
				  showCancelButton: true,
				  confirmButtonColor: '#3085d6',
				  cancelButtonColor: '#d33',
				  confirmButtonText: 'Pilih',
				  cancelButtonText : 'Batal'
				}).then((result) => {
				  if (result.value) {
				    	document.location.href = href;
				  }
				})
			})
		</script>
	</body>
</html>
