$(function(){
    $('.tambah').on('click', function(){
        $('#tambahTemanKamar').html('Tambah teman kamar');
        $('.modal-footer button[type=submit]').html('Tambah teman');
        $('.modal-body form').attr('action' , '/phpmvc/public/teman/tambah');

        $('#id').val();
        $('#nama').val();
        $('#alamat').val();
        $('#kelas').val();
    });

    $('.edit').on('click', function(){
        $('#tambahTemanKamar').html('Ubah nama teman');
        $('.modal-footer button[type=submit]').html('Ubah teman');
        $('.modal-body form').attr('action' , '/phpmvc/public/teman/ubah');
    
        const id = $(this).data('id');
        
        $.ajax({
            url: '/phpmvc/public/teman/getubah',
            data: {id , id},
            method: 'post',
            dataType: 'json',
            success: function(data){
                $('#id').val(data.id);
                $('#nama').val(data.nama);
                $('#alamat').val(data.alamat);
                $('#kelas').val(data.kelas);
            }
        });
    });
});