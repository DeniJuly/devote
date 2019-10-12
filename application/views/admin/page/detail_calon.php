<div class="content-wrapper">
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
      	<input type="number" name="id_calon" hidden value="<?= $this->uri->segment(3); ?>">
        <h1 class="m-0 text-dark">
        	<a href="javascript:history.back()"><i class="fas fa-arrow-left"></i></a>
        	Detail Calon
        </h1>
      </div>
    </div>
  </div>
</div>
<?php foreach ($calon as $dt): ?>
<section class="content">
  <div class="container-fluid">
    <div class="row">
    <section class="content">
      <div class="card card-solid">
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-6">
              <div class="col-12">
                <img src="<?= base_url();?>public/img/foto_calon/<?= $dt->foto ?>" class="product-image" alt="Product Image">
              </div>
            </div>
            
            <div class="col-12 col-sm-6">
              <h2 class="my-3"><?php echo ucwords($dt->nama_calon); ?></h2>
              <hr>
              <h5>Visi :</h5>
              <p><?php echo $dt->visi; ?></p>
              <br>
              <h5>Misi :</h5>
              <p><?php echo $dt->misi; ?></p>

              <br><br><br>
              <div class="mt-4">
                <div class="btn btn-primary btn-md btn-flat" data-toggle="modal" data-target="#modal-edit">
                  <i class="fas fa-pen fa-lg mr-2"></i> 
                  Edit
                </div>
                <div class="btn btn-danger btn-md btn-flat" data-toggle="modal" data-target="#modal-hapus">
                  <i class="fas fa-trash fa-lg mr-2"></i> 
                  Hapus
                </div>
              </div>
            </div>
            <?php endforeach ?>
          </div>
        </div>
      </div>
      <?php foreach ($calon as $dt): ?>
		<!-- modal hapus -->
		<div class="modal fade" id="modal-hapus">
		<div class="modal-dialog modal-sm">
		  <div class="modal-content">
		    <div class="modal-header bg-danger">
		      <h4 class="modal-title">Hapus Data</h4>
		      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		        <span aria-hidden="true">&times;</span>
		      </button>
		    </div>
		    <div class="modal-body">
		      <p>Yakin Ingin Menghapus Data <?php echo $dt->nama_calon." ??"; ?></p>
		    </div>
		    <div class="modal-footer justify-content-between">
		      <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
		      <button type="button" class="btn btn-danger" name="btn-hapus" id="button-hapus"
		      onclick="hapus_calon(<?= decrypt_url( $this->uri->segment(3))?>)">Hapus</button>
		    </div>
		  </div>
		</div>
		</div>
		<!-- end modal hapus -->

		<!-- modal edit -->
		<div class="modal fade" id="modal-edit">
		<div class="modal-dialog modal-lg">
		  <div class="modal-content">
		  	<form id="FORM_EDIT<?= $dt->id_calon; ?>" method="post" action="">
		    <div class="modal-header bg-info">
		      <h4 class="modal-title">Edit Data</h4>
		      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		        <span aria-hidden="true">&times;</span>
		      </button>
		    </div>
		    <div class="modal-body">
		    	<div class="form-group"><input type="number" name="id_calon" id="id_calon" value="<?= $dt->id_calon ?>" hidden></div>
		      <div class="form-group">
                <label for="exampleInputEmail1">Nama Calon : </label>
                <input type="text" class="form-control" name="nama_calon" id="nama_calon" placeholder="Masukkan Nama Calon" value="<?= $dt->nama_calon ?>">
              </div>
              <br>
              <div class="form-group">
		      <div class="mb-3">
		      	<label>Visi : </label>
                <textarea class="textarea" placeholder="Place some text here" name="text-visi" id="text-visi" 
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 5px; border: 1px solid #dddddd; padding: 10px;"><?= $dt->visi ?></textarea>
              </div>
              </div>
              <br>
              <div class="form-group">
              <div class="mb-3">
		      	<label>Misi : </label>
                <textarea class="textarea" placeholder="Place some text here" name="text-misi" id="text-misi"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 5px; border: 1px solid #dddddd; padding: 10px;"><?= $dt->misi ?></textarea>
              </div>
          	  </div>
              <br>
		 	  <div class="form-group">
		 	  	<label>Foto Calon :</label>
		 	  	<input type="file" class="form-control" name="foto_calon" id="foto_calon">
		 	  </div>
		    </div>
		    <div class="modal-footer justify-content-between">
		      <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
		      <button type="submit" class="btn btn-primary" id="btn-smp">Simpan</button>
		    </div>
			</form>
		  </div>
		</div>
		</div>
		<!-- end modal edit -->
		<script>
		$(document).ready(function(){
			var id = '<?php echo $dt->id_calon ?>';
			$('#FORM_EDIT'+id).submit(function(e){
				$('#btn-smp').addClass('disabled');
		        e.preventDefault(); 
		        $.ajax({
		            url:'<?= base_url() ?>index.php/admin/edit_calon',
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
		                    title: 'Selamat!',
		                    text: 'Berhasil Edit Data Calon !!',
		                  }).then((result) => {
		                    location.reload();
		                  });
		              }else if (response == 2) {
		              	$('#btn-smp').removeClass('disabled');
		                toastr.error('Data Gagal Diedit !!!');
		              }
		            }
		        });
		    });
		});
		</script>
    	<?php endforeach ?>
    </section>
    </div>
</div>
</section>
</div>