<div class="container-fluid pt-4 px-4">
    <?php //echo $this->session->flashdata('pesan'); ?>
    <div class="row g-8">        
    <h4 class="card-title">Tambah User</h4>
    <br/>
        <form role="form" action="<?php echo site_url('masteruser/tambah/')?>" method="post" autocomplete="off" enctype="multipart/form-data">
        <div class="row">
            <div class="col-lg-8">
                <input class="form-control" name="id" value="" hidden >
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="control-label">Nama Lengkap<span style="color: red">*</span></label>
                            <input type="text" class="form-control mb-3" name="nama" value="<?= set_value('nama') ?>">
                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>')?>  
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="role">Role<span style="color: red">*</span></label>
                            <select name="role" class="form-control" style="width:100%">
                                <option value="null">--Select One--</option>
                                <option value="Admin">Admin</option>
                                <option value="User">User</option>
                            </select>
                            <?= form_error('role', '<small class="text-danger pl-3">', '</small>')?>  
                        </div>    
                    </div>
                </div>

                <div class="row">    
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="control-label">Username<span style="color: red">*</span></label>
                            <input type="text" class="form-control mb-3" name="username" value="<?= set_value('username') ?>">
                            <?= form_error('username', '<small class="text-danger pl-3">', '</small>')?>  
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="control-label">Password<span style="color: red">*</span></label>
                            <div class="input-group input-group-merge mb-3">
                                <input type="password" class="form-control" name="pass" value="<?= set_value('pass') ?>">
                            </div>
                            <?= form_error('pass', '<small class="text-danger pl-3">', '</small>')?> 
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="control-label">Jenis Kelamin<span style="color: red">*</span></label>
                                <div class="row mt-2 mb-3">
                                    <div class="col-lg-6">
                                        <div class="form-check">
                                            <input type="radio" name="jenis_kelamin" value="L" class="form-check-input">
                                            <label class="form-check-label" for="jenis_kelamin">Laki-Laki</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-check">
                                            <input type="radio" name="jenis_kelamin" value="P" class="form-check-input">
                                            <label class="form-check-label" for="jenis_kelamin">Perempuan</label>
                                        </div>
                                    </div>
                                </div>
                                <?= form_error('jenis_kelamin', '<small class="text-danger pl-3">', '</small>')?>  
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="control-label">Tanggal Lahir<span style="color: red">*</span></label>
                            <input id="tanggal_lahir"class="form-control mb-3" type="date" name="tanggal_lahir" value="<?= set_value('tanggal_lahir') ?>">
                            <?= form_error('tanggal_lahir', '<small class="text-danger pl-3">', '</small>')?>  
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="control-label">Pekerjaan<span style="color: red">*</span></label>
                            <input type="text" class="form-control mb-3" name="pekerjaan" value="<?= set_value('pekerjaan') ?>">
                            <?= form_error('pekerjaan', '<small class="text-danger pl-3">', '</small>')?>  
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="control-label">Email<span style="color: red">*</span></label>
                            <input type="text" class="form-control mb-3" name="email" value="<?= set_value('email') ?>">
                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>')?>  
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label">Foto Profile</label>
                    <input type="file" name="foto_profile" class="form-control mb-3" id="preview_gambar" onchange="bacaGambar(this)">
                </div>
            </div>
        
            <div class="col-lg-4">  
            <br><br><br>
                <div class="card">
                    <div class="card-body text-center">
                        <div class="form-group">
                            <img src="<?= base_url('assets/template/admin/images/app/avatar_default.svg')?>" id="gambar_load" width="250px" height="200px">
                        </div>
                    </div>
                    <script>
                        // untuk cek/preview gambar
                        function bacaGambar(input){
                            if(input.files && input.files[0]){
                                var reader = new FileReader();
                                reader.onload = function(e){
                                    $('#gambar_load').attr('src', e.target.result);
                                }
                                reader.readAsDataURL(input.files[0]);
                            }
                        }

                        $("#preview_gambar").change(function(){
                            bacaGambar(this);
                        });
                    </script>
                </div>
            </div>    
        </div> 
                        
        <div class="col-lg-4">
            <div class="form-group">
                <button type="reset" onClick="myFunction()" class="btn btn-secondary" data-dismiss="modal" >Close</button>
                    <script>
                        function myFunction() {
                            window.location.href="<?php echo site_url('masteruser') ?>";
                        }
                    </script>
                <button type="submit" class="btn btn-primary m-2">Save</button>
            </div></div>
        </div>
    </form>
    </div>
</div>

<script>
    document.getElementsByName('tanggal_lahir')[0].addEventListener('change', function() {
        var today = new Date();
        var minimumAge = 17;
        var inputDate = new Date(this.value);
        var age = (today.getFullYear() - inputDate.getFullYear()) - (today.getMonth() < inputDate.getMonth() || (today.getMonth() == inputDate.getMonth() && today.getDate() < inputDate.getDate()) ? 1 : 0);

        if (age < minimumAge) {
          alert('Tanggal lahir tidak boleh kurang dari 17 tahun');
          this.value = '';
      }
  });   
</script>
