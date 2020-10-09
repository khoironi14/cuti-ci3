<div class="row mt-3">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash') ?>"></div>
				<div class="row">
					<div class="col-md-6">Data Unit Kerja</div>
					<div class="col-md-6"><a href="#" onclick="tambah()" class="btn btn-info btn-sm float-right">Tambah</a></div>
				</div>
			</div>
			<div class="card-body">
				<table class="table table-bordered" id="tb-departemen">
					<thead>
						<tr>
							<th>No</th>
							<th>Unit Kerja</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php $no=1; foreach ($departement as $tampil) {
							# code...
						 ?>
						<tr>
							<td><?=$no++?></td>
							<td><?=$tampil->nama_unit?></td>
							<td><a href="#" onclick="edit(<?=$tampil->id_unit?>)" class="btn btn-info btn-sm">Edit</a> <a href="<?=base_url('unit_kerja/hapus/'.$tampil->id_unit.'')?>" class="btn btn-danger btn-sm tombol-hapus">Hapus</a></td>
						</tr>
					<?php }?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<!-- Modal -->
<div class="modal fade" id="modal-departement" tabindex="" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-info">
        <h5 class="modal-title" id="exampleModalLabel">Form Unit Kerja</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?=base_url('unit_kerja/add')?>" method="post">
        	<input type="hidden" name="id_departemen" id="id_departemen">
        	<div class="form-group">
        		<label>Nama Unit</label>
        		<input type="text" name="departement" id="departement" class="form-control" required="">
        	</div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>



<script type="text/javascript">
	function tambah(){
$('#modal-departement').modal();

	}
	function edit(id){

		$.ajax({

			url:"<?=base_url('unit_kerja/edit/')?>"+id,
			type:"get",
			dataType:"JSON",
			success:function(data){
				document.getElementById('id_departemen').value=data.id_unit;
				document.getElementById('departement').value=data.nama_unit;
				$('#modal-departement').modal();

			}
		})
	}
</script>
<script type="text/javascript">
	$(document).ready(function(){
$('#tb-departemen').DataTable();

	});
</script>