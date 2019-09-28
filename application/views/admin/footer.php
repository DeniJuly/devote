  <footer class="main-footer">
    <strong>Devote &copy;  <a href="http://adminlte.io">SMK Negeri 1 Bawang</a>.</strong>
    <!-- <div class="float-right d-none d-sm-inline-block">
      <b>Devote</b>
    </div> -->
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= base_url() ?>public/admin/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url() ?>public/admin/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="<?= base_url() ?>public/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="<?= base_url() ?>public/admin/dist/js/adminlte.js"></script>
<script src="<?= base_url() ?>public/admin/plugins/dt/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<script src="<?= base_url() ?>public/admin/plugins/dt/datatables/jquery.dataTables.js"></script>
<!-- Morris / Chart -->

<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>

</body>
</html>