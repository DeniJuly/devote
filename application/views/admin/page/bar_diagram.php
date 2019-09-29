<div class="content-wrapper">
    <!-- Content Header (Page header) -->
  <section class="content-header">
    <section class="content">
      <div class="row">
        <div class="col-12">

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Diagram Hasil Pemilihan</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div id="graph"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </section>
</div>

<script src="<?= base_url() ?>public/admin/morris/js/jquery.min.js"></script>
<script src="<?= base_url() ?>public/admin/morris/js/raphael-min.js"></script>
<script src="<?= base_url() ?>public/admin/morris/js/morris.min.js"></script>
<script>
    Morris.Bar({
      element: 'graph',
      data: <?php echo $sa; ?>,
      xkey: 'nama',
      ykeys: ['data'],
      labels: ['data'],
      hideHover: 'auto',
      barColors: function () {
        return "#3CAEA3";
      }
    });
</script>