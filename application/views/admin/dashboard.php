<div class="content-wrapper">
  
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Dashboard</h1>
        </div>
      </div>
    </div>
  </div>

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 col-12">
          <div class="small-box bg-success">
            <div class="inner">
              <h3><?php echo count($calon)." Pasang"; ?></h3>
              <p>Calon</p>
            </div>
            <div class="icon">
              <i class="fa fa-user-friends"></i>
            </div>
            <a href="<?= base_url();?>index.php/admin/data_calon" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-12">
          <div class="small-box bg-info">
            <div class="inner">
              <h3><?php echo count($user)." Data"; ?></h3>
              <p>Pemilih</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="<?= base_url()?>index.php/admin/data_pemilih" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-12">
          <div class="small-box bg-warning">
            <div class="inner">
              <h3><?php echo count($feedback)." Data"; ?></h3>
              <p>Feedback</p>
            </div>
            <div class="icon">
              <i class="far fa-star"></i>
            </div>
            <a href="<?= base_url()?>index.php/admin/penilaian" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-12">
          <div class="small-box bg-primary">
            <div class="inner">
              <h3>2 Diagram</h3>
              <p>Hasil Sementara</p>
            </div>
            <div class="icon">
              <i class="fa fa-chart-pie"></i>
            </div>
            <a href="<?= base_url()?>index.php/admin/bar_diagram" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>

  </div>
  </section>
</div>
