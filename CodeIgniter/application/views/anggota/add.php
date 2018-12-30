<section class="content">
	<div class="row">
		<div class="col-sm-12">
			<div class="box box-danger">
				<div class="box-header">
					<h3 class="box-title">Tambah Anggota</h3>
				</div>
				<div class="box-body">
					<form action="<?=site_url('anggota/create');?>" method="post" accept-charset="utf-8">
						<div class="box-body">
			                <div class="form-group">
			                	<label>Nama Anggota</label>
			                	<input type="text" name="nama_anggota" class="form-control" value="" placeholder="Masukkan Nama Anggota" required="required">
			                </div>
			                <div class="form-group">
			                	<label>Gender</label>
			                	<select name="gender" size="1" class="form-control">
			                  	<option value="1">Laki-laki</option>
			                  	<option value="2">Perempuan</option>
			                  </select>
			                </div>     
			                <div class="form-group">
			                	<label>No Telp</label>
			                	<input type="text" name="no_tlp" class="form-control" value="" placeholder="Masukkan Nomor Telepon" required="required">
			                </div>
			            	<div class="form-group">
			                  <label>Alamat</label>
			                  <input type="text" name="alamat" class="form-control" value="" placeholder="Masukkan Alamat" required="required">
			                </div>
			                <div class="form-group">
			                  <label>Email</label>
			                  <input type="text" name="email" class="form-control" value="" placeholder="Masukkan Email" required="required">
			                </div>
			                <div class="form-group">
			                  <label>Password</label>
			                  <input type="password" name="password" class="form-control" value="" placeholder="Masukkan Password" required="required">
			                </div>
						</div>

						<div class="box-footer">
							<button type="button" class="btn btn-default"> <i class="fa fa-arrow-circle-left"></i> Batal</button>
							<button type="submit" class="btn btn-primary pull-right"> <i class="fa fa-send"></i> Tambah</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>