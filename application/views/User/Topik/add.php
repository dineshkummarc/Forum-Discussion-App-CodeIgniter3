<form role="form" action="<?php echo site_url('DashboardUser/tambah/')?>" method="post">
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Topik</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <input class="form-control" name="id_topik" value="<?php echo $idTopik;?>" hidden >
        <input type="text" class="form-control" name="id_akun" value="<?php echo $this->session->userdata('user_id'); ?>" hidden>

        <label class="control-label" for="judul_topik">JUDUL TOPIK</label>
        <input type="text" name="judul_topik" class="form-control" id="judul_topik" required>
        <?= form_error('judul_topik', '<small class="text-danger pl-3">', '</small>')?>  
        <br>

        <label class="control-label" for="id_kategori">KATEGORI TOPIK</label>
            <select name="id_kategori" class="form-control" id="id_kategori" text="Pilih Kategori Topik" >
                <?php foreach ($datakategori as $key): ?>
                    <option value="<?php echo $key->id_kategori ?>"><?php echo $key->nama_kategori?> </option>
                <?php endforeach ?>
            </Select><br>

        <label class="control-label" for="isi_topik">ISI TOPIK</label>
        <textarea name="isi_topik" class="form-control" id="isi_topik" required></textarea>
        <?= form_error('isi_topik', '<small class="text-danger pl-3">', '</small>')?>  

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <input type="submit" class="btn btn-primary" name="tambah" value="Submit">
      </div>
    </div>
  </div>
</form>