 <div class="container">
    <div class="berhasil" data-flashdata="<?php echo $this->session->flashdata('berhasil') ?>"></div>
 <div class="row mt-4">

                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Karyawan <h3><?=$karyawan['jumlah']?></h3></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                       
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Cuti <h3><?=$cuti['jumlah']?></h3></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        
                                       
                                    </div>
                                </div>
                            </div>
                           
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Cuti ditolak <h3><?=$tolak['jumlah']?></h3></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>