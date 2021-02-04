<!DOCTYPE html>
<html lang="en">
    <head>
        <style>
        body {
        margin: 0;
        font-family: "Segoe UI", Roboto, "Helvetica Neue", 
        Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", 
        "Segoe UI Symbol", "Noto Color Emoji";
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #212529;
        text-align: left;
        background-color: #fff;
        }

        .text-center {
          text-align: center !important;
        }

        .header{ 
        font-size: 1.75rem;
        font-weight: 700;
        }

        .table {
        border-collapse: collapse;
        }
        .table th,
        .table td {
          padding: 0.75rem;
          vertical-align: top;
          border-top: 1px solid #dee2e6;
        }
        .table thead th {
          vertical-align: bottom;
          border-bottom: 2px solid #dee2e6;
        }
        .table tbody + tbody {
          border-top: 2px solid #dee2e6;
        }

        .table-sm th,
        .table-sm td {
          padding: 0.3rem;
        }

        .table-bordered {
          border: 1px solid #dee2e6;
        }
        .table-bordered th,
        .table-bordered td {
          border: 1px solid #dee2e6;
        }
        .table-bordered thead th,
        .table-bordered thead td {
          border-bottom-width: 2px;
        }

        .table .thead-light th {
        color: #495057;
        background-color: #e9ecef;
        border-color: #dee2e6;
        }
        </style>
    </head>
    <body>
        <div class="header text-center">
            <p><?= $judul ?></p>
        </div>
        <p class= text-center> Tanggal <?= $tanggalawal ?> s.d. <?= $tanggalakhir ?></p>
        <div>
            <table class="table table-bordered" id="tbllaporan" cellspacing="0">
                <thead class="text-center thead-light">
                    <tr>
                        <th>No.</th>
                        <th>No. Surat</th>
                        <th>Tgl. Diajukan</th>
                        <th>Asal Surat</th>
                        <th>Perihal</th>
                        <th>Tempat</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i =1+(10*($halaman_sekarang-1)); ?>
                    <?php foreach($laporan as $l): ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $l['nomorsurat'] ?></td>
                        <td style="white-space: nowrap"><?= $l['created_at'] = date("d-m-Y", strtotime($l['created_at']))  ?></td>
                        <td><?= $l['namalembaga'] ?></td>
                        <td><?= $l['perihal'] ?></td>
                        <td><?= $l['tempat'] ?></td>
                        <td><?= $l['keterangan'] ?></td>
                    </tr>
                    <?php endforeach; ?>        
                </tbody>
            </table>
        </div>
    </body>
</html>
