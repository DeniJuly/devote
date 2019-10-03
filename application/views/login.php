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
			<form method="POST">
				<div class="form-group">
					<label for="nis" class="label-login color-green">Nis</label>
					<input
						type="number"
						class="form-control bg-input rounded-0"
						id="nis"
						placeholder="masukan nis"
						autofocus="on"
						name="nis"
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
					/>
				</div>
				<div class="login-btn">
					<button class="btn login" type="submit">MASUK</button>
				</div>
			</form>
			</div>
		</div>
	</body>
	<script src="<?= base_url() ?>public/js/jquery.js"></script>
	<script src="<?= base_url() ?>public/js/bootstrap/bootstrap.min.js"></script>
	<script src="<?= base_url() ?>public/js/sweetalert2/sweetalert2.all.min.js"></script>
</html>
