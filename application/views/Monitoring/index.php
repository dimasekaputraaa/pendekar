
                <!-- Begin Page Content -->
                <div class="container-fluid">
    	          <div class="row">

    	          	<?php
    	          		foreach ($queryAllTitik as $row){
    	          	?>
   
		              <div class="col-md-4 col-sm-6 col-xs-12 grid-margin stretch-card mb-3">
		                <div class="card" style="width: 18rem;">
		                  <img src="<?= base_url('assets/foto/'.$row->foto)  ?>" class="card-img-top" alt="..." style="height: 200px;">
		                  <div class="card-body">
		                    <h5 class="card-title"><?php echo $row->nama_titik ?></h5>
		                    <p class="card-text" style="overflow: auto; height: 120px;"><?php echo $row->deskripsi ?></p>
		                    <!-- <a href="#" class="btn">Detail</a> -->
		                    <button class="btn btn-light" style="background-color: #007bff;"><a href="<?php echo base_url('monitoring/detail')?>" style="color: white; text-decoration: none;">Detail</a></button>
		                    <button class="btn btn-light"><a href="<?php echo base_url('monitoring/ubah')?>/<?php echo $row->kode_titik ?>" style="color:black; text-decoration: none;">Ubah</a></button>
		                    <!-- Button trigger modal -->
							<button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModalCenter">
							  Hapus
							</button>

							<!-- Modal -->
							<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
							  <div class="modal-dialog modal-dialog-centered" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="exampleModalLongTitle">Anda Yakin Hapus Data ini?</h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
							        <button type="button" class="btn btn-danger" ><a href="<?php echo base_url('monitoring/fungsiHapus')?>/<?php echo $row->kode_titik ?>" style="text-decoration: none; color: white;"> Hapus</a></button>
							      </div>
							    </div>
							  </div>
							</div>
		                  </div>
		                </div>
		              </div>
		            <?php } ?>
		          </div>
                </div>



                <!-- /.container-fluid -->

            </div>
            