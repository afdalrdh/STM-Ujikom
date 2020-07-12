const flashData = $('.flash-data').data('flashdata');

if(flashData){
    swal({
        title: 'Data berhasil ' + flashData,
        type: 'success'
    });
}

$('.tombol-hapus').on('click', function (e){

    e.preventDefault();
    const href = $(this).attr('href');

    swal({
        title: 'Peringatan',
        text: 'Apakah anda yakin untuk menghapus data tersebut ?',
        type: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Ya',
        closeOnConfirm: false
    },
    function(){
        document.location.href = href;
    })

});