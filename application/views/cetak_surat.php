<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<style type="text/css">
	p {
  font-size: 19px;
}
</style>
</head>
<body>
	<div class="container mt-5">
<div class="row">
	<div class="col-md-2"><img style="width:160px;" src="<?=base_url('assets/gambar/logo.png')?>"></div>
	<div class="col-md-9"><h4 align="center">KEMENTERIAN PENDIDIDKAN DAN KEBUDAYAAN</h4><h4 align="center">LEMBAGA PENJAMINAN MUTU PENDIDIKAN</h4>
<h4 align="center">SULAWESI TENGAH</h4>
<p align="center">Jalan Dr. Sutomo No. 4 Palu 94111, Sulawesi Tengah</p>
<p align="center">Telepon 0451 – 422792, Faksimile 0451 – 454792, Pos-el: set.lpmpsulteng@kemdikbud.go.id</p>
<p align="center">Laman http://lpmpsulteng.kemdikbud.go.id</p> 
	</div>

</div>
<hr>
<center><h4>SERAH TERIMA PEKERJAAN</h4></center>
<div class="row">
	<div class="col-md-12"><p>Yang bertanda tangan dibawah ini</p></div>
	<div class="col-md-3"><p>Nama</p><p>NIP</p><p>Pangkat dan Golongan</p><p>Jabatan</p><p>Instansi</p></div>
	<div class="col-md-4"><p style="font-family: Times New Roman">: <?=$surat['nama_lengkap']?></p><p style="font-size: 20px;font-family: Times New Roman">: <?=$surat['nip']?></p><p style="font-family: Times New Roman">: <?=$surat['golongan']?></p>
<p style="font-family: Times New Roman">: <?=$surat['nama_jabatan']?></p>
<p style="font-family: Times New Roman">: <?=$surat['nama_unit']?></p>

	</div>
	
</div>
<div class="row"><div class="col-md-9"><p>Seanjutnya disebut sebagai pihak pertama</p></div></div>

<div class="row">
	<div class="col-md-3"><p>Nama</p><p>NIP</p><p>Pangkat dan Golongan</p><p>Jabatan</p><p>Instansi</p></div>
	<div class="col-md-4"><p style="font-family: Times New Roman">: <?=$penugasan['nama_lengkap']?></p><p style="font-size: 20px;font-family: Times New Roman">: <?=$penugasan['nip']?></p><p style="font-family: Times New Roman">: <?=$penugasan['golongan']?></p>
<p style="font-family: Times New Roman">: <?=$penugasan['nama_jabatan']?></p>
<p style="font-family: Times New Roman">: <?=$penugasan['nama_unit']?></p>

</div>

</div>
<div class="row"><div class="col-md-12"><p>Sehubungan dengan <?=$surat['jenis_cuti']?> yang diambil oleh pihak pertama pada tanggal <?=date('d-m-Y',strtotime($surat['dari_tanggal']))?> s/d <?=date('d-m-Y',strtotime($surat['ke_tanggal']))?>,maka dengan ini pihak pertama menyerahkan pekerjaan <?=$surat['pekerjaan']?> pada Pihak Kedua untuk dilaksanakan dengan segala pertanggung jawaban yang ada, hingga masa cuti pihak pertama selesai </p></div></div>
<div class="row">
	<div class="col-md-3">
		<p>Pihak Pertama</p>

		<p class="mt-5"><?=$surat['nama_lengkap']?></p>
		<p class="">NIP <?=$surat['nip']?></p>
	</div>
	<div class="col-md-3 offset-md-5">
		<p>Pihak Kedua</p>

		<p class="mt-5"><?=$penugasan['nama_lengkap']?></p>
		<p class="">NIP<?=$penugasan['nip']?></p>
	</div>
</div>
<div class="row">
	<div class="col-md-5 offset-md-4">
		<p>Mengetahui:</p>
		<p>Kasubag/Kasi</p>
		<p class="mt-5">Prof Dr. Fatkul Umar,S.kom</p>

	</div>
</div>
</body>
</html>
<script>

window.print();

//setTimeout(function(){ this.close(); }, 500);

</script>