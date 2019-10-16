<div class="content-wrapper">
  <section class="content-header">
    <section class="content">
      <div class="row">
        <div class="col-12">

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Diagram Hasil Pemilihan</h3>
            </div>
            <div class="card-body">
              <div id="graph" style="height: 370px; width: 100%"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </section>
</div>

<script src="<?= base_url() ?>public/admin/morris/css/canvasjs.min.js"></script>
<script>
window.onload = function() {
var chart = new CanvasJS.Chart("graph", {
  animationEnabled: true,
  title: {
    text: "Data Sementara Hasil Perhitungan"
  },
  data: [{
    type: "bar",
    yValueFormatString: "#,##0 Pemilih",
    indexLabel: "{label} ({y})",
    dataPoints: <?php echo $sa ?>
  }]
});
chart.render();
 
}
</script>