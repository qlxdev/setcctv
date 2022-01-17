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
                            <h4 class="nk-block-title">Data Sub Kriteria</h4>
                            <div class="nk-block-des">
                                <p>Data yang digunakan sebagai acuan input data uji.</p>
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
                                        <th>Sub Kriteria</th>
                                        <th>Nilai</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($subkriteria as $row) { ?>
                                    <tr>
                                        <td><?= $no ?></td>
                                        <td><?= $row->id_kriteria ?></td>
                                        <td><?= $row->nama_subkriteria ?></td>
                                        <td><?= $row->nilai_bobot ?></td>

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