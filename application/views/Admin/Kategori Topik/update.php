            <!-- Widgets Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-8">  
                <div class="row">   
                  <?php foreach($kategori as $k) { ?>
                <div class="row">   

                <h4 class="card-title">Edit Kategori</h4>
                <br/>
                    <form role="form" action="<?php echo site_url('masterkategori/update') ?>" method="post">
                    <div class="form-floating mb-2">
                            <input type="text" class="form-control" id="floatingInput"
                                placeholder="text" name="id_kategori" value="<?php echo $k->id_kategori ?>" hidden>
                            
                            <label for="floatingInput" >Id Kategori</label>
                        </div>
                        <div class="form-floating mb-2">
                            <input type="text" class="form-control" id="floatingInput"
                                placeholder="text" name="id_akun" value="<?php echo $this->session->userdata('user_id'); ?>" hidden>
                            <label for="floatingInput">Id Akun</label>
                        </div>

                        <div class="form-floating mb-2">
                            <input type="text" class="form-control" id="floatingInput"
                                placeholder="text" name="nama_kategori" value="<?php echo $k->nama_kategori ?>" required>
                            <label for="floatingInput">Nama Kategori</label>
                        </div>
                        
                        <div class="form-floating">
                            <input class="form-control" placeholder="Leave a comment here"
                                    id="floatingTextarea" name="keterangan" style="height: 150px;" value="<?php echo $k->keterangan ?>" required></textarea>
                            <label for="floatingTextarea">Keterangan</label>
                        </div>
                    
                        <br/>
                        <button type="reset" onClick="myFunction()" class="btn btn-secondary m-2" data-dismiss="modal" >Close</button>
                            <script>
                                function myFunction() {
                                    window.location.href="<?php echo site_url('masterkategori') ?>";
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

