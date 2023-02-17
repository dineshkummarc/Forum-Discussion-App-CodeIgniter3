<div class="container-fluid pt-4 px-4">
	<div class="card shadow mb-4">
	<div class="card-header py-3 ">
				<h6 class="text-primary">Topik List
					<span style="float: right">
						<a href="<?php echo site_url('topics/input') ?>" data-bs-toggle="modal" data-bs-target="#exampleModal" class ="btn btn-success btn-sm float-right">Tambah Topik</a>
					</span>
				</h6>
				<div class="card-body">
				<?php $i = 0; ?>
				<?php foreach ($topik as $u) { ?>
					<ul class="w-100 list-group" id="topic-list">
					<li class="list-group-item mb-4">
						<?php $i++; ?>
						<div>
							<div class="nav-item dropdown" style="float: right">
								<a class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
									<i class="icon-ellipsis-vertical"></i>
									<span class="d-none d-lg-inline-flex"></span>
								</a>
								<div class="dropdown-menu ">
									<center>
										<a href="<?= base_url('topics/view_ubah/'.$u->id_topik) ?>" class="fa fa-edit" >
											Edit
										</a>
									</center>
									<hr class="dropdown-divider">
									<center>
										<a href="<?= base_url('topics/hapus/'.$u->id_topik) ?>" class="fa fa-trash">
											Delete
										</a>
									</center>
								</div>
							</div>
						</div>
					
						<?php echo $u->judul_topik ?>
						<hr>
						<span style="float: right">
							<span class="float-right mr-4" ><small><i>Created: <?php echo $u->waktu_topik ?></i></small></span>
						</span>

						<p class="truncate filter-text"><?php echo $u->isi_topik ?></p>
						<span style="float: right">
						<p><span class="badge bg-primary" ><i>Posted By: <?php echo $u->id_akun ?></i></span></p>
							<i class="fa fa-tag">
								<span>Tags: <?php echo $u->nama_kategori ?></span>
							</i>
						</span>
						<span style="float : left"><br/><a href=""<i class="fa fa-comments"> komentar </span></a>
					</li>
					</ul>
				<?php 
				} ?>
			</div>
		</div>
	</div>
</div>