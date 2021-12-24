<!-- Begin Page Content -->
<div class="container-fluid"> 
	<!-- row ux--> 
	<div class="row"> 
		<div class="col-xl-3 col-md-6 mb-4"> 
			<div class="card border-left-danger shadow h-100 py-2 bg-primary"> 
				<div class="card-body"> 
					<div class="row no-gutters align-items-center"> 
						<div class="col mr-2"> 
							<div class="text-md font-weight-bold text-white text-uppercase mb-1">Jumlah Anggota</div> 
							<div class="h1 mb-0 font-weight-bold text-white">
								<?= $this->ModelUser->getUserWhere(['role_id' => 2])->num_rows(); ?>
							</div> 
						</div> 
						<div class="col-auto"> 
							<a href="<?= base_url('user/anggota'); ?>">
								<i class="fas fa-users fa-3x text-warning"></i>
							</a> 
						</div> 
					</div> 
				</div> 
			</div> 
		</div> 
		<!-- end row ux--> 

		<!-- Divider --> 
		<hr class="sidebar-divider"> 

		<!-- row table--> 
		<div class="row"> 
			<div class="table-responsive table-bordered col-sm-9 ml-auto mr-auto mt-2"> 
				<div class="page-header"> <span class="fas fa-users text-primary mt-2 "> Data User</span> 
					<a class="text-danger" href="<?php echo base_url('admin'); ?>">
						<i class="fas fa-search mt-2 float-right"> Tampilkan</i>
					</a> 
				</div> 

				<table class="table mt-9"> 
					<thead> 
						<tr> 
							<th>#</th> 
							<th>Nama Anggota</th> 
							<th>Email</th>
							<th>Role ID</th> 
							<th>Aktif</th> 
							<th>Member Sejak</th> 
						</tr> 
					</thead> 
					<tbody> 
						<?php $i = 1; foreach ($anggota as $a) { ?> 
						<tr> 
							<td><?= $i++; ?></td> 
							<td><?= $a['nama']; ?></td> 
							<td><?= $a['email']; ?></td> 
							<td><?= $a['role_id']; ?></td> 
							<td><?= $a['is_active']; ?></td> 
							<td><?= date('Y', $a['tanggal_input']); ?></td> 
						</tr> <?php } ?> 
					</tbody> 
				</table> 
			</div> 
			<div class="table-responsive table-bordered col-sm-9 ml-auto mr-auto mt-2"> 
				<div class="page-header"> 
					<span class="fas fa-book text-warning mt-2"> Data Wisata</span> 
					<a href="<?= base_url('wisata'); ?>">
						<i class="fas fa-search text-primary mt-2 float-right"> Tampilkan</i>
					</a> 
				</div> 
				<div class="table-responsive"> 
					<table class="table mt-9" id="table-datatable"> 
						<thead> 
							<tr> 
								<th>#</th> 
								<th>Nama Wisata</th> 
								<th>Keterangan</th> 
								<th>Alamat</th> 
								<th>HTM</th> 
							</tr> 
						</thead> 
						<tbody> 
							<?php $i = 1; foreach ($wisata as $w) { ?> 
							<tr> 
								<td><?= $i++; ?></td> 
								<td><?= $w['nama_wisata']; ?></td> 
								<td><?= $w['keterangan']; ?></td> 
								<td><?= $w['alamat']; ?></td> 
								<td>Rp.<?= $w['htm']; ?></td> 
							</tr> <?php } ?> 
						</tbody> 
					</table>
				</div>
			</div> 
			<div class="table-responsive table-bordered col-sm-9 ml-auto mr-auto mt-2"> 
				<div class="page-header"> 
					<span class="fas fa-book text-warning mt-2"> Data Kuliner</span> 
					<a href="<?= base_url('kuliner'); ?>">
						<i class="fas fa-search text-primary mt-2 float-right"> Tampilkan</i>
					</a> 
				</div> 
				<div class="table-responsive"> 
					<table class="table mt-9" id="table-datatable"> 
						<thead> 
							<tr> 
								<th>#</th> 
								<th>Nama Kuliner</th> 
								<th>Keterangan</th>  
								<th>Harga</th> 
							</tr> 
						</thead> 
						<tbody> 
							<?php $i = 1; foreach ($kuliner as $k) { ?> 
							<tr> 
								<td><?= $i++; ?></td> 
								<td><?= $k['nama_kuliner']; ?></td> 
								<td><?= $k['keterangan']; ?></td> 
								<td>Rp.<?= $k['harga']; ?></td> 
							</tr> <?php } ?> 
						</tbody> 
					</table>
				</div>
			</div>
		</div>
		<!-- end of row table-->
	</div> 
	<!-- /.container-fluid -->
</div> 
<!-- End of Main Content -->