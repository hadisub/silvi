<?= $this->include('layout/headeradmin') ?>
<?= $this->include('layout/sidebar') ?>

<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h2 class="mt-4"><?= $judul ?></h2>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Laporan</li>
                            <li class="breadcrumb-item">Kalender Kegiatan Vidcon</li>
                        </ol>
                    </div>
                    <div class="container-fluid">
                		<!-- THE CALENDAR -->
                			<div id="calendar"></div>
              			</div>
                </main>

<?= $this->include('layout/footeradmin') ?>