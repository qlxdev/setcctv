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
                 <h5 class="modal-title">Customer Info</h5>
                 <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                     <em class="icon ni ni-cross"></em>
                 </a>
             </div>
             <div class="modal-body">
                 <form action="#" class="form-validate is-alter">
                     <div class="form-group">
                         <label class="form-label" for="full-name">Full Name</label>
                         <div class="form-control-wrap">
                             <input type="text" class="form-control" id="full-name" required>
                         </div>
                     </div>
                     <div class="form-group">
                         <label class="form-label" for="email-address">Email address</label>
                         <div class="form-control-wrap">
                             <input type="text" class="form-control" id="email-address" required>
                         </div>
                     </div>
                     <div class="form-group">
                         <label class="form-label" for="phone-no">Phone No</label>
                         <div class="form-control-wrap">
                             <input type="text" class="form-control" id="phone-no">
                         </div>
                     </div>
                     <div class="form-group">
                         <label class="form-label">Communication</label>
                         <ul class="custom-control-group g-3 align-center">
                             <li>
                                 <div class="custom-control custom-control-sm custom-checkbox">
                                     <input type="checkbox" class="custom-control-input" id="com-email">
                                     <label class="custom-control-label" for="com-email">Email</label>
                                 </div>
                             </li>
                             <li>
                                 <div class="custom-control custom-control-sm custom-checkbox">
                                     <input type="checkbox" class="custom-control-input" id="com-sms">
                                     <label class="custom-control-label" for="com-sms">SMS</label>
                                 </div>
                             </li>
                             <li>
                                 <div class="custom-control custom-control-sm custom-checkbox">
                                     <input type="checkbox" class="custom-control-input" id="com-phone">
                                     <label class="custom-control-label" for="com-phone">Phone</label>
                                 </div>
                             </li>
                         </ul>
                     </div>
                     <div class="form-group">
                         <label class="form-label" for="pay-amount">Amount</label>
                         <div class="form-control-wrap">
                             <input type="text" class="form-control" id="pay-amount">
                         </div>
                     </div>
                     <div class="form-group">
                         <button type="submit" class="btn btn-lg btn-primary">Save Informations</button>
                     </div>
                 </form>
             </div>
             <div class="modal-footer bg-light">
                 <span class="sub-text">Modal Footer Text</span>
             </div>
         </div>
     </div>
 </div>