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
                            <h4 class="nk-block-title">Perhitungan</h4>
                            <div class="nk-block-des">
                                <p>Data diambil dari data uji yang sudah dilakukan penilaian dan pembobotan.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card card-preview">
                        <div class="card-inner">


                            <h6>Table 1 - Nilai Awal</h6>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tr class="active">
                                        <th class="col-md-1 text-center bg-light">No</th>
                                        <?php
                                        $no = 1;
                                        $table = $this->page->getData('table1');
                                        foreach ($table as $item => $value) {
                                            foreach ($value as $heading => $itemValue) {
                                        ?>
                                        <th class="text-center bg-light"><?php echo $heading ?></th>
                                        <?php
                                            }
                                            break;
                                        }
                                        ?>
                                    </tr>
                                    <?php
                                    foreach ($table as $item => $value) {
                                    ?>
                                    <tr>
                                        <td class="text-center"><?php echo $no ?></td>
                                        <?php
                                            foreach ($value as $itemValue) {
                                            ?>
                                        <td><?php echo $itemValue ?></td>
                                        <?php
                                            }
                                            ?>
                                    </tr>
                                    <?php
                                        $no++;
                                    }
                                    ?>

                                </table>
                            </div>

                            <br>
                            <br>
                            <h6>Table 2 - Dihitung sesuai sifat cost atau benefit</h6>
                            <br>
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <tr class="active">
                                        <th class="col-md-1 text-center bg-light">No</th>
                                        <?php
                                        $no = 1;
                                        $table = $this->page->getData('table2');
                                        foreach ($table as $item => $value) {
                                            foreach ($value as $heading => $itemValue) {
                                        ?>
                                        <th class="text-center bg-light"><?php echo $heading ?></th>
                                        <?php
                                            }
                                            break;
                                        }
                                        ?>
                                    </tr>
                                    <?php
                                    foreach ($table as $item => $value) {
                                    ?>
                                    <tr>
                                        <td class="text-center"><?php echo $no ?></td>
                                        <?php
                                            foreach ($value as $itemValue) {
                                            ?>
                                        <td><?php echo $itemValue ?></td>
                                        <?php
                                            }
                                            ?>
                                    </tr>
                                    <?php
                                        $no++;
                                    }
                                    ?>
                                </table>
                            </div>
                            <br>

                            <div class="table-responsive ">
                                <table class="table table-bordered">
                                    <tr class="active">
                                        <th class="col-md-1 text-center bg-light">No</th>
                                        <th class="text-center bg-light">Kriteria</th>
                                        <th class="text-center bg-light">Sifat</th>
                                        <th class="text-center bg-light">Nilai min /max</th>
                                    </tr>
                                    <?php
                                    $dataSifat = $this->page->getData('dataSifat');
                                    $no = 1;
                                    foreach ($dataSifat as $item => $value) {
                                    ?>
                                    <tr>
                                        <td class="text-center"><?php echo $no ?></td>
                                        <td><?php echo $item ?></td>
                                        <td><?php echo $value->interest ?></td>
                                        <td>
                                            <?php
                                                $valueMinMax = $dataSifat = $this->page->getData('valueMinMax');
                                                if (isset($valueMinMax['min' . $item])) {
                                                    echo $valueMinMax['min' . $item] . ' - Minimal';
                                                }
                                                if (isset($valueMinMax['max' . $item])) {
                                                    echo $valueMinMax['max' . $item] . ' - Maksimal';
                                                }
                                                ?>
                                        </td>
                                    </tr>
                                    <?php
                                        $no++;
                                    }
                                    ?>
                                </table>
                            </div>
                            <br>

                            <h6>Table 3 - Dikali dengan bobot</h6>
                            <br>
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <tr class="active">
                                        <th class="col-md-1 text-center bg-light">No</th>
                                        <?php
                                        $no = 1;
                                        $table = $this->page->getData('table3');
                                        foreach ($table as $item => $value) {
                                            foreach ($value as $heading => $itemValue) {
                                        ?>
                                        <th class="text-center bg-light"><?php echo $heading ?></th>
                                        <?php
                                            }
                                            break;
                                        }
                                        ?>
                                    </tr>
                                    <?php
                                    foreach ($table as $item => $value) {
                                    ?>
                                    <tr>
                                        <td class="text-center"><?php echo $no ?></td>
                                        <?php
                                            foreach ($value as $itemValue) {
                                            ?>
                                        <td><?php echo $itemValue ?></td>
                                        <?php
                                            }
                                            ?>
                                    </tr>
                                    <?php
                                        $no++;
                                    }
                                    ?>
                                </table>
                            </div>
                            <br>
                            <div class="table-responsive ">
                                <table class="table table-bordered">
                                    <tr class="active">
                                        <th class="col-md-1 text-center bg-light">No</th>
                                        <th class="text-center bg-light">Kriteria</th>
                                        <th class="text-center bg-light">Bobot</th>
                                    </tr>
                                    <?php
                                    $bobot = $this->page->getData('bobot');
                                    $no = 1;
                                    foreach ($bobot as $item => $value) {
                                    ?>
                                    <tr>
                                        <td class="text-center"><?php echo $no ?></td>
                                        <td><?php echo $value->nama_kriteria ?></td>
                                        <td class="text-center"><?php echo $value->bobot ?></td>

                                    </tr>
                                    <?php
                                        $no++;
                                    }
                                    ?>
                                </table>
                            </div>
                            <br>
                            <h6>Table 4 - Dijumlah sesuai dengan alternatif dan di dapat hasil rangking
                            </h6>
                            <br>
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <tr class="active">
                                        <th class="col-md-1 text-center bg-light">No</th>
                                        <?php
                                        $no = 1;
                                        $table = $this->page->getData('tableFinal');
                                        foreach ($table as $item => $value) {
                                            foreach ($value as $heading => $itemValue) {
                                        ?>
                                        <th class="text-center bg-light"><?php echo $heading ?></th>
                                        <?php
                                            }
                                            break;
                                        }
                                        ?>
                                    </tr>
                                    <?php
                                    foreach ($table as $item => $value) {
                                    ?>
                                    <tr>
                                        <td class="text-center"><?php echo $no ?></td>
                                        <?php
                                            foreach ($value as $itemValue) {
                                            ?>
                                        <td><?php echo $itemValue ?></td>
                                        <?php
                                            }
                                            ?>
                                    </tr>
                                    <?php
                                        $no++;
                                    }
                                    ?>
                                </table>
                            </div>
                            <br>

                            <?php
                            $table = $this->page->getData('tableFinal');
                            foreach ($table as $item => $value) {
                                if ($value->Rangking == 1) {
                            ?>
                            <div class="alert alert-success" role="alert">
                                <p><b>Kesimpulan : </b> <br> Dari hasil perhitungan yang dilakukan
                                    menggunakan metode SAW
                                    alternatif terbaik adalah <b>
                                        <?php echo $value->Alternatif ?> </b> dengan nilai
                                    <?php echo $value->Total ?>
                                </p>
                            </div>
                            <?php
                                }
                            }
                            ?>

                        </div><!-- .card-preview -->
                    </div> <!-- nk-block -->


                </div>
            </div>
        </div>
    </div>
    <!-- content @e -->