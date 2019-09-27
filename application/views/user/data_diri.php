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
        href="<?= base_url() ?>public/css/data_diri.css"
    />
    <!-- sweetalert -->
    <link
        rel="stylesheet"
        href="<?= base_url() ?>public/css/sweetalert2/sweetalert2.min.css"
    />
    <title>Data Diri - DeVote</title>
</head>
<body>
    <div class="background"></div>
    <div class="container container-data_diri">
        <div class="judul-halaman">
            <h1>DATA DIRI</h1>
        </div>
        <div class="card card-data_diri">
            <div class="card-body">
                <div class="row">
                    <div class="col-10 col-md-3 col-lg-3 offset-1 offset-md-1 offset-lg-1">
                        <img src="<?= base_url() ?>public/img/deni.jpg" alt="foto profile" class="img-responsive img-profile">
                    </div>
                    <div class="col-12 col-md-8 col-lg-8 offset-0">
                        <table class="table-data_diri">
                            <tr>
                                <td>NIS</td>
                                <td>: 14903</td>
                            </tr>
                            <tr>
                                <td>Nama</td>
                                <td>: Deni Juli Setiawan</td>
                            </tr>
                            <tr>
                                <td>Kelas</td>
                                <td>: XII RPL 2</td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>: Laki-Laki</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="button">
            <a href="<?= site_url()?>/devote/keluar" class="btn btn-keluar">Keluar</a>
            <a href="<?= site_url()?>/devote/ulasan" class="btn btn-lanjut">Lanjut</a>
        </div>
    </div>
</body>
</html>