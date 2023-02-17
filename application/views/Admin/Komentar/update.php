<div class="container-fluid pt-4 px-4">
	<div class="card shadow mb-4">
		<div class="card-header py-3 ">
			<h6 class="text-primary">
            Edit Komentar
			</h6>
			<div class="card-body">  
                <?php foreach($komentar as $k) { ?>
                
                    <form role="form" action="<?php echo site_url('masterkomentar/update') ?>" method="post">
                    <div class="form-floating mb-2">
                            <input type="text" class="form-control" id="floatingInput"
                                placeholder="text" name="id_komentar" value="<?php echo $k->id_komentar ?>" hidden>
                        <div class="form-floating mb-2">
                            <input type="text" class="form-control" id="floatingInput"
                                placeholder="text" name="id_topik" value="<?php echo $k->id_topik ?>" hidden>
                        </div>
                        <div class="form-floating mb-2">
                            <input type="text" class="form-control" id="floatingInput"
                                placeholder="text" name="id_akun" value="<?php echo $this->session->userdata('user_id'); ?>" hidden>
                        </div>

                        <div class="form-floating" style="width:700px">
                            <input class="form-control" id="isi_komentar" name="isi_komentar" value="<?php echo $k->isi_komentar ?>" required>
                            <?= form_error('isi_komentar', '<small class="text-danger pl-3">', '</small>')?>
                            <label for="floatingTextarea">Isi Komentar</label>
                        </div>
                        
                        <br/>
                        <button type="reset" onClick="myFunction()" class="btn btn-secondary m-2" data-dismiss="modal" >Close</button>
                            <script>
                                function myFunction() {
                                    window.location.href="<?php echo site_url('topics') ?>";
                                }
                            </script>
                        &nbsp; &nbsp;
                        <button type="submit" class="btn btn-primary m-2">Edit</button>
                        </div>
                    <?php } ?> 
                    </form>
                </div>        
            </div>
        </div>
    </div>
</div>
 

