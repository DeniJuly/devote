<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<title>Login</title>
		<!-- bootstrap -->
		<link
			rel="stylesheet"
			href="<?= base_url() ?>public/css/bootstrap/bootstrap.min.css"
		/>
		<!-- my styles -->
		<link
			rel="stylesheet"
			href="<?= base_url() ?>public/css/login.css"
		/>
		<!-- sweetalert -->
		<link
			rel="stylesheet"
			href="<?= base_url() ?>public/css/sweetalert2/sweetalert2.min.css"
		/>
	</head>
	<body>
		<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash');?>"> </div>
		<div class="svg">
			<img
				src="<?= base_url() ?>public/img/decoration/green_top.svg"
				alt=""
				width="100%"
				id="right-top"
			/>
			<img
				src="<?= base_url() ?>public/img/decoration/purple_bottom.svg"
				alt=""
				width="100%"
				id="right"
			/>
			<img
				src="<?= base_url() ?>public/img/decoration/green_bottom.svg"
				alt=""
				width="100%"
				id="left"
			/>
		</div>
		<div class="logo">
			<img src="<?= base_url()?>public/img/logo/smk.png" alt="Logo SMKN 1 Bawang">
		</div>
		<div class="container container-login">
			<h1>LOGIN</h1>
			<form method="POST" id="logForm">
				<div class="form-group">
					<label for="nis" class="label-login color-green">Nis</label>
					<input
						type="number"
						class="form-control bg-input rounded-0"
						id="nis"
						placeholder="masukan nis"
						autofocus="on"
						name="nis"
						autocomplete="off"
					/>
				</div>
				<div class="form-group">
					<label for="token" class="label-login color-green">Token</label>
					<input
						type="text"
						class="form-control bg-input rounded-0"
						id="token"
						placeholder="masukan token"
						name="token"
						autocomplete="off"
					/>
				</div>
				<div class="login-btn">
					<button class="btn login color-white" type="submit" id="login-btn" style="color: #fff!important"><span id="logText">MASUK</span></button>
				</div>
			</form>
		</div>
	</body>
	<script src="<?= base_url() ?>public/js/jquery.js"></script>
	<script src="<?= base_url() ?>public/js/bootstrap/bootstrap.min.js"></script>
	<script src="<?= base_url() ?>public/js/sweetalert2/sweetalert2.all.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$('#logForm').submit(function(e){
			e.preventDefault();

			$('.login-btn').html('<button class="btn login color-white" type="submit" id="login-btn" style="color: #fff!important" DISABLED><span class="spinner-border spinner-border-sm mb-1 color-white" role="status" aria-hidden="true"></span> <span class="color-white">Loading...<span></button>');
			var url = '<?php echo base_url(); ?>';
			var user = $('#logForm').serialize();
			var login = function(){
				$.ajax({
					type: 'POST',
					url: url + 'index.php/login/login',
					dataType: 'json',
					data: user,
					success:function(response){
						$('.login-btn').html('<button class="btn login color-white" type="submit" id="login-btn" style="color: #fff!important" ><span class="color-white">MASUK<span></button>');
						if(response.error){
							Swal.fire({
							  position: 'center',
							  type: 'error',
							  text: response.message,
							  showConfirmButton: false,
							  timer: 1800
							})
						}
						else{
							$('#logForm')[0].reset();
							setTimeout(function(){
								location.reload();
							}, 100);
						}
					}
				});
			};
			setTimeout(login, 100);
		});

		$(document).on('click', '#clearMsg', function(){
			$('#responseDiv').hide();
		});
		const flashdata = $('.flash-data').data('flashdata');
		if (flashdata) {
			Swal.fire({
			  position: 'center',
			  type: 'success',
			  title: flashdata,
			  showConfirmButton: false,
			  timer: 1800
			})
		}
	});
	</script>
</html>
