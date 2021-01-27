$(document).on('click',".btn-hapus",function(e){
// 	var idpengajuan = $(this).data('id');
// 	$('#id_terhapus').val(idpengajuan);
// });
$('#modalhapuspengajuan').find('form').prop('action',$(this).data('url'));
});
