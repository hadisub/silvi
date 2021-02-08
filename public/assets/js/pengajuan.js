$(document).on('click',".btn-detail",function(e){
var nomordetail 		= $(this).data('nomordetail');
var lembagadetail 		= $(this).data('lembagadetail');
var perihaldetail 		= $(this).data('perihaldetail');
var tanggaldetail 		= $(this).data('tanggaldetail');
var tempatdetail 		= $(this).data('tempatdetail');
var jumlahdetail 		= $(this).data('jumlahdetail');
var keterangandetail 	= $(this).data('keterangandetail');
var kebutuhandetail 	= $(this).data('kebutuhandetail');
var cpdetail 			= $(this).data('cpdetail');
var hpcpdetail 			= $(this).data('hpcpdetail');
var createddetail 		= $(this).data('createddetail');
var updateddetail 		= $(this).data('updateddetail');
var suratdetail			= $(this).data('suratdetail');

$('#modaldetailpengajuan').find('#nomordetail').text(nomordetail);
$('#modaldetailpengajuan').find('#lembagadetail').text(lembagadetail);
$('#modaldetailpengajuan').find('#perihaldetail').text(perihaldetail);
$('#modaldetailpengajuan').find('#tanggaldetail').text(tanggaldetail);
$('#modaldetailpengajuan').find('#tempatdetail').text(tempatdetail);
$('#modaldetailpengajuan').find('#jumlahdetail').text(jumlahdetail);
$('#modaldetailpengajuan').find('#keterangandetail').text(keterangandetail);
$('#modaldetailpengajuan').find('#kebutuhandetail').text(kebutuhandetail);
$('#modaldetailpengajuan').find('#cpdetail').text(cpdetail);
$('#modaldetailpengajuan').find('#hpcpdetail').text(hpcpdetail);
$('#modaldetailpengajuan').find('#createddetail').text(createddetail);
$('#modaldetailpengajuan').find('#updateddetail').text(updateddetail);
$('#modaldetailpengajuan').find('#suratdetail').html('<img src="../assets/img/'+suratdetail+' " width="100%">');

});

$(document).on('click',".btn-approve",function(e){
var lembagadiapprove = $(this).data('nama');
var perihaldiapprove = $(this).data('perihal');
var tanggaldiapprove = $(this).data('tanggal');

$('#modalapprovepengajuan').find('#lembagadiapprove').text(lembagadiapprove);
$('#modalapprovepengajuan').find('#perihaldiapprove').text(perihaldiapprove);
$('#modalapprovepengajuan').find('#tanggaldiapprove').text(tanggaldiapprove);
$('#modalapprovepengajuan').find('form').prop('action',$(this).data('url'));
});

$(document).on('click',".btn-pending",function(e){
var lembagadipending = $(this).data('nama');
var perihaldipending = $(this).data('perihal');
var tanggaldipending = $(this).data('tanggal');

$('#modalpendingpengajuan').find('#lembagadipending').text(lembagadipending);
$('#modalpendingpengajuan').find('#perihaldipending').text(perihaldipending);
$('#modalpendingpengajuan').find('#tanggaldipending').text(tanggaldipending);
$('#modalpendingpengajuan').find('form').prop('action',$(this).data('url'));
});

$(document).on('click',".btn-tolak",function(e){
var lembagaditolak = $(this).data('nama');
var perihalditolak = $(this).data('perihal');
var tanggalditolak = $(this).data('tanggal');

$('#modaltolakpengajuan').find('#lembagaditolak').text(lembagaditolak);
$('#modaltolakpengajuan').find('#perihalditolak').text(perihalditolak);
$('#modaltolakpengajuan').find('#tanggalditolak').text(tanggalditolak);
$('#modaltolakpengajuan').find('form').prop('action',$(this).data('url'));
});

$(document).on('click',".btn-hapus",function(e){
var lembagadihapus = $(this).data('nama');
var perihaldihapus = $(this).data('perihal');
var tanggaldihapus = $(this).data('tanggal');

$('#modalhapuspengajuan').find('#lembagadihapus').text(lembagadihapus);
$('#modalhapuspengajuan').find('#perihaldihapus').text(perihaldihapus);
$('#modalhapuspengajuan').find('#tanggaldihapus').text(tanggaldihapus);
$('#modalhapuspengajuan').find('form').prop('action',$(this).data('url'));
});

$(document).on('click',"#caritanggal",function(e){
//cek jika tanggal awal lebih besar dari tanggal akhir
var tanggalawal = $("#tanggalawal").val();
var tanggalakhir = $("#tanggalakhir").val();
if(tanggalawal>tanggalakhir){
	alert("Tanggal awal tidak boleh lebih besar dari tanggal akhir");
	return false;
}
});

$(document).on('click',"#cetak_pdf",function(e){
//ambil tanggal awal dan tanggal akhir
var tanggalawal = $("#tanggalawal").val();
var tanggalakhir = $("#tanggalakhir").val();

if (tanggalawal.length < 1 || tanggalakhir.length < 1) {
	alert("Tanggal awal dan tanggal akhir harus diisi");
	return false;
}
});

$(document).on('click',"#cetak_excel",function(e){
//ambil tanggal awal dan tanggal akhir
var tanggalawal = $("#tanggalawal").val();
var tanggalakhir = $("#tanggalakhir").val();

if (tanggalawal.length < 1 || tanggalakhir.length < 1) {
	alert("Tanggal awal dan tanggal akhir harus diisi");
	return false;
}
});