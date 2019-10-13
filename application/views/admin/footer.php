  <footer class="main-footer">
    <strong>Devote &copy;  <a href="http://adminlte.io">SMK Negeri 1 Bawang</a>.</strong>
  </footer>

  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>


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

<script>
  $(function () {
    $('.textarea').summernote()
  })
</script>

<script>
$(document).ready(function(){
  window.hapus_calon = function(id){
  $('#button-hapus').addClass('disabled');
    $.ajax({
      url : '<?= base_url() ?>index.php/admin/hapus_calon',
      type : 'post',
      data : {id_calon : id},
      success : function(response){
        if (response == 1) {
          toastr.success('Data Dihapus !!!');
          setTimeout(function afterFiveSeconds() {
            console.log('wait')
          }, 5000);
          location.href = "<?= base_url()?>index.php/admin/data_calon";
        }else if (response == 2) {
          $('#button-hapus').removeClass('disabled');
          toastr.error('Data Gagal Dihapus !!! .');
        }else if (response == 3) {
          $('#button-hapus').removeClass('disabled');
          toastr.warning('Data Gagal Dihapus Karena Menggunakan Foto Default !!! .');
        }
      }
    });
  }


});
</script>


</body>
</html>