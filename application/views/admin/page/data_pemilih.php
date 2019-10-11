<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
<section class="content">
      <div class="row">
        <div class="col-12">

          <div class="card">
            <div class="card-header d-flex p-0">
              <h1 class="card-title p-3">Data Pemilih</h1>
              	<ul class="nav nav-pills ml-auto p-2">
	                <li class="nav-item">
	                <p style="color: blue;">Total Pemilih : <?= $jumlah_pemilih[0]->data ?> / <?= $jumlah_user[0]->data ?></p>
	                <p style="color: red;">Belum memilih / golput : <?=  $jumlah_user[0]->data - $jumlah_pemilih[0]->data ?></p>
	                </li>
            	</ul>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Nama</th>
                  <th>Kelas</th>
                  <th>Jenis Kelamin</th>
                  <th>Token</th>
                  <th>Jenis User</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($user as $dt): ?>
	                <tr>
	                  <td><?php echo $dt->id_user; ?></td>
	                  <td><?php echo $dt->nama; ?></td>
	                  <td><?php echo $dt->nama_kelas; ?></td>
	                  <?php if ($dt->jk == 0) { ?>
	                  	<td><?php echo "Perempuan" ?></td>
	                  <?php }elseif ($dt->jk == 1) { ?>
	                  	<td><?php echo "Laki-laki" ?></td>
	                  <?php } ?>
	                  <td><?php echo $dt->token; ?></td>
	                  <td><?php echo $dt->jenis_user; ?></td>

	                </tr>
            	<?php endforeach ?>
                <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Nama</th>
                  <th>Kelas</th>
                  <th>Jenis Kelamin</th>
                  <th>Token</th>
                  <th>Jenis User</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
</section>
</div>