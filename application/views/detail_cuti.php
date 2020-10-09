<div class="row mt-3">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header bg-danger">
				Data Detail Cuti
			</div>
			<div class="card-body">
				<table class="table table-konseded">
					<?php foreach ($cuti as $tampil) {
						# code...
					 ?>
					<tr>
						<td>Nama</td><td>:</td><td><?=$tampil->nama_lengkap?></td>
					</tr>
					<tr>
						<td>Alamat</td><td>:</td><td><?=$tampil->alamat?></td>
					</tr>
					<tr>
						<td>Kota</td><td>:</td><td><?=$tampil->kota?></td>
					</tr>
					<tr>
						<td>Jenis Cuti</td><td>:</td><td><?=$tampil->jenis_cuti?></td>
					</tr>
					<tr>
						<td>Dari Tanggal</td><td>:</td><td><?=date('d-m-Y',strtotime($tampil->dari_tanggal))?></td>
					</tr>
					<tr>
						<td>Ke Tanggal</td><td>:</td><td><?=date('d-m-Y',strtotime($tampil->ke_tanggal))?></td>
					</tr>
					<tr>
						<td>Deskripsi</td><td>:</td><td><?=$tampil->deskripsi?></td>
					</tr>
					<tr>
						<td>Berkas 1</td><td>:</td><td><a href="<?=base_url('pengajuan_cuti/download_berkas1/'.$tampil->berkas_1.'')?>"><?=$tampil->berkas_1?></a></td>
					</tr>
					<tr>
						<td>Berkas 2</td><td>:</td><td><a href="<?=base_url('pengajuan_cuti/download_berkas2/'.$tampil->berkas_2.'')?>"><?=$tampil->berkas_2?></a></td>
					</tr>
				<?php }?>
				</table>
			</div>


		</div>
	</div>
</div>
