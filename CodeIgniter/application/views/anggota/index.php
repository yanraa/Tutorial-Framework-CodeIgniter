<section class="content">
	<div class="row">
		<div class="col-sm-12"><div class="box box-danger">
				<div class="box-header">
					<h3 class="box-title">Daftar Anggota</h3>
				</div>
				
				<div class="box-body">
					<div class="table-responsive">
						<table class="table table-striped" id="example1">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama Anggota</th>
									<th>Gender</th>
									<th>No Telepon</th>
									<th>Alamat</th>
									<th>Email</th>
									<th>Password</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								foreach ($show as $key => $data) {
								?>
								<tr>
									<td><?=$key+1;?></td>
									<td><?=$data->nama_anggota;?></td>
									<td><?=$data->gender;?></td>
									<td><?=$data->no_tlp;?></td>
									<td><?=$data->alamat;?></td>
									<td><?=$data->email;?></td>
									<td><?=$data->password;?></td>
									<td>
										<a href="#" class="btn btn-xs btn-primary">Detail</a>
										<a href="#" class="btn btn-xs btn-warning">Edit</a>
										<a href="#" class="btn btn-xs btn-danger">Hapus</a>
									</td>
								</tr>
								<?php 
								} 
								?>
							</tbody>
							<tfoot>
								<tr>
									<th>No</th>
									<th>Nama Anggota</th>
									<th>Gender</th>
									<th>No Telepon</th>
									<th>Alamat</th>
									<th>Email</th>
									<th>Password</th>
								</tr>
							</tfoot>  

						</table>		
					</div>
				</div>
			</div>
		</div>
	</div>
</section>