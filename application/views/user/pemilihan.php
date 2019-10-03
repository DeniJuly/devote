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
        href="<?= base_url() ?>public/css/pemilihan.css"
    />
    <!-- sweetalert -->
    <link
        rel="stylesheet"
        href="<?= base_url() ?>public/css/sweetalert2/sweetalert2.min.css"
    />
    <title>Pemilihan - DeVote</title>
</head>
<body>
    <div class="background"></div>
    <div class="container container-data_diri">
        <div class="judul-halaman">
            <h1>PEMILIHAN</h1>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-6">
                <div class="card card-data_diri">
                    <div class="title-calon"><h4>PASLON 1</h4></div>
                    <div class="card-body">
                        <div class="row">
                            <h6 class="title-card m-auto">Sahid Anwar - Risqi Ardiansyah</h6>
                            <div class="col-10 col-md-6 col-lg-6 offset-1 offset-md-3 offset-lg-3">
                                <img src="<?= base_url() ?>public/img/deni.JPG" alt="foto profile" class="img-responsive img-profile">
                            </div>
                        </div>
                        <div class="button-footer">
                            <a href="<?= site_url() ?>/devote/pemilihan" class="btn btn-pilih" disabled="disabled">Pilih</a>
                            <a href="<?= site_url() ?>/devote/pemilihan" class="btn btn-visi_misi" disabled="disabled">Visi Misi</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6">
                <div class="card card-data_diri">
                    <div class="title-calon"><h4>PASLON 2</h4></div>
                    <div class="card-body">
                        <div class="row">
                            <h6 class="title-card m-auto">Sahid Anwar - Risqi Ardiansyah</h6>
                            <div class="col-10 col-md-6 col-lg-6 offset-1 offset-md-3 offset-lg-3">
                                <img src="<?= base_url() ?>public/img/deni.jpg" alt="foto profile" class="img-responsive img-profile">
                            </div>
                        </div>
                        <div class="button-footer">
                            <a href="<?= site_url() ?>/devote/pemilihan" class="btn btn-pilih" disabled="disabled">Pilih</a>
                            <a href="<?= site_url() ?>/devote/pemilihan" class="btn btn-visi_misi" disabled="disabled">Visi Misi</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6">
                <div class="card card-data_diri">
                    <div class="title-calon"><h4>PASLON 3</h4></div>
                    <div class="card-body">
                        <div class="row">
                            <h6 class="title-card m-auto">Sahid Anwar - Risqi Ardiansyah</h6>
                            <div class="col-10 col-md-6 col-lg-6 offset-1 offset-md-3 offset-lg-3">
                                <img src="<?= base_url() ?>public/img/deni.jpg" alt="foto profile" class="img-responsive img-profile">
                            </div>
                        </div>
                        <div class="button-footer">
                            <a href="<?= site_url() ?>/devote/pemilihan" class="btn btn-pilih" disabled="disabled">Pilih</a>
                            <a href="<?= site_url() ?>/devote/pemilihan" class="btn btn-visi_misi" disabled="disabled">Visi Misi</a>
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