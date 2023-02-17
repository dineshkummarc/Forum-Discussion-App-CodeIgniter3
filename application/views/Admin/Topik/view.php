<div class="container-fluid pt-4 px-4">
	<div class="card shadow mb-4">
		<div class="card-header py-3 ">
			<h6 class="text-primary">Topik List
				<span style="float: right">
					<a href="<?php echo site_url('topics/input') ?>" data-bs-toggle="modal" data-bs-target="#exampleModal" class ="btn btn-success btn-sm float-right">Tambah Topik</a>
				</span>
			</h6>
			<div class="card-body">
			
			<div id="flash" data-flash="<?=$this->session->flashdata('pesan_success'); ?>"></div>
        	<div id="flash_error" data-flash="<?=$this->session->flashdata('pesan_error'); ?>"></div>

			<?php $i = 0; ?>
			<?php foreach ($topik as $tpk) { 
				?>
				<ul class="w-100 list-group" id="topic-list">
				<li class="list-group-item mb-4">
					<?php $i++; ?>
					<div>
						<!-- <?php if ($tpk->id_akun == $this->session->userdata('user_id')) : ?>
							<?php endif; ?>-->
							<div class="nav-item dropdown" style="float: right">
							<a class="fa fa-ellipsis-v" data-bs-toggle="dropdown"></a>
							<div class="dropdown-menu ">
								<center>
									<a href="<?= base_url('topics/view_ubah/'.$tpk->id_topik) ?>" class="fa fa-edit" >
										Edit
									</a>
								</center>
								<hr class="dropdown-divider">
								<center>
									<a href="<?= base_url('topics/hapus/'.$tpk->id_topik) ?>" class="fa fa-trash" id="tombol-hapus">
										Delete
									</a>
								</center>
							</div>
						</div>
					
						
					</div>
					<a href="<?= base_url('masterkomentar/view_topik/'.$tpk->id_topik) ?>" >
						<?php echo $tpk->judul_topik ?></a>
					</a>
					<hr>
					<span style="float: right">
						<span class="float-right mr-4" ><small><i>Created: <?php echo $tpk->waktu_topik ?></i></small></span>
					</span>
					
					<p class="truncate filter-text"><?php echo $tpk->isi_topik ?></p>
					<span style="float: right">
					<p><span class="badge bg-primary" ><i>Posted By: <?php echo $tpk->nama_user ?></i></span></p>
						<i class="fa fa-tag">
							<span>Tags: <?php echo $tpk->nama_kategori ?></span>
						</i>
					</span>
					
					<span style="float : left"><br/><i class="fa fa-comments"><?php echo $tpk->Jumlah_Komentar ?> 
					&nbsp;&nbsp;&nbsp;
					<i class="fa fa-reply"><?php echo $tpk->Jumlah_Balasan?></i>
					</span></i>
				</li>
				</ul>
			<?php 
			} ?>
		</div>
	</div>
</div>