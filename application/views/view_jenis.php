<div class="row mt-3">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash') ?>"></div>
				<a href="#" onclick="tambah()"  class="btn btn-info btn-sm">Tambah</a>
			</div>
			<div class="card-body">
				<table class="table table-bordered" id="tb-jenis">
					<thead>
						<tr>
							<th>No</th>
							<th>Jenis Cuti</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php $no=1; foreach ($jenis as $tampil) {
							# code...
						 ?>
						<tr>
							<td><?=$no++?></td>
							<td><?=$tampil->jenis_cuti?></td>
							<td><a href="#" onclick="edit(<?=$tampil->id_jenis?>)" class="btn btn-info btn-sm">Edit</a> <a href="<?=base_url('jenis_cuti/'.$tampil->id_jenis.'')?>" class="btn btn-danger btn-sm tombol-hapus">Hapus</a></td>
						</tr>
					<?php }?>
					</tbody>





				</table>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="modal-cuti" tabindex="" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal Cuti</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?=base_url('jenis_cuti/add')?>" method="post">
        	<input type="hidden" name="id_jenis" id="id_jenis">
        	<div class="form-group">
        		<label>Jenis Cuti</label>
        		<input type="text" name="jenis_cuti" id="jenis_cuti" class="form-control" required="">
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

		$('#modal-cuti').modal();
	}
	function edit(id){

		$.ajax({
			url:"<?=base_url('jenis_cuti/edit/')?>"+id,
			type:"get",
			dataType:"JSON",
			success:function(data){

				document.getElementById('id_jenis').value=data.id_jenis;
				document.getElementById('jenis_cuti').value=data.jenis_cuti;
				$('#modal-cuti').modal();

			}


		});
	}
</script>
<script type="text/javascript">
	$(document).ready(function(){
$('#tb-jenis').DataTable();

	});
</script>