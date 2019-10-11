<style type="text/css">
  .checked{
    color: #FFEC19;
  }
  .unchecked{
    color: #E1E1E1;
  }
  .checked-grin{
    color: #FFC100;
  }
  .checked-meh{
    color: #FF9800;
  }
  .checked-frown{
    color: #FF5607;
  }
  .checked-sad{
    color: #F6412D;
  }
</style>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
  <section class="content-header">
    <section class="content">
      <div class="row">
        <div class="col-12">

          <div class="card">
            <div class="card-header d-flex p-0">
              <h3 class="card-title p-3">Data Penilaian Osis Tahun Sebelum</h3>
              
              <ul class="nav nav-pills ml-auto p-2">
                <li class="nav-item">
                  Rata-rata :
                <?php foreach ($avg as $rata2): ?>
                  <?php if ($rata2->penilaian == 5): ?>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                  <?php elseif ($rata2->penilaian == 4): ?>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star unchecked"></span>
                  <?php elseif ($rata2->penilaian == 3): ?>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star unchecked"></span>
                    <span class="fa fa-star unchecked"></span>
                  <?php elseif ($rata2->penilaian == 2): ?>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star unchecked"></span>
                    <span class="fa fa-star unchecked"></span>
                    <span class="fa fa-star unchecked"></span>
                  <?php elseif ($rata2->penilaian == 1): ?>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star unchecked"></span>
                    <span class="fa fa-star unchecked"></span>
                    <span class="fa fa-star unchecked"></span>
                    <span class="fa fa-star unchecked"></span>
                  <?php elseif ($rata2->penilaian < 5 && $rata2->penilaian > 4): ?>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star-half-alt checked"></span>
                  <?php elseif ($rata2->penilaian < 4 && $rata2->penilaian > 3): ?>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star-half-alt checked"></span>
                    <span class="fa fa-star unchecked"></span>
                  <?php elseif ($rata2->penilaian < 3 && $rata2->penilaian > 2): ?>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star-half-alt checked"></span>
                    <span class="fa fa-star unchecked"></span>
                    <span class="fa fa-star unchecked"></span>
                  <?php elseif ($rata2->penilaian < 2 && $rata2->penilaian > 1): ?>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star-half-alt checked"></span>
                    <span class="fa fa-star unchecked"></span>
                    <span class="fa fa-star unchecked"></span>
                    <span class="fa fa-star unchecked"></span>
                  <?php else: ?>
                    <span>Belum Ada Penilaian..</span>
                <?php endif ?>
              <?= strval(substr($rata2->penilaian, 0, 3)) ?>
              <?php endforeach ?>
                </li>
              </ul>
            </div>
            <div class="card-body p-0">
              <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 30%">
                          Pemilih
                      </th>
                      <th style="width: 50%">
                          Rating
                      </th>
                      <th style="width: 50%">
                          Ekspresi
                      </th>
                  </tr>
              </thead>
              <tbody>
                <?php foreach ($penilaian as $p): ?>
                  <tr>
                      <td>
                          <a><?= $p->nama ?></a>
                          <br/>
                          <small><?= $p->nama_kelas ?></small>
                      </td>
                      <td>
                          <ul class="list-inline">
                              <li class="list-inline-item">
                                <?php if ($p->penilaian == 5) { ?>
                                  <span class="fa fa-star checked"></span>
                                  <span class="fa fa-star checked"></span>
                                  <span class="fa fa-star checked"></span>
                                  <span class="fa fa-star checked"></span>
                                  <span class="fa fa-star checked"></span>
                                <?php } elseif ($p->penilaian == 4) { ?>
                                  <span class="fa fa-star checked"></span>
                                  <span class="fa fa-star checked"></span>
                                  <span class="fa fa-star checked"></span>
                                  <span class="fa fa-star checked"></span>
                                  <span class="fa fa-star unchecked"></span>
                                <?php }elseif ($p->penilaian == 3) { ?>
                                  <span class="fa fa-star checked"></span>
                                  <span class="fa fa-star checked"></span>
                                  <span class="fa fa-star checked"></span>
                                  <span class="fa fa-star unchecked"></span>
                                  <span class="fa fa-star unchecked"></span>
                                <?php }elseif ($p->penilaian == 2) { ?>
                                  <span class="fa fa-star checked"></span>
                                  <span class="fa fa-star checked"></span>
                                  <span class="fa fa-star unchecked"></span>
                                  <span class="fa fa-star unchecked"></span>
                                  <span class="fa fa-star unchecked"></span>
                                <?php }else { ?>
                                  <span class="fa fa-star checked"></span>
                                  <span class="fa fa-star unchecked"></span>
                                  <span class="fa fa-star unchecked"></span>
                                  <span class="fa fa-star unchecked"></span>
                                  <span class="fa fa-star unchecked"></span>
                                <?php } ?>
                              </li>
                          </ul>
                      </td>
                      <td>
                        <?php if ($p->penilaian == 5) { ?>
                          <span class="far fa-grin-stars checked fa-3x"></span>
                        <?php } elseif ($p->penilaian == 4) { ?>
                          <span class="far fa-grin checked-grin fa-3x"></span>
                        <?php }elseif ($p->penilaian == 3) { ?>
                          <span class="far fa-meh checked-meh fa-3x"></span>
                        <?php }elseif ($p->penilaian == 2) { ?>
                          <span class="far fa-frown checked-frown fa-3x"></span>
                        <?php }else { ?>
                          <span class="far fa-sad-tear checked-sad fa-3x"></span>
                        <?php } ?>
                      </td>
                  </tr>
                <?php endforeach ?>
              </tbody>
          </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </section>
</div>