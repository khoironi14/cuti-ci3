<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="card mt-3">
			<div class="card-header bg-info">
				<div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash') ?>"></div>
				<div class="row">
					<div class="col-md-6" style="color:white;">Laporan Cuti</div>
					<div class="col-md-6"></div>
				</div>
			</div>
			<div class="card-body">
				<form action="<?=base_url('laporan')?>" method="post">
					<div class="form-group row">
						<div class="col-md-4"><label>Dari Tanggal</label>
							<input type="date" name="dari_tanggal" class="form-control" required="">

						</div>
						<div class="col-md-4"><label>Ke Tanggal</label>
							<input type="date" name="ke_tanggal" class="form-control" required="">

						</div>
						<div class="col-md-3"><button class="btn btn-success btn-sm " name="cari" style="margin-top:35px;">Cari</button><?php if (!isset($_POST['cari'])) {
							# code...
						 ?> <a href="<?=base_url('laporan/print')?>" class="btn btn-info btn-sm" target="blank" style="margin-top:35px;">Print</a> <?php }else{ ?> <a href="<?=base_url('laporan/print/'.$_POST['dari_tanggal'].'/'.$_POST['ke_tanggal'].'')?>" class="btn btn-info btn-sm" target="blank" style="margin-top:35px;">Print</a>  <?php }?></div>
						
					</div>
				</form>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Pegawai</th>
							<th>NIP</th>
							<th>Jenis Cuti</th>
							<th>Dari Tanggal</th>
							<th>Ke Tanggal</th>
							<th>Penugasan</th>
							<th>Pekerjaan</th>
							<th>Unit Kerja</th>
						</tr>
					</thead>
					<tbody>
						<?php $no=1; foreach ($laporan as $tampil) {
							foreach ($penugasan as $row) {
								# code...
							
						 ?>
						<tr>
							<td><?=$no++?></td>
							<td><?=$tampil['nama_lengkap']?></td>
							<td><?=$tampil['nip']?></td>
							
							<td><?=$tampil['jenis_cuti']?></td>
							<td><?=date('d-m-Y',strtotime($tampil['dari_tanggal']))?></td>
							<td><?=date('d-m-Y',strtotime($tampil['ke_tanggal']))?></td>
							<td><?=$row['nama_lengkap']?></td>
							<td><?=$tampil['pekerjaan']?></td>
							<td><?=$tampil['nama_unit']?></td>
						</tr>
					<?php }}?>
					</tbody>



				</table>
		</div>
	</div>
</div>