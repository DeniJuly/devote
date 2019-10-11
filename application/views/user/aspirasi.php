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
                        <form action="<?= site_url()?>/devote/input_aspirasi" method="post" class="form">
                            <div class="form-group">
                                <textarea name="isi" id="" class="form-control" placeholder="Aspirasi..."></textarea>
                                <!-- <a href="<?= site_url()?>/devote/keluar" class="btn btn-kirim">Kirim</a> -->
                            </div>
                            <div class="button">
                                <a href="<?= site_url()?>/devote/login/logout" class="btn btn-lanjut">Lewati</a>
                                <button type="submit" class="btn btn-kirim">Kirim</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6 col-aspirasi">
                <?php foreach ($aspirasi as $aspirasi ) { ?>
                <div class="card card-aspirasi">
                    <div class="card-body">
                        <div class="pengirim">
                            <h5><?= $aspirasi['nama']?></h5>
                        </div>
                        <div class="isi-aspirasi">
                            <p><?= $aspirasi['isi']?>
                            </p>
                        </div>
                        <div class="tanggal text-right">
                            <p><?php echo substr($aspirasi['waktu'],11,19)?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
            </div>
        </div>
    </div>
    <script src="<?= base_url() ?>public/js/fontawesome/fontawesome.js"></script>
    <script src="<?= base_url() ?>public/js/jquery.js"></script>
</body>
</html>