<!-- content @s -->
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">

                <div class="nk-block nk-block-lg">
                    <div class="nk-block-head">
                        <div class="nk-block-head-content">
                            <div class="nk-block-head-sub">
                                <a class="back-to nk-nav-compact" href="#" data-target="sidebarMenu">
                                    <em class="icon ni ni-arrow-left"></em>
                                    <span></span>
                                </a>
                            </div>
                            <h4 class="nk-block-title">Data Kriteria</h4>
                            <div class="nk-block-des">
                                <p>Data yang digunakan untuk mengolah metode SAW.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card card-preview">
                        <div class="card-inner">
                            <table class="table">
                                <thead class="bg-light">
                                    <tr>
                                        <th>No</th>
                                        <th>Kriteria</th>
                                        <th>Kepentingan</th>
                                        <th>Bobot</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($kriteria as $item) {
                                    ?>
                                    <tr>
                                        <td><?= $no ?></td>
                                        <td><?= $item->nama_kriteria ?></td>
                                        <td><?= ($item->interest == 'B') ? 'Benefit' : 'Cost'; ?></td>
                                        <td><?= $item->bobot ?></td>
                                    </tr>
                                    <?php $no++;
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                    </div><!-- .card-preview -->
                </div> <!-- nk-block -->


            </div>
        </div>
    </div>
</div>
<!-- content @e -->