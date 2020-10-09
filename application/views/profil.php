<div class="container">
	<div class="notif" data-flashdata="<?php echo $this->session->flashdata('notif') ?>"></div>
	<div class="row mt-3">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
				<p>Profil</p>	
				</div>
				<div class="card-body">
					<table class="table table-konseded">
				<tr>
					<td>Nama</td><td>:</td><td><?=$profil['nama_lengkap']?></td>
				</tr>
				<tr>
					<td>Alamat</td><td>:</td><td><?=$profil['alamat']?></td>
				</tr>
				<tr>
					<td>Email</td><td>:</td><td><?=$profil['email']?></td>
				</tr>
			</table>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Ganti Password
</button>
		</div>
			</div>
		</div>
	</div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Ganti Password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?=base_url('welcome/ganti_password')?>" method="post">
        	<div class="form-group">
        		<label>Password Lama</label>
        		<input type="password" name="password_lama">
        	</div>
        	<div class="form-group">
        		<label>Password Baru</label>
        		<input type="password" name="password_baru">
        	</div>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
       </form>
    </div>
  </div>
</div>