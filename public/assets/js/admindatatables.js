var baseUrl = document.head.querySelector('meta[name="url"]').content;
if($("#tblpengajuanbaru".length)){
    table = $('#tblpengajuanbaru').DataTable({
    "order" : [],
    "processing" : true,
    "serverSide" : true,
    "ajax" : {
      "url" : baseUrl+'/vidconbaru/tabelpengbaru',
      "type" : "GET"
    },
    "columns": [
      {data: 'no'},
      {data: 'nomorsurat'},
      {data: 'namalembaga'},
      {data: 'keterangan'},
      {data: 'tempat'},
      {data: 'tglvidcon'},
      {data: 'id_vidcon'},
    ],
    "columnDefs" : [{
      "targets" : [0],
      "orderable" : false
    }, {
      targets: ['type-action'],
      render: function(data, type, full, meta) {
        return '<button class="btn btn-primary btn-sm">'+full.id_vidcon+'</button>';
      }
    }]  
  }); 
}

if($("#tblpengajuandisetujui".length)){
    table = $('#tblpengajuandisetujui').DataTable({
    "order" : [],
    "processing" : true,
    "serverSide" : true,
    "ajax" : {
      "url" : baseUrl+'/vidcondisetujui/tabelpengdisetujui',
      "type" : "GET"
    },
    "columns": [
      {data: 'no'},
      {data: 'nomorsurat'},
      {data: 'namalembaga'},
      {data: 'keterangan'},
      {data: 'tempat'},
      {data: 'tglvidcon'},
      {data: 'id_vidcon'},
    ],
    "columnDefs" : [{
      "targets" : [0],
      "orderable" : false
    }, {
      targets: ['type-action'],
      render: function(data, type, full, meta) {
        return '<button class="btn btn-primary btn-sm">'+full.id_vidcon+'</button>';
      }
    }]  
  }); 
}

if($("#tblpengajuandipending".length)){
    table = $('#tblpengajuandipending').DataTable({
    "order" : [],
    "processing" : true,
    "serverSide" : true,
    "ajax" : {
      "url" : baseUrl+'/vidcondipending/tabelpengdipending',
      "type" : "GET"
    },
    "columns": [
      {data: 'no'},
      {data: 'nomorsurat'},
      {data: 'namalembaga'},
      {data: 'keterangan'},
      {data: 'tempat'},
      {data: 'tglvidcon'},
      {data: 'id_vidcon'},
    ],
    "columnDefs" : [{
      "targets" : [0],
      "orderable" : false
    }, {
      targets: ['type-action'],
      render: function(data, type, full, meta) {
        return '<button class="btn btn-primary btn-sm">'+full.id_vidcon+'</button>';
      }
    }]  
  }); 
}

if($("#tblpengajuanditolak".length)){
    table = $('#tblpengajuanditolak').DataTable({
    "order" : [],
    "processing" : true,
    "serverSide" : true,
    "ajax" : {
      "url" : baseUrl+'/vidconditolak/tabelpengditolak',
      "type" : "GET"
    },
    "columns": [
      {data: 'no'},
      {data: 'nomorsurat'},
      {data: 'namalembaga'},
      {data: 'keterangan'},
      {data: 'tempat'},
      {data: 'tglvidcon'},
      {data: 'id_vidcon'},
    ],
    "columnDefs" : [{
      "targets" : [0],
      "orderable" : false
    }, {
      targets: ['type-action'],
      render: function(data, type, full, meta) {
        return '<a class="btn btn-primary btn-sm"><i class="fas fa-eye"></i>'+full.id_vidcon+'</a>'+
        '<a class="btn btn-warning btn-sm"><i class="fas fa-hourglass"></i>'+full.id_vidcon+'</a>'+
        '<a class="btn btn-danger btn-sm"><i class="fas fa-trash"></i>'+full.id_vidcon+'</a>';
      }
    }]  
  }); 
}