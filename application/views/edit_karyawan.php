<div class="row mt-3">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header bg-danger">
				Form Karyawan
			</div>
			<div class="card-body">
				<form action="<?=base_url('pegawai/edit_pegawai')?>" method="post">
          <input type="hidden" name="id_karyawan" value="<?=$edit['id_karyawan']?>">
           <div class="form-group">
                  <label>NIP</label>
                  <input type="text" name="nip" class="form-control" value="<?=$edit['nip']?>" required="">
                </div>
					 <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="nama" value="<?=$edit['nama_lengkap']?>" class="form-control" required="">
                </div>
                 <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" name="alamat" value="<?=$edit['alamat']?>" class="form-control" >
                </div>
                <div class="form-group">
                	<label>Jk</label>
                	<select name="jk" class="form-control">
                		<option value="1" <?php if ($edit['jk']==1) {
                    echo "selected";
                    } ?> >Laki-Laki</option>
                		<option value="2" <?php if ($edit['jk']==2) {
                    echo "selected";
                    } ?>>Perempuan</option>
                	</select>
                </div>
                <div class="form-group">
                  <label>Kota</label>
                  <input type="text" name="kota" value="<?=$edit['kota']?>" class="form-control" >
                </div>
                 <div class="form-group">
                  <label>Email</label>
                  <input type="email" name="email" value="<?=$edit['email']?>" class="form-control" >
                </div>
                <div class="form-group">
                  <label>Jabatan</label>
                  <select name="jabatan" class="form-control">
                    <?php foreach ($jabatan as $tampil) {
                      # code...
                    ?>
                    <option value="<?=$tampil['id_jabatan']?>" <?php if ($edit['id_jabatan']==$tampil['id_jabatan']) {
                      echo "selected";
                    } ?>><?=$tampil['nama_jabatan']?></option>
                  <?php  }?>
                  </select>
                </div>
                <div class="form-group">
                  <label>Golongan</label>
                  <input type="text" name="golongan" value="<?=$edit['golongan']?>" class="form-control">
                </div>
                  <div class="form-group">
                    <label>Pendidikan</label>

                    <select name="pendidikan" class="form-control">
                      <?php foreach ($pendidikan as $tampil) {
                        # code...
                       ?>
                      <option value="<?=$tampil['id_pendidikan']?>" <?php if ($tampil['id_pendidikan']==$edit['id_pendidikan']) {
                        echo "selected";
                      } ?>><?=$tampil['tingkatan']?></option>
                    <?php }?>
                    </select>
                  </div>
                   <div class="form-group">
                    <label>Unit Kerja</label>
                    <select name="unit_kerja" class="form-control">
                      <?php foreach ($unit as $tampil) {
                      
                      ?>
                      <option value="<?=$tampil['id_unit']?>" <?php if ($tampil['id_unit']==$edit['id_unit']) {
                        echo "selected";
                      } ?>><?=$tampil['nama_unit']?></option>
                    <?php  }?>
                    </select>

                   </div>
                 <div class="form-group">
                 	<label>Username</label>
                 	<input type="text" name="username" value="<?=$edit['username']?>" class="form-control">

                 </div>
                  
                 <div class="form-group">
                 	<label>Level</label>
                 	<select name="level" class="form-control">
                 		<option value="1" <?php if ($edit['level']==1) {
                    echo "selected";
                    } ?>>Admin</option>
                 		<option value="2" <?php if ($edit['level']==2) {
                    echo "selected";
                    } ?>>User</option>
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
