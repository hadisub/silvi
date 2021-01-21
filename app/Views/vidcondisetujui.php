<?= $this->include('layout/headeradmin') ?>
<?= $this->include('layout/sidebar') ?>

<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h2 class="mt-4"><?= $judul ?></h2>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Daftar Pengajuan</li>
                            <li class="breadcrumb-item">Daftar Pengajuan Bantuan Vidcon yang Disetujui</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="tblpengajuandisetujui" width="100%" cellspacing="0">
                                        <thead class="text-center">
                                            <tr>
                                                <th>No.</th>
                                                <th>No. Surat</th>
                                                <th>Asal Surat</th>
                                                <th>Perihal</th>
                                                <th>Tempat</th>
                                                <th>Tgl. Vidcon</th>
                                                <th class="type-action">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>

                <script type="text/javascript">
                    console.log('aa');
                </script>

<?= $this->include('layout/footeradmin') ?>