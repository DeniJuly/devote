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
        href="<?= base_url() ?>public/css/ulasan.css"
    />
    <!-- sweetalert -->
    <link
        rel="stylesheet"
        href="<?= base_url() ?>public/css/sweetalert2/sweetalert2.min.css"
    />
    <link 
        rel="shortcut icon" 
        href="<?= base_url()?>public/img/logo/shortcut.png" 
        type="image/x-icon"
    />
    <title>Ulasan - DeVote</title>
</head>
<body>
    <div class="background"></div>
    <div class="container container-data_diri">
        <div class="judul-halaman">
            <h1>ULASAN</h1>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-6">
                <div class="card card-data_diri">
                    <div class="card-body">
                        <div class="row">
                            <h6 class="title-card m-auto">Ketua OSIS dan Wakil Ketua Osis Periode 2018/2019</h6>
                            <div class="col-10 col-md-6 col-lg-6 offset-1 offset-md-3 offset-lg-3">
                                <img src="<?= base_url() ?>public/img/foto_calon/<?= $osis['foto'];?>" alt="foto profile" class="img-responsive img-profile">
                            </div>
                            <h6 class="nama-calon"><?= $osis['nama_calon'] ?></h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6">
                <div class="card card-data_diri">
                    <div class="card-body">
                        <div class="row">
                            <h6 class="title-card m-auto">Bagaimana menurut kamu kinerja OSIS periode 2018/2019?</h6>
                            <div class="col-12 text-center">
                                <button class="btn btn-rate rate-1" onclick="rate(1)"><i class="fa fa-star" aria-hidden="true"></i></button>
                                <button class="btn btn-rate rate-2" onclick="rate(2)"><i class="fa fa-star" aria-hidden="true"></i></button>
                                <button class="btn btn-rate rate-3" onclick="rate(3)"><i class="fa fa-star" aria-hidden="true"></i></button>
                                <button class="btn btn-rate rate-4" onclick="rate(4)"><i class="fa fa-star" aria-hidden="true"></i></button>
                                <button class="btn btn-rate rate-5" onclick="rate(5)"><i class="fa fa-star" aria-hidden="true"></i></button>
                            </div>
                            <h6 id="rate-text" class="rate-text m-auto"></h6>
                        </div>
                    </div>
                </div>
                <div class="button">
                  <form action="<?= site_url() ?>/devote/pemilihan">
                    <button href="<?= site_url() ?>/devote/pemilihan" class="btn btn-lanjut" disabled="disabled" >Simpan</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
    <script src="<?= base_url() ?>public/js/fontawesome/fontawesome.js"></script>
    <script src="<?= base_url() ?>public/js/jquery.js"></script>
    <script>
        $(document).ready(function(){
            var id_calon = "<?= $osis['id_calon']?>";
            window.rate = function (sum) {  
                if(sum=="1"){
                    $(".btn-rate").css("color","#d7d6d6");
                    $(".rate-1").css("color","#EC8956");
                    $("#rate-text").text("Cukup...");
                    $(".btn-lanjut").removeAttr("disabled");
                     var rate = 1;
                     $.ajax({
                      url:"<?= site_url('devote/rate_old_ossis');?>",
                      method:"POST",
                      data:{rate:rate,id_calon:id_calon},
                      success:function(data){
                       
                      }
                     })

                }
                if(sum=="2"){
                    $(".btn-rate").css("color","#d7d6d6");
                    $(".rate-1").css("color","#EC8956");
                    $(".rate-2").css("color","#EC8956");
                    $("#rate-text").text("Cukup Bagus...");
                    $(".btn-lanjut").removeAttr("disabled");
                       var rate = 2;
                     $.ajax({
                      url:"<?= site_url('devote/rate_old_ossis');?>",
                      method:"POST",
                      data:{rate:rate,id_calon:id_calon},
                      success:function(data){
                       
                      }
                     })
                }
                if(sum=="3"){
                    $(".btn-rate").css("color","#d7d6d6");
                    $(".rate-1").css("color","#EC8956");
                    $(".rate-2").css("color","#EC8956");
                    $(".rate-3").css("color","#EC8956");
                    $("#rate-text").text("Bagus...");
                    $(".btn-lanjut").removeAttr("disabled");
                       var rate = 3;
                     $.ajax({
                      url:"<?= site_url('devote/rate_old_ossis');?>",
                      method:"POST",
                      data:{rate:rate,id_calon:id_calon},
                      success:function(data){
                       
                      }
                     })
                }
                if(sum=="4"){
                    $(".btn-rate").css("color","#d7d6d6");
                    $(".rate-1").css("color","#EC8956");
                    $(".rate-2").css("color","#EC8956");
                    $(".rate-3").css("color","#EC8956");
                    $(".rate-4").css("color","#EC8956");
                    $("#rate-text").text("Sangat Bagus...");
                    $(".btn-lanjut").removeAttr("disabled");
                       var rate = 4;
                     $.ajax({
                      url:"<?= site_url('devote/rate_old_ossis');?>",
                      method:"POST",
                      data:{rate:rate,id_calon:id_calon},
                      success:function(data){
                       
                      }
                     })
                }
                if(sum=="5"){
                    $(".btn-rate").css("color","#d7d6d6");
                    $(".rate-1").css("color","#EC8956");
                    $(".rate-2").css("color","#EC8956");
                    $(".rate-3").css("color","#EC8956");
                    $(".rate-4").css("color","#EC8956");
                    $(".rate-5").css("color","#EC8956");
                    $("#rate-text").text("Luar Biasa...");
                    $(".btn-lanjut").removeAttr("disabled");
                       var rate = 5;
                     $.ajax({
                      url:"<?= site_url('devote/rate_old_ossis');?>",
                      method:"POST",
                      data:{rate:rate,id_calon:id_calon},
                      success:function(data){
                       
                      }
                     })
                }
            }
        });
    </script>
</body>
</html>