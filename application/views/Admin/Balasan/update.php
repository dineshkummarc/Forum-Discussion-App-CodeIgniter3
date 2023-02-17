<div class="container-fluid pt-4 px-4">
	<div class="card shadow mb-4">
		<div class="card-header py-3 ">
			<h6 class="text-primary">
                Edit Balasan
			</h6>
			<div class="card-body">
                  <?php foreach($balasan as $b) { ?>
                    <form role="form" action="<?php echo site_url('masterbalasan/update') ?>" method="post">
                        <!-- <?php
                            $getid = $this->db->query("SELECT balasan.id_balasan, balasan.id_komentar, komentar.id_topik from balasan INNER JOIN komentar ON balasan.id_komentar=komentar.id_komentar");
                        ?>
                        <?php foreach($getid as $g) { ?>
                            <input type="text" name="id_topik" value="<?php echo $g->id_topik ?>" hidden>
                        <?php } ?> -->
                        <div class="form-floating mb-2">
                            <input type="text" class="form-control" id="floatingInput"
                            placeholder="text" name="id_balasan" value="<?php echo $b->id_balasan ?>" hidden>
                        <div class="form-floating mb-2">
                            <input type="text" class="form-control" id="floatingInput"
                                placeholder="text" name="id_komentar" value="<?php echo $b->id_komentar ?>" hidden>
                        </div>
                        <div class="form-floating mb-2">
                            <input type="text" class="form-control" id="floatingInput"
                                placeholder="text" name="id_akun" value="<?php echo $this->session->userdata('user_id'); ?>" hidden>
                        </div>

                        <div class="form-floating" style="width:700px">
                            <input class="form-control" id="isi_balasan" name="isi_balasan" value="<?php echo $b->isi_balasan ?>" required>
                            <?= form_error('isi_balasan', '<small class="text-danger pl-3">', '</small>')?>
                            <label for="floatingTextarea">Isi Balasan</label>
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
                    </form>
                </div>
            <?php } ?> 
            </div>
        </div>   
    </div> 
</div>
