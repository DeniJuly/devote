<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- bootstrap -->
    <link
        rel="stylesheet"
        href="<?= base_url() ?>public/css/bootstrap/bootstrap.min.css"
    />
    <!-- my styles -->
    <link
        rel="stylesheet"
        href="<?= base_url() ?>public/css/aspirasi.css"
    />
    <!-- sweetalert -->
    <link
        rel="stylesheet"
        href="<?= base_url() ?>public/css/sweetalert2/sweetalert2.min.css"
    />
      <!-- owl css -->
    <link rel="stylesheet" href="<?= base_url() ?>public/owl/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>public/owl/css/owl.theme.default.css">
    <title>Aspirasi - DeVote</title>
</head>
<body>
    <div class="background"></div>
    <div class="container container-data_diri">
        <div class="judul-halaman">
            <h4>Terimakasih, telah memilih</h4>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-6 offset-md-3 offset-lg-3">
                <div class="card card-data_diri">
                    <div class="card-body">
                        <form method="post" class="form" id="aspirasiform">
                            <h5 class="text-center">Apa harapan kamu untuk OSIS periode 2019/2020?</h5 class="text-center">
                                <textarea name="isi" id="aspirasi" class="form-control" required placeholder="tulis harapan kamu disini..."></textarea>
                                <button class="btn-kirim" type="submit">SIMPAN</button>
                            </div>
                        </form>
                    </div>
                
                <p class="text-center mt-5">Beberapa harapan dari teman-teman</p>
            </div>
            </div>
            <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-lg-6 col-md-6 offset-md-3 offset-lg-3">
                    <div class="owl-carousel">
                        <?php foreach ($aspirasi as $aspirasi ) { ?>
                        <div class="harapan">
                            <p><?= $aspirasi['isi']?></p>
                            <div class="photo">
                                <img <?php if ($aspirasi['jk'] ==  1) {?>
                                        src="<?= base_url() ?>public/img/icon/man.png"
                                       <?php } else {?>
                                        src="<?= base_url() ?>public/img/icon/girl.png"
                                       <?php } ?>  alt="photo-profile">
                                <center>
                                    <span class="text-center"><?= $aspirasi['nama']?></span>
                                </center>
                            </div> 
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <script src="<?= base_url() ?>public/js/jquery.js"></script>
    <script src="<?= base_url() ?>public/js/fontawesome/fontawesome.js"></script>
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js"
    integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U"
    crossorigin="anonymous"></script>
    <script src="<?= base_url() ?>public/owl/js/owl.carousel.min.js"></script>
    <script src="<?= base_url() ?>public/js/sweetalert2/sweetalert2.all.min.js"></script>
    <script>
        $(document).ready(function () {
        $('#aspirasiform').submit(function(e){
            e.preventDefault();

            $('.btn-kirim').html('<button class="btn login color-white" type="submit" id="login-btn" style="color: #fff!important" DISABLED><span class="spinner-border spinner-border-sm mb-1 color-white" role="status" aria-hidden="true"></span> <span class="color-white">Loading...<span></button>');
            var url = '<?php echo base_url(); ?>';
            var user = $('#aspirasiform').serialize();
            var login = function(){
                $.ajax({
                    type: 'POST',
                    url: "<?= site_url()?>/devote/input_aspirasi",
                    dataType: 'json',
                    data: user,
                    success:function(response){
                        $('.btn-kirim').html('<button class="btn login color-white" type="submit" id="login-btn" style="color: #fff!important" ><span class="color-white">SIMPAN<span></button>');
                        if(response.error){
                            $('#responseDiv').removeClass('alert-success').addClass('alert-danger').show();
                        }
                        else{
                            
                            Swal.fire({
                              position: 'center',
                              type: 'success',
                              text : 'Terima Kasih Sudah Memilih',
                              showConfirmButton: false,
                              timer: 1500
                            });

                            $('#aspirasiform')[0].reset();
                            setTimeout(function(){
                                window.location = "<?= site_url()?>/login/logout";
                            }, 1200);
                        }
                    }
                });
            };
            setTimeout(login, 200);
        });

            $(".owl-carousel").owlCarousel({
                items: 1,
                autoPlay: 5000,
                stagePadding: 10, //padding in pixels
                smartSpeed: 400,
                // navigationText: true,
                // nav: true,
                // navText: ["prev", "go"]
            });
        });
    </script>
</body>
</html>