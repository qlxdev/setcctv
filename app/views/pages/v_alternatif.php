 <!-- content @s -->
 <div class="nk-content ">
     <div class="container-fluid">
         <div class="nk-content-inner">
             <div class="nk-content-body">

                 <div class="nk-block nk-block-lg">

                     <div class="nk-block-head nk-block-head-sm">
                         <div class="nk-block-between">
                             <div class="nk-block-head-content">
                                 <div class="nk-block-head-sub">
                                     <a class="back-to nk-nav-compact" href="#" data-target="sidebarMenu">
                                         <em class="icon ni ni-arrow-left"></em>
                                         <span></span>
                                     </a>
                                 </div>
                                 <h4 class="nk-block-title">Data Uji</h4>
                                 <div class="nk-block-des">
                                     <p>Data yang akan di proses untuk diketahui hasil perhitungan.</p>
                                 </div>
                             </div>

                             <div class="nk-block-head-content">
                                 <div class="toggle-wrap nk-block-tools-toggle">
                                     <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1"
                                         data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                     <div class="toggle-expand-content" data-content="pageMenu">
                                         <ul class="nk-block-tools g-3">

                                             <li class="nk-block-tools-opt">
                                                 <a href="#" class="btn btn-icon btn-primary d-md-none">
                                                     <em class="icon ni ni-plus"></em>
                                                 </a>
                                                 <a href="javascript:void(0)"
                                                     class="btn btn-primary d-none d-md-inline-flex" data-toggle="modal"
                                                     data-target="#modalForm">
                                                     <em class="icon ni ni-plus"></em>
                                                     <span>Add Data</span>
                                                 </a>
                                             </li>
                                         </ul>
                                     </div>
                                 </div>
                             </div><!-- .nk-block-head-content -->
                         </div><!-- .nk-block-between -->
                     </div>

                     <div class="card card-preview">
                         <div class="card-inner">
                             <table class="datatable-init table">
                                 <thead>
                                     <tr>
                                         <th>No</th>
                                         <th>Device</th>
                                         <th>Alternatif</th>
                                         <th>Kriteria</th>
                                         <th>Nilai</th>
                                     </tr>
                                 </thead>
                                 <tbody>

                                     <?php
                                        $no = 1;
                                        foreach ($datauji as $row) {
                                        ?>

                                     <tr>
                                         <td><?= $no ?></td>
                                         <td><?= $row->device ?></td>
                                         <td><?= $row->nama_alternatif ?></td>
                                         <td><?= $row->nama_kriteria ?></td>
                                         <td><?= $row->nilai ?></td>

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

 <!-- Modal Form -->
 <div class="modal fade" tabindex="-1" id="modalForm">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title">Add Data</h5>
                 <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                     <em class="icon ni ni-cross"></em>
                 </a>
             </div>
             <div class="modal-body">
                 <form action="<?= base_url('alternatif/addnew') ?>" class="form-validate is-alter" method="post">
                     <div class="form-group">
                         <label class="form-label" for="full-name">Device</label>
                         <div class="form-control-wrap">
                             <input type="text" class="form-control" name="device" id="full-name"
                                 placeholder="Masukkan nama device" required>
                         </div>
                     </div>

                     <div class="form-group">
                         <label class="form-label" for="phone-no">Alternatif</label>
                         <div class="form-control-wrap">
                             <select class="form-control" name="alternatif">
                                 <option value="1">Dalam Rumah</option>
                                 <option value="3">Luar Rumah</option>
                                 <option value="2">Tepi Jalan</option>
                                 <option value="4">Lokasi Parkir</option>
                             </select>
                         </div>
                     </div>
                     <div class="form-group">
                         <label class="form-label" for="phone-no">Tipe CCTV</label>
                         <div class="form-control-wrap">
                             <select class="form-control" name="1">
                                 <option value="0.2">Tipe Dome</option>
                                 <option value="0.5">Tipe Bullet</option>
                                 <option value="1">Infrared</option>
                             </select>
                         </div>
                     </div>
                     <div class="form-group">
                         <label class="form-label" for="phone-no">Kondisi Ruang</label>
                         <div class="form-control-wrap">
                             <select class="form-control" name="2">
                                 <option value="0.2">Ruang Terbuka</option>
                                 <option value="1">Ruang Tertutup</option>
                                 <option value="0.5">Semi Terbuka</option>
                             </select>
                         </div>
                     </div>
                     <div class="form-group">
                         <label class="form-label" for="phone-no">Lokasi obyek</label>
                         <div class="form-control-wrap">
                             <select class="form-control" name="3">
                                 <option value="0.5">jauh dari Obyek</option>
                                 <option value="1">Dekat dari obyek</option>
                             </select>
                         </div>
                     </div>
                     <div class="form-group">
                         <label class="form-label" for="phone-no">Pencahayaan</label>
                         <div class="form-control-wrap">
                             <select class="form-control" name="4">
                                 <option value="1">Cukup</option>
                                 <option value="0.5">Kurang</option>
                             </select>
                         </div>
                     </div>

                     <div class="form-group">
                         <button type="submit" class="btn btn-lg btn-primary">Simpan Data</button>
                     </div>
                 </form>
             </div>

         </div>
     </div>
 </div>