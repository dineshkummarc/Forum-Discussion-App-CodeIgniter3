<div class="container-fluid pt-4 px-4">
    <div class="row g-8">  
        <div class="row">   
            <?php foreach($user as $u) { ?>
                <div class="row">   

                    <h4 class="card-title">Edit User</h4>
                    <br/>
                    <form role="form" action="<?php echo site_url('masteruser/updateAkun') ?>" method="post">
                        <div class="row">
                            <div class="col-lg-12">
                                <input type="text" class="form-control" name="id_akun" value="<?php echo $u->id_akun ?>"  hidden> 
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="control-label">Nama Lengkap<span style="color: red">*</span></label>
                                            <input type="text" class="form-control" name="nama_user" value="<?php echo $u->nama_user ?>">
                                            <?= form_error('nama_user', '<small class="text-danger pl-3">', '</small>')?>  
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="role">Role<span style="color: red">*</span></label>
                                            <select name="role" class="form-control" style="width:100%" required>
                                                <option ><?php echo $u->role ?></option>
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
                                            <input type="text" class="form-control" name="username" value="<?php echo $u->username ?>">
                                            <?= form_error('username', '<small class="text-danger pl-3">', '</small>')?>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="control-label">Password<span style="color: red">*</span></label>
                                            <div class="input-group input-group-merge mb-3">
                                                <input type="password" class="form-control" name="password" id="password" value="<?php echo md5($u->password) ?>">
                                            </div>
                                            <?= form_error('password', '<small class="text-danger pl-3">', '</small>')?>
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
                                                        <input type="radio" name="jenis_kelamin" value="L" <?php if($u->jenis_kelamin=='L') echo 'checked'?> class="form-check-input" >
                                                        <label class="form-check-label" for="jenis_kelamin">Laki-Laki</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-check">
                                                        <input type="radio" name="jenis_kelamin" value="P" <?php if($u->jenis_kelamin=='P') echo 'checked'?> class="form-check-input">
                                                        <label class="form-check-label" for="jenis_kelamin">Perempuan</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <?= form_error('jenis_kelamin', '<small class="text-danger pl-3">', '</small>')?>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="control-label">Retype Password<span style="color: red">*</span></label>
                                            <input type="password" class="form-control" name="repass" id="repass" onkeyup="validate()" required>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="control-label">Pekerjaan<span style="color: red">*</span></label>
                                            <input type="text" class="form-control" name="pekerjaan" value="<?php echo $u->pekerjaan ?>">
                                            <?= form_error('pekerjaan', '<small class="text-danger pl-3">', '</small>')?>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="control-label">Tanggal Lahir<span style="color: red">*</span></label>
                                            <input class="form-control mb-3" id="tanggal_lahir" type="date" name="tanggal_lahir" value="<?php echo $u->tgl_lahir ?>">
                                            <?= form_error('tanggal_lahir', '<small class="text-danger pl-3">', '</small>')?>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                            <!-- <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label">Foto Profile</label>
                                    <input type="file" name="foto_profile" class="form-control mb-3" id="preview_gambar" onchange="bacaGambar(this)">
                               
                               
                                </div>
                            </div> -->

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label">Email<span style="color: red">*</span></label>
                                    <input type="text" class="form-control" name="email" value="<?php echo $u->email ?>">
                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>')?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="col-lg-4">  
                    <br><br><br>
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="form-group">
                                    <?php if ($u->foto_profile == null){ ?>
                                        <img src="<?= base_url('assets/template/admin/images/app/avatar_default.svg')?>" id="gambar_load" width="250px" height="200px">
                                    <?php } else { ?>
                                        <img src="<?= base_url('assets/image/profile/'.$u->foto_profile)?>" id="gambar_load" width="250px" height="200px">
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div> 
            -->

            <!-- <div class="col-lg-4"> -->
                <div class="form-group">
                    <br> <br> 
                    <button type="reset" onClick="myFunction()" class="btn btn-secondary" data-dismiss="modal" >Close</button>
                    <script>
                        function myFunction() {
                            window.location.href="<?php echo site_url('masteruser') ?>";
                        }
                    </script>
                    <button type="submit" class="btn btn-primary m-2">Save</button>
                </div>
                <!-- </div>   -->
            </div>
        </form>
    </div>
<?php } ?> 
</div>
</div>

<script>
    function validate(){
    //Store the password field objects into variables ...
        var password = document.getElementById('password');
        var confirm  = document.getElementById('repass');
        const btnsubmit = document.getElementById("submit");
    //Store the Confirmation Message Object ...
        var message = document.getElementById('confirm-message2');
    //Set the colors we will be using ...
        var good_color = "#66cc66";
        var bad_color  = "#ff6666";
    //Compare the values in the password field 
    //and the confirmation field
        if(password.value == confirm.value){
        //The passwords match. 
        //Set the color to the good color and inform
        //the user that they have entered the correct password 
            confirm.style.backgroundColor = good_color;
            message.style.color           = good_color;
            message.innerHTML             = "Kata sandi sesuai!";
            btnsubmit.removeAttribute("disabled");
        }else{
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
            confirm.style.backgroundColor = bad_color;
            message.style.color           = bad_color;
            message.innerHTML             = "Kata sandi tidak sesuai!";
            btnsubmit.setAttribute( "disabled", "disabled");
        }
    }  
</script>
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