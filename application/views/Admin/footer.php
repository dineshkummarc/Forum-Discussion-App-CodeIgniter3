    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
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
    <script src="<?= base_url ('assets/js/javascript.js'); ?>"></script>
    <script src="<?= base_url ('assets/dataTables/datatables.min.js'); ?>"></script>

    <script src="<?= base_url('assets/template/admin/libs/datatables.net/js/jquery.dataTables.min.js');?>"></script>
    <script src="<?= base_url('assets/template/admin/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js');?>"></script>
    <script src="<?= base_url('assets/template/admin/libs/datatables.net-responsive/js/dataTables.responsive.min.js');?>"></script>

    <!-- Sweet Alert2 -->
    <script src="<?= base_url('assets/js/myscript.js'); ?>"></script>
    <script src="<?= base_url('assets/js/sweetalert2.min.js'); ?>"></script>
    <script>
            $(document).ready(function() {
            $('#datatables').DataTable( {
                responsive: true
            } );
        } );
    </script>

    <script>
        var flash = $('#flash').data('flash');
        if(flash) {
            Swal.fire({
                icon: 'success',
                title: 'Sukses',
                text: flash
            })
        }

        // var flash_error= $('#flash_error').data('flash_error');
        // if(flash_error) {
        //     Swal.fire({
        //     icon: 'Gagal',
        //     title: 'Gagal',
        //     text: 'Data gagal!' + flash
        //     })
        // }
    </script>

    <script>
        $(document).on('click', '#tombol-hapus', function(e) {
            e.preventDefault();
            var link = $(this).attr('href');

            Swal.fire({
                title: 'Apakah anda yakin ?',
                text: "Data akan dihapus !",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Hapus Data!'
            }).then((result) => {
                if (result.isConfirmed) {
                   window.location = link;
                }
            })
        })
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
</body>

</html>