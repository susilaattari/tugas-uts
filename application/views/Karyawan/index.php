
	
	<div class="container p-5 my-2 my-auto mt-3">
		<div class="mx-auto my-3"  style="width: 450px;">
			<form class="d-flex" action="" method="post">
				<input class="form-control me-2" type="search" placeholder="Cari Data Karyawan" aria-label="Search" name="cari">
				<button class="btn btn-outline-success" type="submit">Cari</button>
			</form>
			
		</div>
		
		<h2 class="fw-4 fs-3 text-center">Data Karyawan</h2>
		
		<div class="container w-75 h-100 p-4 bg-body rounded-3 shadow">
			<?php if (empty($karyawan)) : ?>
				<div class="alert alert-danger mt-3 w-50" role="alert">
					Data Tidak Di temukan
				</div>
			<?php endif?>
			<a class="ms-2 btn btn-sm btn-outline-primary" href="<?= base_url() ?>karyawan/tambah">Tambah Data</a>
			<?php if($this->session->flashdata('flash')):?>
			<div class="alert alert-success w-50" role="alert">
				Data Karyawan <?= $this->session->flashdata('flash')?>
			</div>
			<?php endif ?>
			<table  width = "980px" class="table table-dark table-bordered m-2" >
				<thead class="table table-danger">
				<tr>
					<th scope="col">No</th>
					<th scope="col">Nama Lengkap</th>
					<th scope="col">Jabatan</th>
					<th width="200px" scope="col">Action</th>
				</tr>
				</thead>
				<tbody>
					<?php foreach ($karyawan as $key => $data): ?>
				<tr>
					<td scope="row"><?= $key+1?></td>
					<td><?= $data['nama_lengkap']?></td>
					<td><?= $data['jabatan']?></td>
					<td class="text-center">
						<a  href="<?= base_url() ?>karyawan/detail/<?=$data['id']?>" class="btn btn-primary btn-sm">Detail</a>
						<a  href="<?= base_url() ?>karyawan/ubah/<?=$data['id']?>" class="btn btn-success btn-sm">Edit</a>
						<a  href="<?= base_url() ?>karyawan/hapus/<?=$data['id']?>" class="btn btn-danger btn-sm">Delete</a>
					</td>
				</tr>
				<?php endforeach;?>
				</tbody>
			</table>
		</div>
	</div>
	
	
	
	


