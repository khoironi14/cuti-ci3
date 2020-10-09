<div class="row mt-3">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header bg-danger">
				Form Pengajuan Cuti
			</div>
			<div class="card-body">
				<form action="<?=base_url('pengajuan_cuti')?>" method="post" enctype="multipart/form-data" >
					 <div class="form-group">
					 	<label>Type</label>
					 	<select name="type" class="form-control">
					 		<?php foreach ($type as $tampil) {
					 			# code...
					 		 ?>
					 		<option value="<?=$tampil->id_jenis?>"><?=$tampil->jenis_cuti?></option>
					 	<?php }?>
					 	</select>

					 </div>
					 <div class="form-group row">
					 	<div class="col-md-6">
					 		<label>Dari Tanggal</label>
					 		<input type="date" name="dari_anggal" class="form-control" required="">
					 	</div>
					 	<div class="col-md-6">
					 		<label>Ke Tanggal</label>
					 		<input type="date" name="ke_anggal" class="form-control" required="">
					 	</div>
					 </div>
				<!--	 <div class="form-group row">
					 	<div class="col-md-6">
					 		<label>Berkas 1</label>
					 		<input type="file" name="berkas_1" class="form-control">
					 	</div>
					 	<div class="col-md-6">
					 		<label>Berkas 2</label>
					 		<input type="file" name="berkas_2" class="form-control">
					 	</div>
					 </div>-->
					 <div class="form-group">
					 	<label>Penugasan</label>
					 	<select name="penugasan" class="form-control">
					 		<?php foreach ($pegawai as $tampil) {
					 			# code...
					 		 ?>
					 		<option value="<?=$tampil['id_karyawan']?>"><?=$tampil['nama_lengkap']?></option>
					 	<?php }?>
					 	</select>
					 </div>
					 <div class="form-group">
					 	<label>Pekerjaan</label>

					 	<input type="text" name="pekerjaan" class="form-control" required="">
					 </div>
					 <div class="form-group">
					 	<label>Deskripsi</label>
					 	<textarea name="deskripsi" class="form-control"></textarea>
					 </div>
					  <div class="form-group">
					  	<button class="btn btn-info" name="simpan">Simpan</button>
					  </div>
					</form>