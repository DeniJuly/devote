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
			href="<?= base_url() ?>public/js/sweetalert/sweetalert2.min.css"
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
				src="<?= base_url() ?>public/img/decoration/purple-botom.svg"
				alt=""
				width="100%"
				id="right"
			/>
			<img
				src="<?= base_url() ?>public/img/decoration/green-bottom.svg"
				alt=""
				width="100%"
				id="left"
			/>
		</div>
		<div class="container">
			<h1>LOGIN</h1>
			<form action="<?= base_url() ?>index.php/Login/login_process" method="POST">
				<div class="form-group">
					<label for="exampleInputEmail1">Username</label>
					<input
						type="text"
						class="form-control"
						id="username"
						placeholder="masukan username"
					/>
					<small id="usernamehelp" class="form-text text-muted"
						>harap masukan username dengan benar</small
					>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input
						type="password"
						class="form-control"
						id="password"
						placeholder="masukan password"
					/>
				</div>
				<div class="login-btn">
					<button class="btn login">LOGIN</button>
				</div>
			</form>
			</div>
		</div>
	</body>
	<script src="<?= base_url() ?>public/js/jquery.min.js"></script>
	<script src="<?= base_url() ?>public/js/bootstrap/bootstrap.min.js"></script>
	<script src="<?= base_url() ?>public/js/sweetalert2/sweetalert2.all.min.js"></script>
</html>
