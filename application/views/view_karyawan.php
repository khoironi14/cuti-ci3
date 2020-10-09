<div class="row mt-3">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">

				<div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash') ?>"></div>
				<div class="row">
					<div class="col-md-6"><p>Data Pegawai</p></div>
					<div class="col-md-6"><a href="<?=base_url('pegawai/add_pegawai')?>"  class="btn btn-info btn-sm float-right">Tambah</a></div>
				</div>
			</div>
			<div class="card-body">
				<table class="table table-bordered" id="tb-karyawan">

					<thead>
						<tr>
							<th>No</th>
							<th>NIP</th>
							<th>Nama Pegawai</th>
							<th>Alamat</th>
							<th>Kota</th>
							<th>Jenis Kelamin</th>
							<th>Username</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php $no=1; foreach ($karyawan as $tampil) {
							
						 ?>
						<tr>
							<td><?=$no++?></td>
							<td><?=$tampil->nip?></td>
							<td><?=$tampil->nama_lengkap?></td>
							<td><?=$tampil->alamat?></td>
							<td><?=$tampil->kota?></td>
							<td><?php if ($tampil->jk==1) {
								echo "Laki-Laki";
							}else{

								echo "Perempuan";
							}?></td>
							<td><?=$tampil->username?></td>
							<td><a href="<?=base_url("pegawai/edit_pegawai/".$tampil->id_karyawan."")?>" class="btn btn-info btn-sm">Edit</a><a href="<?=base_url('pegawai/hapus/'.$tampil->id_karyawan.'')?>" class="btn btn-danger btn-sm tombol-hapus">Hapus</a></td>
						</tr>
					<?php }?>
					</tbody>




				</table>

				<script type="text/javascript">
					$(document).ready(function(){

						$('#tb-karyawan').DataTable()
					});
				</script>