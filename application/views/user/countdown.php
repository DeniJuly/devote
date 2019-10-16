<!DOCTYPE HTML> 
<html> 
<head> 
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- bootstrap -->
    <link
        rel="stylesheet"
        href="<?= base_url() ?>public/css/bootstrap/bootstrap.min.css"
    />
    <!-- sweetalert -->
    <link
        rel="stylesheet"
        href="<?= base_url() ?>public/css/sweetalert2/sweetalert2.min.css"
    />
    <!-- shortcut -->
    <link 
        rel="shortcut icon" 
        href="<?= base_url()?>public/img/logo/shortcut.png" 
        type="image/x-icon"
    />
    <!-- owl css -->
    <link rel="stylesheet" href="<?= base_url() ?>public/owl/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>public/owl/css/owl.theme.default.css">
	<style>
		html,
		body,
		.container,
		.row{
			height:100%
		}
		.bungkus{
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			height: 100%;
		}
	</style>
    <title>Pending - DeVote</title>
</head> 
<body> 
	<div class="container">
		<div class="row">
			<div class="col-10 col-md-6 col-lg-6 offset-1 offset-md-3 offset-lg-3 text-center bungkus">
				<img src="<?php echo base_url() ?>public/img/logo/logo.png" alt="LOGO" width="60%">
				<h3 style="color:#2cb778">Waktu Pemilihan Akan Dibuka Dalam</h3>
				<h1 id="demo"></h1> 
			</div>
		</div>
	</div>

<script src="<?= base_url() ?>public/js/jquery.js"></script>
<script> 
	var deadline = new Date("Oct 17, 2019 07:00:00").getTime(); 
	var x = setInterval(function() { 
	var now = new Date().getTime(); 
	var t = deadline - now; 
	var days = Math.floor(t / (1000 * 60 * 60 * 24)); 
	var hours = Math.floor((t%(1000 * 60 * 60 * 24))/(1000 * 60 * 60)); 
	var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60)); 
	var seconds = Math.floor((t % (1000 * 60)) / 1000); 
	document.getElementById("demo").innerHTML = days + "h " 
	+ hours + "j " + minutes + "m " + seconds + "d "; 
		if (t < 0) { 
			clearInterval(x); 
			document.getElementById("demo").innerHTML = "EXPIRED"; 
		} 
	}, 1000); 
</script> 

</body> 
</html> 
