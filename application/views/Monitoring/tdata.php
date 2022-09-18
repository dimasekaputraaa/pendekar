
                <!-- Begin Page Content -->
                 <div class="container-fluid">
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tambah Data</h6>
                        </div>
                        <div class="card-body">
                            <form class="forms-sample" method="post" action="<?php echo base_url('monitoring/fungsiTambah') ?>">
                                
                                <div class="row">
                                <div class="form-group col-sm-2">
                                  <label for="exampleInputUsername1">kode Titik</label>
                                  <input type="text" class="form-control" id="exampleInputUsername1" placeholder="kode Titik" name="kode_titik">
                                </div>
                                <div class="form-group col-sm-10">
                                  <label for="exampleInputUsername1">Nama Titik</label>
                                  <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Nama Titik" name="nama_titik">
                                </div>
                                  <div class="form-group col-sm-6">
                                    <label for="exampleInputEmail1">latitude</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="latitude" name="latitude">
                                  </div>
                                  <div class="form-group col-sm-6">
                                    <label for="exampleInputPassword1">Longitude</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Longitude" name="longitude">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputUsername1">Deskripsi</label>
                                  <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Deskripsi" name="deskripsi">
                                </div>
                                <button type="submit" class="btn btn-primary mr-2"><a style="color:white; text-decoration: none;">Tambah</a> </button>
                                <button class="btn btn-light"><a href="<?php echo base_url('monitoring') ?>" style="color:black; text-decoration: none;">Batal</a></button>
                              </form>
                        </div>
                    </div>

                </div>

                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

