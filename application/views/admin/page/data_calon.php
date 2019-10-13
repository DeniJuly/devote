<div class="content-wrapper">
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Data Calon</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
			<button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#modal-tambah" title="Tambah Data">
				<i class="fas fa-plus"></i>
			</button>
        </ol>
      </div>
    </div>
  </div>
</div>
<section class="content">
  <div class="container-fluid">
    <div class="row">
    <?php foreach ($calon as $dt) { ?>
    	<div class="col-lg-3 col-6" style="margin-right: 40px; margin-left: 20px;">
          	<div class="card" style="width: 18rem;">
                <a href='<?= base_url()."index.php/admin/detail_calon/".encrypt_url($dt->id_calon).""?>'class="cardlink" title="Lihat Detail Calon <?= $dt->nama_calon ?>">
			  <img class="card-img-top" src="<?= base_url() ?>public\img\foto_calon\<?php echo $dt->foto; ?>" alt="Card image cap">
			  <div class="card-body">
			  	<h5><?php echo $dt->nama_calon; ?></h5>
			  	<blockquote class="quote-info" class="quote-info">
			  	<h5>Visi : </h5>
			    <p class="card-text"><?php echo substr($dt->visi,0,50)." ..."; ?></p>
			    <h5>Misi : </h5>
			    <p class="card-text"><?php echo substr($dt->misi,0,50)." ..."; ?></p>
                </blockquote>
			  </div></a>
			</div>
		</div>
		<?php } ?>

<div class="modal fade" id="modal-tambah">
	<div class="modal-dialog modal-lg">
	  <div class="modal-content">
	    <div class="modal-header bg-info">
	      <h4 class="modal-title">Tambah Data</h4>
	      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	        <span aria-hidden="true">&times;</span>
	      </button>
	    </div>
	    <div class="modal-body">
	    	<form id="FORM_TAMBAH" method="post" action="">
	      <div class="form-group">
	        <label>Nama Calon : </label>
	        <input type="text" class="form-control" name="nama_calon" id="nama_calon" placeholder="Masukkan Nama Calon">
	      </div>
	      <br>
	      <div class="form-group">
	      <div class="mb-3">
	      	<label>Visi : </label>
	        <textarea class="textarea" placeholder="Place some text here" id="text-visi" name="text-visi" 
	                  style="width: 100%; height: 200px; font-size: 14px; line-height: 5px; border: 1px solid #dddddd; padding: 10px;"></textarea>
	      </div>
	  	  </div>
	      <br>
	      <div class="form-group">
	      <div class="mb-3">
	      	<label>Misi : </label>
	        <textarea class="textarea" placeholder="Place some text here" id="text-misi" name="text-misi" 
	                  style="width: 100%; height: 200px; font-size: 14px; line-height: 5px; border: 1px solid #dddddd; padding: 10px;"></textarea>
	      </div>
	 	  </div>
	 	  <br>
	 	  <div class="form-group">
	 	  	<label for="foto_calon">Foto Calon :</label><br>
	 	  	<input type="file" name="foto_calon" id="foto_calon">
	 	  </div>
	    </div>
	    <div class="modal-footer justify-content-between">
	      <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
	      <button type="submit" class="btn btn-primary" id="btn-smp" onclick="tambah_calon()">Simpan</button>
	    </div>
		</form>
	  </div>
	</div>
</div>

<script>
$(document).ready(function(){
	$('#FORM_TAMBAH').submit(function(e){
		$('#btn-smp').addClass('disabled');
        e.preventDefault(); 
        $.ajax({
            url:'<?= base_url() ?>index.php/admin/tambah_calon',
            type:"post",
            data:new FormData(this),
            processData:false,
            contentType:false,
            cache:false,
            async:false,
            success: function(response){
            	if (response == 1) {
                Swal.fire({
                    type: 'success',
                    title: 'selamat!',
                    text: 'Berhasil tambah data soal',
                  }).then((result) => {
                    location.reload();
                  });
              }else if (response == 2) {
                toastr.error('Data Gagal Ditambahkan !!! .');
                $('#btn-smp').removeClass('disabled');
              }else if (response == 3) {
                toastr.warning('Silahkan Pilih Foto !!! .');
                $('#btn-smp').removeClass('disabled');
              }
            }
        });
    });
});
</script>

</section>
</div>