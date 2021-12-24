<!-- Begin Page Content -->
<div class="container-fluid">
	<?= $this->session->flashdata('pesan'); ?>
	<div class="row">
		<div class="col-lg-12">
			<?php if (validation_errors()) { ?>
				<div class="alert alert-danger" role="alert"> <?= validation_errors(); ?> </div>
			<?php } ?>
			<?= $this->session->flashdata('pesan');
			?>
			<a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#kulinerBaruModal">
				<i class="fas fa-file-alt"></i> Kuliner Baru
			</a>
			<table class="table table-hover">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Nama Kuliner</th>
						<th scope="col">Keterangan</th>
						<th scope="col">Harga</th>
						<th scope="col">Gambar</th>
						<th scope="col">Pilihan</th>
					</tr>
				</thead>
				<tbody>
					<?php $a = 1;
					foreach ($kuliner as $k) { ?>
						<tr>
							<th scope="row"><?= $a++; ?></th>
							<td><?= $k['nama_kuliner']; ?></td>
							<td><?= $k['keterangan']; ?></td>
							<td>Rp<?= $k['harga']; ?></td>
							<td>
								<picture>
									<source srcset="" type="image/svg+xml"> <img src="<?= base_url('assets/img/upload/') . $k['gambar']; ?>" class="img-fluid img-thumbnail" alt="...">
								</picture>
							</td>
							<td><a href="<?= base_url('kuliner/ubahkuliner/') . $k['id_kuliner']; ?>" class="badge badge-info"><i class="fas fa-edit"></i> Ubah</a>
								<a href="<?= base_url('kuliner/hapuskuliner/') . $k['id_kuliner']; ?>" onclick="return confirm('Kamu yakin akan menghapus <?= $judul . ' ' . $k['nama_kuliner']; ?> ?');" class="badge badge-danger"><i class="fas fa-trash"></i> Hapus</a>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->

<!-- Modal Tambah Kuliner baru-->
<div class="modal fade" id="kulinerBaruModal" tabindex="-1" role="dialog" aria-labelledby="kulinerBaruModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="kulinerBaruModalLabel">Tambah Kuliner</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="<?= base_url('kuliner'); ?>" method="post" enctype="multipart/form-data">
				<div class="modal-body">
					<div class="form-group">
						<input type="text" class="form-control form-control-user" id="nama_kuliner" name="nama_kuliner" placeholder="Masukkan Judul Kuliner">
					</div>
					<div class="form-group">
						<select name="kategori" class="form-control form-control-user">
							<option value="Kuliner">Kuliner</option> >
							<option value="Wisata">Wisata</option>
							<option value="Rekreasi">Rekreasi</option>
							<option value="Pendidikan">Pendidikan</option>
						</select>
					</div>
					<div class="form-group">
						<input type="text" class="form-control form-control-user" id="keterangan" name="keterangan" placeholder="Masukkan Keterangan">
					</div>
					<div class="form-group">
						<input type="text" class="form-control form-control-user" id="harga" name="harga" placeholder="Masukkan Harga">
					</div>
					<div class="form-group">
						<input type="file" class="form-control form-control-user" id="gambar" name="gambar">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-ban"></i> Close</button>
					<button type="submit" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- End of Modal Tambah Menu -->