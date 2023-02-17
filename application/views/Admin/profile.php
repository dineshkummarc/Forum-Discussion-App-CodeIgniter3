<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <div id="flash" data-flash="<?=$this->session->flashdata('pesan_success'); ?>"></div> 
    <?php
        if ($this->session->flashdata('pesan_error')) {
            echo '<div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>';
            echo $this->session->flashdata('pesan_error');
            echo '</div>';
        }
    ?>
<div class="main-content" id="panel">
    <div class="container-fluid mt-3">
        <?php foreach($user as $u) { ?>
            <div class="card">
                <div class="card-header">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-auto">
                            <h2>Profil Akun</h2>
                        </div>
                        <div class="col-auto">
                            <a href="<?php echo base_url('discuss') ?>" class="btn btn-info btn-sm"><i class="fa fa-chevron-circle-left"></i> Kembali</a></button>
                        </div>
                    </div> 
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="card d-block">
                        <div class="card-body">

                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <p class="mt-2 mb-1 text-muted">Nama Akun</p>
                                    <div class="d-flex align-items-start">
                                        <i class="mdi mdi-account-outline font-18 text-success me-1"></i>
                                        <div class="w-100">
                                            <h6 class="mt-1 font-size-14">
                                                <?php echo $u->nama_user ?>
                                            </h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <p class="mt-2 mb-1 text-muted">Role</p>
                                    <div class="d-flex align-items-start">
                                        <i class="mdi font-18 text-success me-1"></i>
                                        <div class="w-100">
                                            <h6 class="mt-1 font-size-12">
                                                <?php if($u->role == "User" || $u->role == "user") { 
                                                    echo '<span class="badge bg-success">user</span>';
                                                } else if($u->role == "Admin" || $u->role == "admin") { 
                                                    echo '<span class="badge bg-primary">admin</span>';
                                                } ?>
                                            </h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <p class="mt-2 mb-1 text-muted">Jenis Kelamin</p>
                                    <div class="d-flex align-items-start">
                                        <i class="mdi mdi-gender-male-female font-18 text-success me-1"></i>
                                        <div class="w-100">
                                            <h6 class="mt-1 font-size-12">
                                                <?php if ($u->jenis_kelamin == 'L') {echo 'Laki-Laki';} ?>
                                                <?php if ($u->jenis_kelamin == 'P') {echo 'Perempuan';} ?>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <p class="mt-2 mb-1 text-muted">Email</p>
                                    <div class="d-flex align-items-start">
                                        <i class="mdi mdi-email-outline font-18 text-success me-1"></i>
                                        <div class="w-100">
                                            <h6>
                                                <?= $u->email ?>
                                            </h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <p class="mt-2 mb-1 text-muted">Pekerjaan</p>
                                    <div class="d-flex align-items-start">
                                        <i class="mdi mdi-account-question-outline font-18 text-success me-1"></i>
                                        <div class="w-100">
                                            <h6 class="mt-1 font-size-12">
                                                <?php echo $u->pekerjaan ?>
                                            </h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <p class="mt-2 mb-1 text-muted">Tanggal Lahir</p>
                                    <div class="d-flex align-items-start">
                                        <i class="mdi mdi-calendar-month-outline font-18 text-success me-1"></i>
                                        <div class="w-100">
                                            <h6 class="mt-1 font-size-12">
                                                <?= $u->tgl_lahir ?>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <p class="mt-2 mb-1 text-muted">Username</p>
                                    <div class="d-flex align-items-start">
                                        <i class="mdi mdi-account-outline font-18 text-success me-1"></i>
                                        <div class="w-100">
                                            <h6 class="mt-1 font-size-12">   
                                                <?= $u->username ?>
                                            </h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="d-flex align-items-start">
                                        <i class="mdi  text-success me-1"></i>
                                        <div class="w-100">
                                            <br><br><br>
                                            <span>
                                                <a href="<?php echo base_url('masteruser/view_ubah_profile/'.$this->session->userdata('user_id')) ?> " data-bs-toggle="modal" data-bs-target="#exampleModal2" class=" btn btn-warning btn-sm"><i class="fa fa-edit"> Edit Data</i></a></button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>     
                </div>

                <div class="col-xl-4 col-lg-5">
                    <div class="card">
                        <div class="card-body text-center">
                            <img src="<?php 
                            if($u->foto_profile == null){
                                echo base_url('assets/template/admin/images/app/avatar_default.svg');
                            } else {
                                echo base_url('assets/image/profile/'.$u->foto_profile);
                            }

                        ?>" id="gambar_load" width="240px" height="240px">
                        <br><br>
                        <span float:center>
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModalCenter" class=" btn btn-warning btn-sm">
                               <i class="fa fa-edit"> Edit Foto</i>
                           </button>
                       </div>


                   </div>

               </span>

           </span>
       </div>

   </div>
   </div><?php } ?> 

   <!-- Modal -->
   <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">


            <h5 class="modal-title" id="exampleModalLongTitle">Ubah Foto Profil</h5>
          
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
        <?php foreach($user as $u) { ?>

            <form action="<?php echo base_url('Profile/update_foto')?>" method="post" enctype="multipart/form-data">
                <input type="text" class="form-control" name="id_akun" value="<?php echo $u->id_akun ?>"  hidden> 
                <label class="control-label">Foto Profile <span style="color: red">*(Maks. 2mb, format JPEG/JPG/PNG)</span></label>
                <br>
                <input type="file" name="foto_profile" accept=".jpg,.jpeg,.png">
            </div>
            <br>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update Foto</button>

            </div> 
        </form>
    </div>
</div>
</div>
</div>
</div>  

<form role="form" action="<?php echo site_url('Profile/UpdateAkun') ?>" method="post">
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Profile</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <input type="text" class="form-control" name="id_akun" value="<?php echo $u->id_akun ?>"  hidden> 
            <!-- <div class="row">
                <div class="col-lg-6"> -->
                    <div class="form-group">
                        <label class="control-label">Nama Lengkap<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="nama_user" value="<?php echo $u->nama_user ?>" required>
                        <input type="hidden" name="role" value="<?php echo $u->role ?>">
                        <!-- </div>
                    
                </div> -->

                <!-- <div class="col-lg-6">
                    <div class="form-group">
                        <label for="role">Role<span style="color: red">*</span></label>
                        <select name="role" class="form-control" style="width:100%" required>
                            <option ><?php echo $u->role ?></option>
                            <option value="Admin">Admin</option>
                            <option value="User">User</option>
                        </select>
                    </div>    
                </div>
            </div> -->

            <div class="row">    
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="control-label">Username<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="username" value="<?php echo $u->username ?>" required>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="control-label">Password<span style="color: red">*</span></label>
                        <div class="input-group input-group-merge mb-3">
                            <input type="password" class="form-control" name="password" id="password" value="<?php echo md5($u->password) ?>" required>
                        </div>
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
                        <input type="text" class="form-control" name="pekerjaan" value="<?php echo $u->pekerjaan ?>" required>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="control-label">Tanggal Lahir<span style="color: red">*</span></label>
                        <input class="form-control mb-3" id="tanggal_lahir" type="date" name="tanggal_lahir" value="<?php echo $u->tgl_lahir ?>" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="control-label">Email<span style="color: red">*</span></label>
                        <input type="email" class="form-control" name="email" value="<?php echo $u->email ?>" required>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <input type="submit" class="btn btn-primary" name="tambah" value="Submit">
    </div>
</div>
</div>
</form>
<?php } ?>

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