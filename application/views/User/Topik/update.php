<div class="container-fluid pt-4 px-4">
	<div class="card shadow mb-4">
		<div class="card-header py-3 ">
			<h6 class="text-primary">
        Edit Topik
			</h6>
			<div class="card-body">
        <?php foreach($topik as $u) { ?>

        <form role="form" action="<?php echo site_url('DashboardUser/update') ?>" method="post">
        <div class="col-lg-8">
            <div class="form-group">
                <input type="text" class="form-control" name="id_topik" value="<?php echo $u->id_topik ?>" hidden>
                <input type="text" class="form-control" name="id_akun" value="<?php echo $this->session->userdata('user_id'); ?>" hidden>
                <input name="id_kategori" class="form-control" id="id_kategori" value="<?php echo $u->id_kategori ?>" hidden></input>
            </div> 

            <div class="form-group">
                <label for="judul_topik">Judul Topik</label>
                <input type="text" class="form-control" name="judul_topik" value="<?php echo $u->judul_topik ?>"required>
            </div> 
            <br>
            <div class="form-group">
              <label for="isi_topik">Isi Topik</label>
              <input class="form-control"
              id="floatingTextarea" name="isi_topik" style="height: 100px;" value="<?php echo $u->isi_topik ?>" required></textarea>
                        
            </div> 
            <br>
            <div class="form-group">
              <button type="reset" onClick="myFunction()" class="btn btn-secondary" data-dismiss="modal" >Close</button>
                <script>
                  function myFunction() {
                    window.location.href="<?php echo site_url('dashboarduser') ?>";
                  }
                </script>
              <button type="submit" name="submit" id="submit" class="btn btn-primary">Edit</button>
            </div>
        </div>
        </div>   
      </form>
    <?php 
    } ?> 
      </div>
    </div>
  </div>
</div>
<script src="<?php echo base_url('assets/js/custom.js') ?>"></script>
