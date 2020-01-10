	<a href="<?= site_url('admin/tambah') ?>" class="btn btn-primary mt-3 mb-3">Tambah Data</a>
	<a href="<?= site_url('admin/export') ?>" class="btn btn-info mt-3 mb-3">Export Data</a> 
	<div class="table-responsive">
		<table class="table table-hover">
			<thead class="">
				<tr>
					<th scope="col">No</th>
					<th scope="col">Gambar</th>
					<th scope="col">Kode Barang</th>
					<th scope="col">Jenis Barang</th>
					<th scope="col">Merek</th>
					<th scope="col">Model</th>
					<th scope="col">Warna</th>
					<th scope="col">Serial Number</th>
					<th scope="col">Deskripsi</th>
					<th scope="col">Status</th>
					<th scope="col">Lokasi</th>
					<th scope="col">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php $i = 1;
				foreach ($barang as $row) { ?>
					<tr>
						<th scope="row"><?= $i++ ?></th>
						<td scope="row"><img src="<?= base_url('assets/img/barang/') . $row->gambar ?>" width="50px"></td>
						<td scope="row"><?= $row->kode ?></td>
						<td scope="row"><?= $row->jenisbrg ?></td>
						<td scope="row"><?= $row->merek ?></td>
						<td scope="row"><?= $row->model ?></td>
						<td scope="row"><?= $row->warna ?></td>
						<td scope="row"><?= $row->serial ?></td>
						<td scope="row"><?= $row->deskripsi ?></td>
						<td scope="row"><?= $row->status ?></td>
						<td scope="row"><?= $row->lokasi ?></td>
						<td>
							<a href="<?= site_url('admin/edit/') . $row->id ?>" class="btn btn-secondary"><i class="fas fa-fw fa-pen"></i></a>
							<!-- Button trigger modal -->
							<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapus<?= $row->id ?>">
								<i class="fas fa-fw fa-trash"></i>
							</button>

							<!-- Modal -->
							<div class="modal fade" id="hapus<?= $row->id ?>" tabindex="-1" role="dialog" aria-labelledby="Modal Hapus" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<form action="<?= site_url('admin/hapus') ?>" method="post">
												<input type="hidden" name="id" value="<?= $row->id ?>">
												<h1>Yakin Mau di Hapus ... ?</h1>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
											<button type="submit" class="btn btn-primary">Hapus</button>
										</div>
										</form>
									</div>
								</div>
							</div>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>