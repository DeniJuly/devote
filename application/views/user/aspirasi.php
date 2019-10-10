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
            <div class="col-12 col-md-6 col-lg-6">
                <div class="card card-data_diri">
                    <div class="card-body">
                        <form action="" class="form">
                            <div class="form-group">
                            <h5 class="text-center">Apa harapan kamu untuk OSIS periode 2019/2020?</h5 class="text-center">
                                <textarea name="aspirasi" id="aspirasi" class="form-control" placeholder="tulis harapan kamu disini..."></textarea>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-12">
                                    <button class="btn-kirim">SIMPAN</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <p class="text-center mt-5">Beberapa harapan dari teman-teman</p>
            </div>
            <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12">
                    <div class="owl-carousel">
                        <?php for ($i=0; $i < 10; $i++):?>
                        <div class="harapan">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <div class="photo">
                                <img src="<?= base_url() ?>public/img/deni.JPG" alt="photo-profile">
                                <center>
                                    <span class="text-center">Deni Juli</span>
                                </center>
                            </div> 
                        </div>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
            </div>
            <!-- <div class="col-12 col-md-6 col-lg-6 col-aspirasi">
                <div class="card card-aspirasi">
                    <div class="card-body">
                        <div class="pengirim">
                            <h5>Deni Juli Setiawan</h5>
                        </div>
                        <div class="isi-aspirasi">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                                Nesciunt esse, nisi temporibus est similique veritatis 
                            </p>
                        </div>
                        <div class="tanggal text-right">
                            <p>08:00:19</p>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
    <script src="<?= base_url() ?>public/js/jquery.js"></script>
    <script src="<?= base_url() ?>public/js/fontawesome/fontawesome.js"></script>
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js"
    integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U"
    crossorigin="anonymous"></script>
    <script src="<?= base_url() ?>public/owl/js/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function () {
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