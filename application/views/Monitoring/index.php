
                <!-- Begin Page Content -->
                <div class="container-fluid">
    	          <div class="row">

    	          	<?php
    	          		foreach ($queryAllTitik as $row){
    	          	?>
   
		              <div class="col-md-4 col-sm-6 col-xs-12 grid-margin stretch-card mb-3">
		                <div class="card" style="width: 18rem;">
		                  <img src="https://awsimages.detik.net.id/community/media/visual/2020/07/03/daun-daun-pohon-di-hutan-gunung-pegat-klaten-mulai-berguguran_169.jpeg?w=700&q=90" class="card-img-top" alt="...">
		                  <div class="card-body">
		                    <h5 class="card-title"><?php echo $row->nama_titik ?></h5>
		                    <p class="card-text" style="overflow: auto; height: 120px;"><?php echo $row->deskripsi ?></p>
		                    <!-- <a href="#" class="btn">Detail</a> -->
		                    <button class="btn btn-light" style="background-color: #007bff;"><a href="#" style="color: white; text-decoration: none;">Detail</a></button>
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
            