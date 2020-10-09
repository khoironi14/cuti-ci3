<div class="row mt-3">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header bg-dark" style="color:white;">
				Form Pegawai
			</div>
			<div class="card-body">
				<form action="<?=base_url('pegawai/add_pegawai')?>" method="post">
           <div class="form-group">
                  <label>NIP</label>
                  <input type="text" name="nip" class="form-control" required="">
                </div>
					 <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="nama" class="form-control" required="">
                </div>
                 <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" name="alamat" class="form-control" >
                </div>
                <div class="form-group">
                	<label>Jk</label>
                	<select name="jk" class="form-control">
                		<option value="1">Laki-Laki</option>
                		<option value="2">Perempuan</option>
                	</select>
                </div>
                <div class="form-group">
                  <label>Kota</label>
                  <input type="text" name="kota" class="form-control" >
                </div>
                 <div class="form-group">
                  <label>Email</label>
                  <input type="email" name="email" class="form-control" >
                </div>
                <div class="form-group">
                  <label>Jabatan</label>
                  <select name="jabatan" class="form-control">
                    <?php foreach ($jabatan as $tampil) {
                      # code...
                    ?>
                    <option value="<?=$tampil['id_jabatan']?>"><?=$tampil['nama_jabatan']?></option>
                  <?php  }?>
                  </select>
                </div>
                <div class="form-group">
                  <label>Golongan</label>
                  <input type="text" name="golongan" class="form-control">
                </div>
                  <div class="form-group">
                    <label>Pendidikan</label>

                    <select name="pendidikan" class="form-control">
                      <?php foreach ($pendidikan as $tampil) {
                        # code...
                       ?>
                      <option value="<?=$tampil['id_pendidikan']?>"><?=$tampil['tingkatan']?></option>
                    <?php }?>
                    </select>
                  </div>
                   <div class="form-group">
                    <label>Unit Kerja</label>
                    <select name="unit_kerja" class="form-control">
                      <?php foreach ($unit as $tampil) {
                      
                      ?>
                      <option value="<?=$tampil['id_unit']?>"><?=$tampil['nama_unit']?></option>
                    <?php  }?>
                    </select>

                   </div>
                 <div class="form-group">
                 	<label>Username</label>
                 	<input type="text" name="username" class="form-control">

                 </div>
                  <div class="form-group">
                 	<label>Password</label>
                 	<input type="password" name="password" class="form-control">

                 </div>
                 <div class="form-group">
                 	<label>Level</label>
                 	<select name="level" class="form-control">
                 		<option value="1">Admin</option>
                 		<option value="2">User</option>
                 	</select>
                 </div>
                  <div class="form-group">
                  	<button name="simpan" class="btn btn-info">Simpan</button>
                  </div>
				</form>

			</div>
		</div>
	</div>
</div>

