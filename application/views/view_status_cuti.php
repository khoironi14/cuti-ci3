<div class="row mt-3">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header bg-danger">
				<p style="color:white;">
				Data Pengajuan Cuti
				</p>
			</div>
			<div class="card-body">
				<table class="table table-bordered" id="tb-cuti">
					<thead>
						
						<tr>	
							<th>	No</th>
							<th>NIP</th>
								<th>Nama Karyawan</th>
								<th>Type Cuti</th>
								<th>	Dari Tanggal</th>
								<th>Ke Tanggal</th>
								<th>Deskripsi</th>
								<th>Status Cuti</th>
								<?php $level=$this->session->userdata('level'); if ($level==1) {
									# code...
								 ?>
								 <th>	Action</th>
								<?php }?>

						</tr>
					</thead>
					<tbody>	
							<?php $no=1; foreach ($cuti as $tampil) {
							 ?>

							<tr>	
									<td><?=$no++?></td>
									<td><?=$tampil->nip?></td>
									<td><?=$tampil->nama_lengkap?></td>
									<td><?=$tampil->jenis_cuti?></td>
									<td><?=$tampil->dari_tanggal?></td>
									<td><?=$tampil->ke_tanggal?></td>
									<td><?=$tampil->deskripsi?></td>
									<td><?php if ($tampil->status==1) {
										echo "Disetujui";
									}else if ($tampil->status==2){

										echo "Ditolak";
									}else{

										echo "Menunggu Persetujuan";
									} ?></td>
									<?php if ($level==1 ) {?>
									<td><div class="btn-group" role="group" aria-label="Basic example"><!-- <a href="<?=base_url('Pengajuan_cuti/detail/'.$tampil->id_cuti.'')?>" class="btn btn-primary btn-sm">Detail</a>--> <a href="<?=base_url('pengajuan_cuti/cetak_surat/'.$tampil->nip.'')?>" class="btn btn-info btn-sm">Cetak</a> <?php if ($tampil->status==0) {
										# code...
									 ?><a href="<?=base_url('Pengajuan_cuti/status/'.$tampil->id_cuti.'/1')?>" class="btn btn-info btn-sm">Terima </a><a href="<?=base_url('Pengajuan_cuti/status/'.$tampil->id_cuti.'/2')?>" class="btn btn-danger btn-sm">Tolak </a><a href="<?=base_url('Pengajuan_cuti/hapus/'.$tampil->id_cuti.'')?>" class="btn btn-warning btn-sm tombol-hapus">Hapus</a><?php }?></div></td>

								<?php }?>

							</tr>
						<?php }?>
					</tbody>
				</table>

			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
$('#tb-cuti').DataTable();

	});
</script>