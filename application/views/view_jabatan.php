<div class="container-fluid">
<div class="row mt-3">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash') ?>"></div>
				<div class="row">
					<div class="col-md-6">Data Jabatan</div>
					<div class="col-md-6"><a href="#" onclick="tambah()" class="btn btn-info btn-sm float-right">Tambah</a></div>
				</div>
			</div>
			<div class="card-body">
				<table class="table table-bordered">
					<thead>
						<tr>
						<th>No</th>
						<th>Jabatan</th>
						<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php $no=1; foreach ($jabatan as $tampil) {
							# code...
						 ?>
						<tr>
							<td><?=$no++?></td>
							<td><?=$tampil['nama_jabatan']?></td>
							<td><a href="#" onclick="edit(<?=$tampil['id_jabatan']?>)" class="btn btn-info btn-sm">Edit</a> <a href="<?=base_url('jabatan/hapus/'.$tampil['id_jabatan'].'')?>" class="btn btn-danger btn-sm tombol-hapus">Hapus</a></td>
						</tr>
					<?php }?>
					</tbody>
				</table>




			</div>
		</div>
	</div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="modal-jabatan" tabindex="" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-danger">
        <h5 class="modal-title" id="exampleModalLabel">Form Jabatan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?=base_url('jabatan/add')?>" method="post">
        	<input type="hidden" name="id_jabatan" id="id_jabatan">
        	<div class="form-group">
        		<label>Jabatan</label>
        		<input type="text" name="jabatan" id="jabatan" class="form-control" required="">
        		
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
		$('#id_jabatan').val('');
				$('#jabatan').val('');
		$('#modal-jabatan').modal();
	}
	function edit(id){

		$.ajax({
			url:"<?=base_url('jabatan/edit/')?>"+id,
			type:"get",
			dataType:"JSON",
			success:function(data){
				$('#id_jabatan').val(data.id_jabatan);
				$('#jabatan').val(data.nama_jabatan);
				$('#modal-jabatan').modal();


			}



		});
		
	}
</script>