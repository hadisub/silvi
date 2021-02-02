                            <div class="table-responsive">
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
                                <?php if(!is_null($pager)) { echo $pager->links('tbllaporan','my_pager');} ?>
                            </div>
