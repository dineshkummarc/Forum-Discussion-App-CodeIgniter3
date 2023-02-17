const flashData = $('.flash-data').data('flashdata');

if (flashData) {
    Swal({
        title : 'Berhasil',
        type : 'success',
        text : 'Data berhasil ' + flashData
    });
}

const href = $(this).attr('href');

$('.tombol-hapus').on('click', function (e) {

    e.preventDefault();
    
    Swal.fire({
            icon : 'warning',
            title : 'Apakah anda yakin',
            text : 'Data ini akan dihapus?',
            showCancelButton: true,
            confirmButtonColor : '#3d78a',
            cancelButtonColor : '#d33',
            confirmButtonText : 'Ya, hapus!'
    }).then((result) => {
        if (result.value) {
        document.location.href = href;
        }
    })
});