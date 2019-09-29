<div class="content-wrapper">
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Data Calon</h1>
      </div>
    </div>
  </div>
</div>
<section class="content">
  <div class="container-fluid">
    <div class="row">
    <?php foreach ($calon as $dt) { ?>
    	<div class="col-lg-3 col-6" style="margin-right: 40px; margin-left: 20px;">
          	<a href='<?= base_url()."index.php/admin/edit_calon/".encrypt_url($dt->id_calon).""?>' class="cardlink"><div class="card" style="width: 18rem;">
			  <img class="card-img-top" src="<?= base_url() ?>public\admin\dist\img\sampel\<?php echo $dt->foto; ?>" alt="Card image cap">
			  <div class="card-body">
			  	<h5><?php echo $dt->nama_calon; ?></h5>
			  	<blockquote class="quote-info" class="quote-info">
			  	<h5>Visi : </h5>
			    <p class="card-text"><?php echo substr($dt->visi,0,50)." ..."; ?></p>
			    <h5>Misi : </h5>
			    <p class="card-text"><?php echo substr($dt->misi,0,50)." ..."; ?></p>
                </blockquote>
			  </div>
			</div></a>
		</div>
	<?php } ?>
	</div>
</div>
</section>
</div>