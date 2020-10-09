<style>
th {
    padding: 3px 5px 3px 5px;
    border-right: 1px solid #666666;
    border-bottom: 1px solid #666666;
}

td {
    padding: 3px 5px 3px 5px;
    border-right: 1px solid #666666;
    border-bottom: 1px solid #666666;
}
 
.head th {
    font-weight: bold;
    font-size: 12px;
    background: #b7f0ff; 
}
 
table .main tbody tr th {
    font-size: 12px;
}
 
table, table .main {
    width: 100%;
    border-top: 1px solid #666;
    border-left: 1px solid #666;
    border-collapse: collapse;
    background: #fff;
}
 
h1 {
    font-size:20px;
}
</style>
<h3 align="center">Rekapitulasi Data Cuti</h3>
<h3 align="center">Kementerian Pendidikan dan Kebudayaan</h3>
<h3 align="center">Sulawesi Tengah</h3>
<table class="" width="100">
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