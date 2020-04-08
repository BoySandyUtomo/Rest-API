<div class="container-fluid">
    <div class="row">
      <div class="col-lg-8">
        
          	<form>
          		<div class="form-group row">
          			<label for="" class="col-sm-2 col-form-label">ID</label>
          			<div class="col-sm-10">
          				<input type="text" class="form-control" id="name" name="name" value="<?= $data ['id'];?>" readonly>
          			</div>
				</div>
          		<div class="form-group row">
          			<label for="" class="col-sm-2 col-form-label">Nama</label>
          			<div class="col-sm-10">
          				<input type="text" class="form-control" id="name" name="name" value="<?= $data ['name'];?>" readonly>
          			</div>
				</div>
				<div class="form-group row">
				    <label for="" class="col-sm-2 col-form-label">Penerima</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="penerima" name="penerima" value="<?= $data ['penerima'];?>" readonly>
				    </div>
				</div>
				<div class="form-group row">
				    <label for="" class="col-sm-2 col-form-label">Email</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="penerima" name="penerima" value="<?= $data ['email'];?>" readonly>
				    </div>
				</div>
				<div class="form-group row">
				    <label for="" class="col-sm-2 col-form-label">Tujuan</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="penerima" name="penerima" value="<?= $data ['alamat'];?>" readonly>
				    </div>
				</div>
				<div class="form-group row">
				    <label for="" class="col-sm-2 col-form-label">No.Hp</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="penerima" name="penerima" value="<?= $data ['hp'];?>" readonly>
				    </div>
				</div>
				<div class="form-group row">
				    <label for="" class="col-sm-2 col-form-label">Paket</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="penerima" name="penerima" value="<?= $data ['paket'];?>" readonly>
				    </div>
				</div>
				<div class="form-group row">
					<label for="" class="col-sm-2 col-form-label"></label>
					<div class="col-sm-10">
						<a href="<?= base_url('edit');?>" type="submit" class="btn btn-primary float-right" >Kembali</a>
					</div>
				</div>
			</form>
        
      </div>
    </div>
</div>