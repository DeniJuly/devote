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
      data: [
      {"data":10,"nama":"Risqi Ardiansyah"},
      {"data":6,"nama":"Deni Juli Setiawan"},
      {"data":12,"nama":"Wahyu Feb"},
      {"data":2,"nama":"M. Saiful"},
      {"data":1,"nama":"Hermawan Genta"}
      ],
      xkey: 'nama',
      ykeys: ['data'],
      labels: ['data'],
      hideHover: 'auto',
      barColors: function (row, series, type) {
      // console.log("--> "+row.label, series, type);
      if(row.label == "Risqi Ardiansyah") return "#20639B";
      else if(row.label == "Wahyu Feb") return "#3CAEA3";
      else if(row.label == "Deni Juli Setiawan") return "#ED553B";
      else if(row.label == "M. Saiful") return "#173F5F";
      else if(row.label == "Hermawan Genta") return "#F6D55C";
      }
    });
</script>