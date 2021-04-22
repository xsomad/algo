
 


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-primary"><?= $title; ?></h1>
 
 		<div class="card">
		  <div class="card-header">
		  	<a class="btn btn btn-outline-success" href="" data-toggle="modal" data-target="#newJamModal">Tambah</a>
		  	
		    
		  </div>
		  <div class="card-body">
		    <div class="table-responsive">
                  <table id="jamTable" class="table table-bordeless table-hover" width="100%"cellspacing="0">
                    <!-- <table id="empTable" class="display"> -->
                    <thead class="thead-light">
                      <tr> 
                        <th width="10px">No</th>
                        <th>Range Jam</th>
                        <th>SKS</th>
                        <th>Sesi</th> 
                        
                        
                        <th width="50px">Aksi</th>
                      </tr>
                    </thead>
                    
                    <!-- load barang -->
 
                    
                  </table>
                </div>
		    

		  </div>
		</div>
  


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content --> 


<!-- Modal add -->
<div class="modal fade" id="newJamModal" tabindex="-1" role="dialog" aria-labelledby="newJamModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-danger" id="newMenuModalLabel">Add Anggota Baru</h5>
                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button> -->
            </div>
            <form action="<?= base_url('menu'); ?>" method="post">
                <div class="modal-body">

                	<div class="row">

                		<div class="col-8">
                			<div class="form-group">
                        		<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
                    		</div>
                		</div>
                		<div class="col-4">
                			<div class="form-group">
                        		<input type="text" class="form-control" id="gelar" name="gelar" placeholder="Gelar">
                    		</div>
                		</div>

                	</div>

                	<div class="row">
                		<div class="col">
                			<div class="form-group">
                        		<input type="text" class="form-control" id="nira" name="nira" placeholder="NIRA">
                    		</div>
                		</div>
                	</div>

                	<div class="row">
                		<div class="col">
                			<div class="form-group">
                        		<input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat">
                    		</div>
                		</div>
                	</div>
                    
                	<div class="row">
                		<div class="col-5">
                			<div class="form-group">
                        		<input type="text" class="form-control" id="tgl_lahir" name="tgl_lahir" placeholder="Tanggal Lahir">
                    		</div>
                		</div>
                		<div class="col-7">
                			<div class="form-group">
                        		<input type="text" class="form-control" id="temp_lahir" name="temp_lahir" placeholder="Tempat Lahir">
                    		</div>
                		</div>
                	</div>
                    
                    <div class="row">
                		<div class="col-6">
                			<div class="form-group">
                        		<input type="text" class="form-control" id="dpp" name="dpp" placeholder="DPP">
                    		</div>
                		</div>
                		<div class="col-6">
                			<div class="form-group">
                        		<input type="text" class="form-control" id="dpw" name="dpw" placeholder="DPW">
                    		</div>
                		</div>
                	</div>


                	<div class="row">
                		<div class="col">
                			<div class="form-group">
				                <!-- <label for="picture">Picture</label> -->
				                
				                        <div class="input">
				                            <div class="custom-file">
				                                <input type="file" class="custom-file-input" id="fileku" name="fileku">
				                                <label class="custom-file-label" for="image">Choose file</label>
				                            </div>
				                        </div>
				                    
				            </div>
                		</div>
                	</div>



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn btn btn-outline-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn btn btn-outline-success">Add</button>
                </div>
            </form>
        </div>
    </div>
</div> 


<!-- Modal detail -->
<div class="modal fade" id="detailAnggotaModal" tabindex="-1" role="dialog" aria-labelledby="detailAnggotaModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-primary" id="newMenuModalLabel">Detail Anggota</h5>
                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button> -->
            </div>
            <form action="<?= base_url('menu'); ?>" method="post">
                <div class="modal-body">

                	<div class="row">

                		<!-- <div class="card"> -->
					        <div class="row no-gutters">
					            <div class="col-md-4">
					                <img src="<?= base_url('assets/img/foto/') . $user['image']; ?>" class="card-img">
					            </div>
					            <div class="col-md-8">
					                <div class="card-body">
					                    <h5 class="card-title"><?= $user['name']; ?></h5>
					                    <p class="card-text"><?= $user['email']; ?></p>
					                    <p class="card-text"><small class="text-muted">Member since <?= date('d F Y', $user['date_created']); ?></small></p>
					                </div>
					            </div>
					        </div>
					    <!-- </div> -->
                		
                	</div>

                	



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn btn btn-outline-danger" data-dismiss="modal">Close</button>
                    <button href="" class="btn btn btn btn-outline-primary">Print</button>
                </div>
            </form>
        </div>
    </div>
</div> 