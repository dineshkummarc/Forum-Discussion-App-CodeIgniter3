
            <!-- Widgets Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-8">        
                <h4 class="card-title">Tambah Kategori</h4>
                <br/>
                    <form role="form" action="<?php echo site_url('masterkategori/tambah/')?>" method="post">
                        <div class="form-floating mb-2">
                            <input type="text" class="form-control" id="floatingInput"
                                placeholder="text" name="id_kategori" value="<?php echo $idKategori;?>" hidden>
                            <label for="floatingInput" >Id Kategori</label>
                        </div>
                        <div class="form-floating mb-2">
                            <input type="text" class="form-control" id="floatingInput"
                                placeholder="text" name="id_akun" value="<?php echo $this->session->userdata('user_id'); ?>" hidden>
                            <label for="floatingInput">Id Akun</label>
                        </div>

                        <div class="form-floating mb-2">
                            <input type="text" class="form-control" id="floatingInput"
                                placeholder="text" name="nama_kategori" value="<?= set_value('nama_kategori') ?>">
                                <?= form_error('nama_kategori', '<small class="text-danger pl-3">', '</small>')?>  
                            <label for="floatingInput">Nama Kategori</label>
                        </div>
                        
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here"
                                id="floatingTextarea" name="keterangan" value="<?= set_value('keterangan') ?>" style="height: 150px;"></textarea>
                                <?= form_error('keterangan', '<small class="text-danger pl-3">', '</small>')?>  
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
                        <button type="submit" class="btn btn-primary m-2">Save</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Widgets End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="<?= base_url ('assets/js/jquery-3.4.1.min.js'); ?>"></script>
    <script src="<?= base_url ('assets/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?= base_url ('assets/lib/chart/chart.min.js'); ?>"></script>
    <script src="<?= base_url ('assets/lib/waypoints/waypoints.min.js'); ?>"></script>
    <script src="<?= base_url ('assets/lib/owlcarousel/owl.carousel.min.js'); ?>"></script>
    <script src="<?= base_url ('assets/lib/tempusdominus/js/moment.min.js'); ?>"></script>
    <script src="<?= base_url ('assets/lib/tempusdominus/js/moment-timezone.min.js'); ?>"></script>
    <script src="<?= base_url ('assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js'); ?>"></script>
    <script src="<?= base_url ('assets/lib/easing/easing.min.js'); ?>"></script>

    <!-- Template Javascript -->
    <script src="<?= base_url ('assets/js/main.js'); ?>"></script>
</body>

</html>