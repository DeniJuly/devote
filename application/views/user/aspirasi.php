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
    <title>Aspirasi - DeVote</title>
</head>
<body>
    <div class="background"></div>
    <div class="container container-data_diri">
        <div class="judul-halaman">
            <h1>ASPIRASI</h1>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-6">
                <div class="card card-data_diri">
                    <div class="card-body">
                        <form action="" class="form">
                            <div class="form-group">
                                <textarea name="" id="" class="form-control" placeholder="Aspirasi..."></textarea>
                                <!-- <a href="<?= site_url()?>/devote/keluar" class="btn btn-kirim">Kirim</a> -->
                            </div>
                            <div class="button">
                                <a href="<?= site_url()?>/devote/keluar" class="btn btn-lanjut">Lewati</a>
                                <a href="<?= site_url()?>/devote/ulasan" class="btn btn-kirim">Kirim</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6 col-aspirasi">
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
            </div>
        </div>
    </div>
    <script src="<?= base_url() ?>public/js/fontawesome/fontawesome.js"></script>
    <script src="<?= base_url() ?>public/js/jquery.js"></script>
</body>
</html>