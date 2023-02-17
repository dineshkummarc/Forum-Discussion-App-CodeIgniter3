<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<div class="container-fluid pt-4 px-4">
	<div class="card shadow mb-4">
		<div class="card-header py-3 ">
			<div class="container-field">
				<div class="col-lg-12">
					<div id="flash" data-flash="<?=$this->session->flashdata('pesan_success'); ?>"></div> 
					<?php
						if ($this->session->flashdata('pesan_error')) {
							echo '<div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
									<button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>';
							echo $this->session->flashdata('pesan_error');
							echo '</div>';
						}
					?>
					<!-- Menampilkan form topik -->
					<?php foreach($topik as $u) { ?>
						<div class="card">
							<div class="card-body">
							<?php foreach($detailtopik as $dt) { ?>
							<?php if ($u->id_topik == $dt->id_topik) : ?>
								<div class="nav-item dropdown" style="float: right">
								<?php if ($u->id_akun == $this->session->userdata('user_id')) : ?>
									<a class="fa fa-ellipsis-v" data-bs-toggle="dropdown"></a>
									<div class="dropdown-menu">
										<center>
										<a href="<?= base_url('DashboardUser/view_ubah/'.$u->id_topik) ?>" class="fa fa-edit" >
											Edit
										</a>
										</center>
										<hr class="dropdown-divider">
										<center>
										<a href="<?= base_url('DashboardUser/hapus/'.$u->id_topik) ?>" class="fa fa-trash" id="tombol-hapus">
											Delete
										</a>
										</center>
									</div>
									<?php endif ?>
								</div>

								<!-- Data Topik yang dilihat -->
								<?php echo $u->judul_topik ?>
								<hr>
								<span style="float: right">
									<span class="float-right mr-4" ><small><i>Created: <?php echo $u->waktu_topik ?></i></small></span>
								</span>

								<p class="truncate filter-text"><?php echo $u->isi_topik ?></p>
								<span style="float: right">
									<p><span class="badge bg-primary" ><i>Posted By: <?php echo $dt->nama_user ?></i></span></p>
									<i class="fa fa-tag">
										<span>Tags: <?php echo $dt->nama_kategori ?></span>
									</i>
								</span>	
							</div>
							<?php endif ?>
						<?php 
						}?>
						</div>
						<?php 
						}?>
						<!-- End topik detail -->

						<!-- FORM Tambah Komentar -->
						<hr class="divider" style="max-width: 100%">
						<div class="col-lg-10">
							<form action="<?php echo site_url('MasterKomentar_User/tambah/')?>" method="post">
								<div class="form-group pl-10">

									<input type="hidden" name="id_topik" value="<?php echo $u->id_topik ?>">
									<input type="text" class="form-control" name="id_akun" value="<?php echo $this->session->userdata('user_id'); ?>" hidden>

									<div class="card card-body">
										<div style="display: flex;  justify-content: center; align-items: center;">
											<img class="rounded-circle me-lg-2" 
											src="<?php 
											if ($this->session->userdata('user_profile') != null) {
												echo base_url('/assets/image/profile/'.$this->session->userdata('user_profile'));
											} else {
												echo base_url('/assets/template/admin/images/app/avatar_default.svg');
											}
										?>" alt="" style="width: 40px; height: 40px;"> 
										<div class="form-floating" style="width:700px">
											<textarea class="form-control" id="isi_komentar" name="isi_komentar" required></textarea>
											<label for="floatingTextarea">Komentar</label>
										</div>
										&nbsp;&nbsp;&nbsp;
										<button type="submit" class="btn btn-primary float-right"><i class="fa fa-paper-plane"></button></i>
									</div>
								</div>
								<br>
							</form>
						</div>	
						<!-- End form tambah komentar -->

					<!-- Tampil Komentar -->
					<div>Komentar :</div><br>
					<?php foreach($komentar as $k) { ?>
						<?php if ($k->status == 1) : ?>
						<div style="display: flex;">
							<img class="rounded-circle me-lg-2" src="<?php 

							if($k->foto_profile == null){
								echo base_url('assets/template/admin/images/app/avatar_default.svg');
							} else {
								echo base_url('assets/image/profile/'.$k->foto_profile);
							}

						?>" id="gambar_load" width="40px" height="40px">
						<div class="form-floating" style="width:700px">

							<!-- Edit delete komentar sesuai dengan id_akun -->
							<?php if ($k->id_akun == $this->session->userdata('user_id')) : ?>
							<div style="float: right">	
								<a class="fa fa-ellipsis-v" data-bs-toggle="dropdown"></a>							
								<div class="dropdown-menu">
									<center>
									<a href="<?= base_url('MasterKomentar_User/view_ubah/'.$k->id_komentar) ?>" class="fa fa-edit" >
											Edit
										</a>
									</center>
									<hr class="dropdown-divider">
									<center>
									<a href="<?= base_url('MasterKomentar_User/hapus/'.$k->id_komentar) ?>" class="fa fa-trash" id="tombol-hapus">
											Delete
										</a>
									</center>
								</div>
							</div>
							<?php endif ?>
							<!-- END Edit delete komentar sesuai dengan id_akun -->

							<div><a href=""><?php echo $k->username ?></a></div>
							<span style="float: right"> 
								<i>Created: <?php echo $k->waktu_komentar ?></i>
							</span>	
							<!-- <?php echo $k->id_komentar ?> -->
							<?php echo $k->isi_komentar ?>	

							<!-- Tampil Balasan -->
							<p>  
								<a data-bs-toggle="collapse" href="#collapseExample<?php echo $k->id_komentar ?>"> Balasan</a>
							</p>
							<div class="collapse" id="collapseExample<?php echo $k->id_komentar ?>">
								<div class="card card-body">
								
								<!-- Form Input balasan -->
								<form action="<?php echo site_url('MasterBalasan_User/tambah')?>" method="post">
									<input type="hidden" name="id_topik" value="<?php echo $u->id_topik ?>">
									<input type="hidden" name="id_komentar" value="<?php echo $k->id_komentar ?>">
									<input type="text" class="form-control" name="id_akun" value="<?php echo $this->session->userdata('user_id'); ?>" hidden>
									<div class="card card-body">
										<div style="display: flex;">
											<img class="rounded-circle me-lg-2" src="<?php 
											if ($this->session->userdata('user_profile') != null) {
												echo base_url('/assets/image/profile/'.$this->session->userdata('user_profile'));
											} else {
												echo base_url('/assets/template/admin/images/app/avatar_default.svg');
											}
										?>" alt="" style="width: 40px; height: 40px;">

										<div class="form-floating" style="width:700px">
											<textarea class="form-control" id="isi_balasan" name="isi_balasan" required></textarea>
											<label for="floatingTextarea">Balasan</label>
										</div>
										&nbsp;&nbsp;&nbsp;
										<button type="submit" class="btn btn-primary float-right"><i class="fa fa-paper-plane"></button></i>
									</div>
								</form>
								<hr class="divider" style="max-width: 100%">
								<!-- End form input balasan -->

								<?php foreach($balasan as $b) { ?>
									<div style="display: flex;">
										<?php if ($k->id_komentar == $b->id_komentar) : ?>

											<div style="display: flex; ">
												<img class="rounded-circle me-lg-2" src="<?php 

												if($b->foto_profile == null){
													echo base_url('assets/template/admin/images/app/avatar_default.svg');
												} else {
													echo base_url('assets/image/profile/'.$b->foto_profile);
												}

											?>" id="gambar_load" width="40px" height="40px">
										</div>
										<div class="form-floating" style="width:940px">

											<!-- Edit delete balasan sesuai dengan id_akun -->
											<?php if ($b->id_akun == $this->session->userdata('user_id')) : ?>
										
											<div  style="float: right">
											<a class="fa fa-ellipsis-v" data-bs-toggle="dropdown"></a>							
												<div class="dropdown-menu">
													<center>
													<a href="<?= base_url('MasterBalasan_User/view_ubah/'.$b->id_balasan) ?>" class="fa fa-edit" >
															Edit
														</a>
													</center>
													<hr class="dropdown-divider">
													<center>
													<a href="<?= base_url('MasterBalasan_User/hapus/'.$b->id_balasan) ?>" class="fa fa-trash" id="tombol-hapus">
															Delete
														</a>
													</center>
												</div>
											</div>	
											<?php endif ?>	

											<div><a href=""><?php echo $b->nama_user ?></a></div>
											<span style="float: right"> 
												<i>Created: <?php echo $b->waktu_balasan ?></i>
											</span>	
											<?php echo $b->isi_balasan ?>
										</div>
									<?php endif; ?>
								</div>
								<?php 
								}?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php endif; ?>
		<?php 
		}?>
	</div>
	</div>
	</div>
</div>